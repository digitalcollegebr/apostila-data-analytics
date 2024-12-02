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
                <p class="Titulo">3. Pentaho Data Integration e Pipeline de Dados</p>
                <p class="Texto">
                    O Pentaho Data Integration (também conhecido como Kettle) é uma ferramenta
                    de ETL (Extração, Transformação e Carregamento) que permite extrair,
                    transformar e carregar dados de diferentes fontes em diferentes destinos. O
                    Pentaho Data Integration pode ser usado em um pipeline de dados para
                    automatizar o processo de ETL.
                </p>
                <p class="Texto">
                    Um pipeline de dados é um conjunto de etapas que são executadas para
                    transformar dados brutos em informações úteis. Essas etapas geralmente
                    incluem a extração de dados de várias fontes, a limpeza e transformação dos
                    dados, a análise dos dados e a carga dos dados em um destino.
                </p>
                <p class="Texto">
                    O Pentaho Data Integration pode ser usado para criar um pipeline de dados com as seguintes etapas:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>Extração:</strong></span> o Pentaho Data Integration pode extrair dados de várias fontes, como bancos de dados relacionais, planilhas, arquivos CSV, arquivos XML, serviços da web, entre outros;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Transformação:</strong></span> o Pentaho Data Integration oferece várias transformações para limpar e transformar dados, incluindo a limpeza de dados inconsistentes, a validação de dados, a combinação de dados de várias fontes e a criação de campos calculados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Análise:</strong></span> o Pentaho Data Integration também pode ser usado para analisar dados e gerar relatórios, gráficos e dashboards;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Carga:</strong></span> finalmente, o Pentaho Data Integration pode carregar os dados transformados em um destino, como um banco de dados relacional, um arquivo CSV ou um serviço da web.</p></li>
                </ol>
                <p class="Texto">
                    Em resumo, o Pentaho Data Integration é uma ferramenta poderosa que pode
                    ser usada em um pipeline de dados para automatizar o processo de ETL. Ele
                    oferece várias funcionalidades para extrair, transformar e carregar dados, além
                    de permitir a análise dos dados e a geração de relatórios e gráficos.
                </p>
                <p class="Titulo">3.1. JOBs no Pentaho Data Integration</p>
                <p class="Texto">
                    Os Jobs no Pentaho Data Integration são responsáveis por orquestrar a execução
                    dos pipelines de dados. Um Job é um conjunto de passos, e cada passo pode
                    assumir o papel de pipeline de dados, transformações, execução de scripts ou
                    outras operações.
                </p>
                <p class="Texto">
                    Em um pipeline de dados, você pode definir a sequência de passos que devem
                    ser executados para realizar uma determinada tarefa. Um exemplo seria a
                    extração de dados de uma fonte, a transformação e validação dos dados e,
                    finalmente, o carregamento em um destino.
                </p>
                <p class="Texto">
                    Em um Job, você pode executar um ou mais pipelines de dados, em uma ordem
                    específica, com base em determinadas condições, para automatizar processos
                    mais complexos. Por exemplo, você pode criar um Job que executa um pipeline
                    de dados que extrai dados de uma fonte, verifica se há duplicatas, transforma os
                    dados e, em seguida, carrega os dados em um banco de dados. A partir disso,
                    você pode criar um segundo pipeline de dados que executa a validação de dados
                    para garantir que não há erros. O Job pode ser configurado para executar o
                    primeiro pipeline de dados e, se tudo correr bem, poderá também executar o
                    segundo pipeline de dados.
                </p>
                <p class="Texto">
                    Em resumo, o Pentaho Data Integration oferece tanto a funcionalidade de
                    pipeline de dados como de Jobs para automatizar processos mais complexos.
                    Enquanto os pipelines de dados podem ser usados para executar uma tarefa
                    específica, os Jobs podem ser usados para orquestrar vários pipelines de dados e
                    outras operações para executar processos mais complexos.
                </p>
                <p class="Subtopico"><strong>3.2. Principais Steps utilizados nos JOBs</strong></p>
                <p class="Texto">
                    Existem vários steps que podem ser utilizados em Jobs no Pentaho Data
                    Integration, cada um com uma finalidade específica. Aqui estão alguns dos
                    principais steps que são frequentemente utilizados em Jobs:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>Start:</strong></span> este é o primeiro passo em um Job e é usado para iniciar o processo;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Transformation:</strong></span> este passo é usado para executar um pipeline de dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>File Exists:</strong></span> este passo é usado para verificar se um arquivo existe em um diretório específico;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Table Exists:</strong></span> este passo é usado para verificar se uma tabela existe em um banco de dados específico;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Execute SQL Script:</strong></span> este passo é usado para executar um script SQL em um banco de dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Execute a Process:</strong></span> este passo é usado para executar um processo externo, como um script Python ou um executável;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Success:</strong></span> este passo é usado para indicar que o Job foi executado com sucesso;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Failure:</strong></span> este passo é usado para indicar que o Job falhou.</p></li>
                </ol>
                <p class="Texto">
                    Esses são apenas alguns dos steps que podem ser utilizados em Jobs no Pentaho
                    Data Integration. Existem muitos outros disponíveis para executar uma ampla
                    variedade de tarefas. É importante escolher o step certo para a tarefa que você
                    está executando para garantir que seu Job seja executado com eficiência.
                </p>
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>