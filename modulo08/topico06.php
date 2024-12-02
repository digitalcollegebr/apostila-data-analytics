<?php
    // A_S - Header
    include('../layouts/header.php');
?>

<body>
    <!-- A_S - Habilita o VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <!-- CONTEUDO - Begin -->
    <!-- Back to top -->
    <a id="BackToTop"></a>

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <p class="Titulo">6. Apache Airflow: maestro de pipelines de tarefas agendadas</p>
                <p class="Texto">
                    Apesar de ser incrivelmente eficaz, o Airflow pode se tornar relativamente
                    confuso para iniciantes (e algumas vezes até mesmo para usuários avançados)
                    devido ao seu grande número de configurações e ampla versatilidade, que,
                    consequentemente, acabam trazendo uma carga de complexidade a mais para o
                    projeto.
                </p>
                <p class="Subtopico"><strong>6.1. O que o Airflow é?</strong></p>
                <p class="Texto">
                    O Apache Airflow é uma ferramenta de código aberto, escrita em python e
                    desenvolvida pela Apache Foundation, seu objetivo é orquestrar pipelines de
                    tarefas agendadas por meio de arquivos python com instruções de
                    sequenciamento definidas, chamados DAGs. Pense nele como um versátil
                    maestro, capaz de orquestrar diferentes músicas, de diversos tempos e com
                    diferentes instrumentos de maneira igualmente ótima.
                </p>
                <p class="Texto">
                    Para seu funcionamento, o Airflow conta com alguns elementos chave que
                    permitem a existência da sinergia necessária entre tarefas, eventos, estados e
                    filas, todos funcionando de maneira sincronizada e de acordo com as
                    configurações definidas pelo usuário.
                </p>
                <p class="Texto">
                    A Figura abaixo representa, de maneira relativamente simplificada e em uma
                    mesma máquina (visto que é possível configurar o Airflow de maneira
                    escalonável) a estrutura de uma instância da ferramenta:
                </p>
                <img src="../assets\img\Captura de tela 2024-10-31 135739.png" alt="" class="example-images">
                <p class="Texto">
                    Sendo assim, descrevendo de maneira também simplificada a funcionalidade e
                    comportamento de cada elemento apresentado na Figura anterior:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>Airflow.cfg:</strong></span> arquivo de configurações que descreve, principalmente, as conexões utilizadas para comunicação com o banco de dados de metadados da ferramenta, os intervalos de verificação de novos arquivos DAGs e a frequência de atualização dos estados correntes de cada tarefa;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Web Server:</strong></span> subsistema responsável pela integração e execução de uma interface visual para o usuário. Aqui é apresentada graficamente a maior parte dos elementos que podem ser utilizados pelo usuário, como DAGs, logs, alertas, avisos e todo tipo de monitoramento do sistema;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Scheduler:</strong></span> este componente pode ser entendido como o “coração” do Airflow. No mundo musical, é possível comparar o Scheduler a um metrônomo, ou ao compasso que dá o tempo à música. Aqui, ele é responsável pela temporização do sistema, resultando na execução programada de DAGs, no agendamento de execução de tarefas individuais das DAGs e também da distribuição destas para diferentes Executors. Resumidamente, garantir o bom funcionamento deste componente faz parte de um grande diferencial para garantir o bom funcionamento do Airflow como ferramenta, já que faz a integração de quase todos os outros componentes/subsistemas;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Metadata:</strong></span> se o Scheduler pode ser considerado o “coração” do Airflow, então o banco de dados de metadados seria o “cérebro”. É neste elemento que são armazenadas todas as variáveis utilizadas por todos os outros componentes da ferramenta, desde usuários até retornos de tarefas. Faz uso de um banco de dados relacional que permite, inclusive, a troca de informação entre tarefas, principal causa de problemas de má utilização do Airflow, que serão discutidos mais adiante no conteúdo;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Executors:</strong></span> subsistema responsável pela execução das tarefas programadas pelo Scheduler, que estão localizadas na fila (queue) deste subsistema (na atual representação). O Airflow permite a execução de diferentes tipos de tarefas por meio de operadores de diferentes naturezas, como o PythonOperator, para execução de scripts Python, o DockerOperator, para trabalho com containers do Docker ou até mesmo o BashOperator, para a execução de comandos bash. Essa versatilidade permite que cada tarefa possa ser executada isoladamente dentro do ambiente específico definido como Worker. Todas essas funções são definidas (para a arquitetura local apresentada) e executadas dentro de um Executor, que ao fim se comunica com o banco de metadados para informar o retorno das ações. Com a integração de todos esses componentes, o usuário é capaz, então, de escrever e programar a execução de diferentes conjuntos de tarefas acíclicas com uma imensa variedade de possibilidades para a execução de cada tarefa, que vão desde interpretadores Python, containers Docker e até mesmo comandos bash.</p></li>
                </ol>
                <p class="Titulo">6.2. O que o Airflow não é</p>
                <p class="Texto">
                    Após as definições dos componentes que integram o Airflow, é possível que o
                    leitor esteja imaginando diferentes tipos de fluxo de trabalho, com inúmeras
                    aplicações e a possibilidade de processar dados quase que de forma irrestrita.
                    Este conteúdo se faz ainda mais importante para este caso, visto que uma
                    limitação extremamente importante foi apresentada indiretamente no conteúdo
                    anterior mas que pode ter passado despercebida: o Airflow não é um
                    processador de dados e não pode ser utilizado para sequências indefinidamente
                    cíclicas de tarefas. Trazendo ao leitor novamente a analogia musical, seu maestro
                    até pode ser um grande multi-instrumentista, mas acaba sendo impossível
                    orquestrar a música e efetivamente tocar seus instrumentos simultaneamente.
                </p>
                <p class="Texto">
                    O problema de processamento de dados nesta ferramenta pode ser mais
                    facilmente compreendido através da explicação mais minuciosa do
                    funcionamento da transferência de dados entre tarefas. A transferência de dados
                    entre tarefas é feita através de um componente chamado Xcom, que nada mais é
                    do que a abstração de acesso, leitura e escrita de dados no banco de dados do
                    Airflow. Ou seja, para cada leitura/escrita desse banco de dados, é necessário
                    fazer uma conexão e executar uma nova operação no banco, que, para grandes
                    quantidades de dados, pode acabar resultando em problemas de consulta para
                    outras DAGs ou tarefas que estejam sendo executadas simultaneamente. Por
                    esse motivo, é indicado que o processamento de dados seja feito externamente
                    ao Airflow, utilizando Xcoms apenas para a troca de pequenas informações entre
                    tarefas, como metadados.
                </p>
                <p class="Texto">
                    Já o problema de execução de tarefas indefinidamente cíclicas se dá pela maneira
                    que os diferentes componentes e subsistemas dentro do Airflow se comunicam.
                    É esperado que um bloco de tarefas (DAG) tenha um início bem definido e
                    programado temporalmente, que em seguida irá executar suas tarefas de forma
                    sequencial ou paralela até que chegue a um fim determinado, atualizando, assim,
                    o estado da execução desse conjunto de tarefas com a condição final dele
                    (sucesso ou falha). Por esse motivo, e para evitar que usuários tentem executar
                    tarefas indefinidamente, o Airflow utiliza e deixa tão claro o conceito de grafos
                    acíclicos dirigidos.
                </p>
                

            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>