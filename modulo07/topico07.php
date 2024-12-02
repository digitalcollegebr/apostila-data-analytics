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
                <a href="topico06.php" class="button-left">
                        <img src="../assets/img/arrow-left.png" alt="" class="left">
                </a>
                <p class="Titulo">7. Steps fluxo</p>
                <p class="Texto">
                    Os steps de fluxo no Pentaho Data Integration são componentes que permitem
                    controlar o fluxo de dados e executar operações específicas em uma
                    transformação. Esses steps são usados para conectar as etapas de uma
                    transformação, controlar a ordem de execução, realizar verificações condicionais
                    e executar ações adicionais, como atualizar variáveis ou gravar dados em um
                    arquivo de log.
                </p>
                <p class="Texto">Entre os steps de fluxo disponíveis no Pentaho Data Integration, podemos citar:</p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>1.</strong></span> Dummy: é usado para conectar steps, mas não faz nada além disso;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Block Until Steps Finish: aguarda a conclusão de determinados steps antes de prosseguir para os próximos;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Failure: conecta um step de falha ao próximo passo no fluxo;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Filter Rows: filtra linhas com base em uma condição específica;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Group by: agrupa os dados com base em uma ou mais colunas de dados.</p></li>
                </ol>
                <p class="Texto">
                    Além desses, existem vários outros steps de fluxo disponíveis no Pentaho Data
                    Integration. Esses steps permitem criar fluxos de trabalho personalizados para
                    processar e transformar dados de acordo com as necessidades específicas do
                    projeto. Em geral, os steps de fluxo são projetados para controlar a ordem de
                    execução dos steps em uma transformação e para realizar operações adicionais,
                    como filtragem, agrupamento ou espera condicional.
                </p>
                <p class="Subtopico"><strong>7.1. Dummy</strong></p>
                <p class="Texto">
                    O step <span class="code-color">Dummy</span> é um componente simples e útil no Pentaho Data Integration que
                    não executa nenhuma operação real, mas é usado para conectar outros steps em
                    uma transformação. Ele pode ser usado como um "espaço reservado" para
                    conectar steps que ainda não foram definidos ou para criar fluxos alternativos na
                    transformação.
                </p>
                <p class="Texto">
                    Em termos simples, o step <span class="code-color">Dummy</span> é apenas uma etapa intermediária que não
                    faz nada. Quando uma transformação é executada, o step <span class="code-color">Dummy</span> simplesmente
                    passa os dados de entrada para o próximo step sem modificar ou processar
                    esses dados.
                </p>
                <p class="Texto">
                    Um exemplo de uso do step <span class="code-color">Dummy</span> seria quando uma transformação é
                    projetada para ser executada de diferentes maneiras, dependendo de
                    determinadas condições. Nesse caso, é possível usar o step Dummy para criar
                    dois fluxos de trabalho diferentes que se unem novamente em um step comum.
                    Por exemplo, imagine que uma transformação deva processar dados de duas
                    fontes diferentes: um banco de dados e um arquivo CSV. Dependendo do tipo de
                    arquivo de entrada, a transformação pode precisar seguir um caminho diferente.
                    Usando o step Dummy, você pode criar dois fluxos de trabalho que executam as
                    operações específicas para cada fonte de dados e, em seguida, se juntam
                    novamente em um step comum para executar as próximas operações.
                </p>
                <p class="Texto">
                    Embora o step <span class="code-color">Dummy</span> seja relativamente simples, ele pode ser uma ferramenta
                    poderosa para criar fluxos de trabalho mais complexos e para conectar
                    operações em uma transformação do Pentaho Data Integration. Ele é
                    especialmente útil para criar transformações mais modulares e flexíveis, que
                    podem ser facilmente modificadas ou expandidas conforme necessário.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 143259.png" alt="" class="example-images">
                <p class="Subtopico"><strong>7.2. Block Until Steps Finish</strong></p>
                <p class="Texto">
                    O step "Block Until Steps Finish" no Pentaho Data Integration é usado para
                    controlar o fluxo de execução de uma transformação, esperando que uma ou
                    mais etapas anteriores sejam concluídas antes de continuar.
                </p>
                <p class="Texto">
                    Este step é particularmente útil quando há etapas que devem ser concluídas
                    antes que outras possam começar, como a etapa de carga de dados em um
                    banco de dados, que deve ser concluída antes que uma etapa de limpeza possa
                    ser executada. Usando o step "Block Until Steps Finish", é possível definir uma
                    dependência explícita entre as etapas, garantindo que cada etapa seja executada
                    na ordem correta.
                </p>
                <p class="Texto">
                    O step "Block Until Steps Finish" é configurado selecionando as etapas anteriores
                    da transformação que devem ser concluídas antes que a execução continue.
                    Quando a transformação chega ao step "Block Until Steps Finish", ele verifica se
                    todas as etapas anteriores selecionadas estão concluídas antes de continuar a
                    execução.
                </p>
                <p class="Texto">
                    Um exemplo prático de uso do step "Block Until Steps Finish" é quando você tem
                    uma transformação que processa dados em uma série de etapas. A última etapa
                    é a carga de dados em um banco de dados, que pode levar algum tempo para ser
                    concluída. Para garantir que a transformação seja executada corretamente, você
                    pode usar o step "Block Until Steps Finish" para garantir que todas as etapas
                    anteriores sejam concluídas antes que a etapa de carga de dados seja executada.
                    Dessa forma, você garante que os dados processados estejam corretos antes de
                    serem carregados no banco de dados.
                </p>
                <p class="Texto">
                    Em resumo, o step "Block Until Steps Finish" é um componente útil do Pentaho
                    Data Integration que ajuda a controlar o fluxo de execução de uma
                    transformação, garantindo que as etapas sejam executadas na ordem correta e
                    que cada etapa seja concluída antes que a próxima comece.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 144612.png" alt="" class="example-images">
                <p class="Subtopico"><strong>7.3. Abort</strong></p>
                <p class="Texto">
                    O step Abort no Pentaho Data Integration é usado para interromper a execução
                    da transformação, seja devido a um erro ou a uma condição específica que
                    precisa ser atendida. Ele pode ser usado em situações em que você deseja parar
                    a execução da transformação devido a um problema, ou quando deseja
                    interromper a execução de uma maneira controlada.
                </p>
                <p class="Texto">
                    O step Abort é configurado definindo a condição que deve ser atendida para que
                    a transformação seja interrompida. Essa condição pode ser um erro específico
                    que ocorreu em uma etapa anterior da transformação, ou pode ser uma
                    condição personalizada que você define usando variáveis ou expressões.
                </p>
                <p class="Texto">
                    Um exemplo prático de uso do step Abort é quando uma transformação deve ser
                    interrompida se houver um erro em uma etapa específica. Nesse caso, o step
                    Abort pode ser configurado para interromper a execução da transformação se
                    houver um erro na etapa específica. Isso ajuda a evitar que erros sejam
                    propagados para etapas subsequentes da transformação, impedindo que dados
                    incorretos sejam processados.
                </p>
                <p class="Texto">
                    Outro exemplo de uso do step Abort é quando você deseja interromper a
                    execução de uma transformação em uma determinada hora do dia,
                    independentemente do status atual da transformação. Nesse caso, você pode
                    usar uma expressão para definir a condição de interrupção, verificando a hora
                    atual do sistema em relação a um horário definido.
                </p>
                <p class="Texto">
                    Em resumo, o step Abort é um componente útil do Pentaho Data Integration que
                    ajuda a controlar a execução da transformação, permitindo que você interrompa
                    a execução em situações específicas. Ele pode ser usado para evitar que erros
                    sejam propagados para etapas subsequentes, ou para interromper a execução
                    de uma maneira controlada, conforme necessário.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 145004.png" alt="" class="example-images">
                <p class="Subtopico"><strong>7.4. Switch / Case</strong></p>
                <p class="Texto">
                    O step Switch / Case no Pentaho Data Integration é usado para rotear dados com
                    base em diferentes condições ou valores de entrada. É semelhante a uma
                    estrutura de controle switch/case usada em programação.
                </p>
                <p class="Texto">
                    O step Switch / Case consiste em duas partes: o step Switch e os steps Case. O
                    step Switch define a coluna de entrada na qual se baseará a rotação dos dados,
                    enquanto os steps Case definem as diferentes condições ou valores nos quais os
                    dados serão roteados.
                </p>
                <p class="Texto">
                    Um exemplo prático de uso do step Switch / Case é quando você tem um
                    conjunto de dados que precisa ser dividido em diferentes saídas com base em
                    um determinado campo. Digamos que você tenha um conjunto de dados de
                    vendas que inclui informações sobre os produtos vendidos, o país de venda e o
                    valor da venda. Você deseja dividir as vendas com base no país de venda e enviar
                    cada país para uma saída diferente.
                </p>
                <p class="Texto">
                    Para fazer isso, você pode usar o step Switch / Case. Defina o campo "Country"
                    como a coluna de entrada do step Switch e adicione os steps Case para cada país
                    para o qual você deseja criar uma saída separada. Em cada step Case, defina a
                    condição correspondente para o país. Por exemplo, para os EUA, a condição seria
                    "Country = 'USA'". Em seguida, conecte a saída do step Switch aos steps Case
                    correspondentes e configure cada saída conforme necessário.
                </p>
                <p class="Texto">
                    O step Switch / Case também pode ser usado para rotear dados com base em
                    outras condições, como o valor de uma coluna ou uma expressão. Por exemplo,
                    você pode criar diferentes saídas com base no valor de uma coluna de status, ou
                    rotear dados com base em uma combinação de colunas.
                </p>
                <p class="Texto">
                    Em resumo, o step Switch / Case no Pentaho Data Integration é uma ferramenta
                    útil para rotear dados com base em diferentes condições ou valores de entrada.
                    Ele pode ser usado para dividir conjuntos de dados em saídas separadas com
                    base em um campo específico, ou para rotear dados com base em outras
                    condições, como valores de coluna ou expressões.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 145403.png" alt="" class="example-images">
                <p class="Subtopico"><strong>7.5. Blocking Step</strong></p>
                <p class="Texto">
                    O step Blocking Step no Pentaho Data Integration é usado para impedir que as
                    etapas subsequentes de uma transformação sejam executadas até que as etapas
                    de bloqueio sejam concluídas. Ele é especialmente útil quando há etapas
                    dependentes que precisam ser executadas em uma ordem específica.
                </p>
                <p class="Texto">
                    O step Blocking Step é configurado adicionando os steps que precisam ser
                    bloqueados, na ordem em que devem ser executados, e definindo um nome de
                    grupo para identificar as etapas bloqueadas. Qualquer etapa subsequente na
                    transformação que precise dos dados das etapas bloqueadas não será executada
                    até que as etapas bloqueadas sejam concluídas.
                </p>
                <p class="Texto">
                    Um exemplo prático de uso do step Blocking Step é quando você tem uma
                    transformação que lê dados de um arquivo, faz algumas transformações e, em
                    seguida, carrega os dados em um banco de dados. Para garantir que os dados
                    sejam carregados na ordem correta, você pode usar o step Blocking Step para
                    bloquear a etapa de carregamento até que todas as transformações sejam
                    concluídas.
                </p>
                <p class="Texto">
                    Por exemplo, imagine que você tem um arquivo de dados com informações de
                    vendas, incluindo o produto, o país e o valor da venda. Você deseja ler os dados
                    do arquivo, separar as vendas por país, calcular a receita total para cada país e,
                    em seguida, carregar os dados em um banco de dados. Você pode usar o step
                    Blocking Step para bloquear a etapa de carregamento até que as transformações
                    de separação e cálculo de receita sejam concluídas.
                </p>
                <p class="Texto">
                    Para fazer isso, adicione os steps de separação e cálculo de receita ao grupo de
                    bloqueio, configure a etapa de carregamento para ser executada após as etapas
                    bloqueadas e defina um nome de grupo para identificar as etapas bloqueadas.
                    Quando a transformação for executada, o step de carregamento será bloqueado
                    até que as etapas de separação e cálculo de receita sejam concluídas, garantindo
                    que os dados sejam carregados na ordem correta.
                </p>
                <p class="Texto">
                    Em resumo, o step Blocking Step no Pentaho Data Integration é uma ferramenta
                    útil para impedir que as etapas subsequentes de uma transformação sejam
                    executadas até que as etapas de bloqueio sejam concluídas. Ele é especialmente
                    útil quando há etapas dependentes, que precisam ser executadas em uma
                    ordem específica, como ler dados de um arquivo, fazer transformações e carregar
                    os dados em um banco de dados.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 145814.png" alt="" class="example-images">
                <a href="topico08.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>