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
                <a href="topico05.php" class="button-left">
                        <img src="../assets/img/arrow-left.png" alt="" class="left">
                </a>
                <p class="Titulo">6. Steps de Transformação</p>
                <p class="Texto">
                    Os steps de transformação no Pentaho Data Integration (também conhecido
                    como Kettle) são componentes que permitem que os dados sejam transformados
                    de uma forma específica. Esses steps podem ser usados para realizar diversas
                    tarefas de transformação de dados, como limpeza de dados, filtragem de
                    registros, combinação de dados de diferentes fontes, cálculos de campo, dentre
                    outras.
                </p>
                <p class="Texto">
                    Os steps de transformação mais comuns no Pentaho Data Integration incluem:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>1.</strong></span> Input: permite a leitura de dados de uma fonte específica, como um arquivo de texto, um banco de dados relacional ou uma planilha do Excel</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Filter rows: filtra registros com base em uma condição especificada;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Sort rows: classifica os registros com base em uma ou mais colunas;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Merge join: combina dados de duas ou mais fontes com base em uma coluna comum;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Calculator: realiza cálculos em colunas existentes ou cria novas colunas;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>6.</strong></span> Split fields: divide uma coluna em várias colunas com base em um separador especificado;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>7.</strong></span> Lookup: pesquisa uma tabela ou fonte de dados externa para obter valores correspondentes para uma coluna de entrada.</p></li>
                </ol>
                <p class="Texto">
                    Existem muitos outros steps de transformação disponíveis no Pentaho Data
                    Integration, dependendo das necessidades específicas do projeto. Cada step de
                    transformação possui suas próprias opções de configuração para definir a forma
                    como os dados serão transformados.
                </p>
                <p class="Subtopico"><strong>6.1. Select Values</strong></p>
                <p class="Texto">
                    O step Select Values no Pentaho Data Integration (também conhecido como
                    Kettle) é um componente que permite selecionar colunas específicas de um
                    conjunto de dados de entrada. Esse step é muito útil quando se trabalha com
                    grandes volumes de dados e se deseja reduzir o número de colunas que
                    precisam ser processadas ou exibidas.
                </p>
                <p class="Texto">
                    Para usar o step Select Values, basta arrastá-lo para o design da transformação e
                    conectá-lo à fonte de dados de entrada. Em seguida, é preciso configurar o step,
                    indicando quais colunas devem ser selecionadas. É possível selecionar colunas
                    individuais ou selecionar um intervalo de colunas utilizando a sintaxe do SQL.
                </p>
                <p class="Texto">
                    Por exemplo, se temos um conjunto de dados com as seguintes colunas: "Nome",
                    "Idade", "Sexo", "Cidade", "País", "Código Postal", podemos usar o step Select
                    Values para selecionar apenas as colunas "Nome", "Idade" e "Cidade". Isso pode
                    ser útil, por exemplo, se quisermos gerar um relatório que exiba apenas essas
                    informações.
                </p>
                <p class="Texto">
                    Além disso, é possível renomear as colunas selecionadas para que elas tenham
                    nomes mais descritivos. Para isso, basta clicar em "Edit" na caixa de diálogo do
                    step Select Values e selecionar a opção "Rename columns".
                </p>
                <p class="Texto">
                    Em resumo, o step Select Values é útil para selecionar apenas as colunas de
                    interesse de um grande conjunto de dados, o que pode ajudar a reduzir o tempo
                    de processamento e a simplificar a análise de dados.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 140653.png" alt="" class="example-images">
                <p class="Subtopico"><strong>6.2. Filter Rows</strong></p>
                <p class="Texto">
                    O step Filter Rows no Pentaho Data Integration (também conhecido como Kettle)
                    é um componente que permite filtrar linhas de dados com base em uma
                    condição especificada. Esse step é muito útil para reduzir o tamanho de um
                    conjunto de dados, eliminando linhas que não são relevantes para a análise ou
                    para o processamento posterior.
                </p>
                <p class="Texto">
                    Para usar o step Filter Rows, basta arrastá-lo para o design da transformação e
                    conectá-lo à fonte de dados de entrada. Em seguida, é preciso configurar o step,
                    definindo a condição que deve ser usada para filtrar as linhas. A condição é
                    especificada usando a sintaxe do SQL, e pode incluir operadores lógicos (AND,
                    OR), operadores de comparação (=, >, <) e funções de texto (como UPPER ou
                    LOWER).
                </p>
                <p class="Texto">
                    Por exemplo, se temos um conjunto de dados com informações sobre vendas,
                    podemos usar o step Filter Rows para selecionar apenas as vendas que foram
                    realizadas em um determinado país ou período de tempo. Para isso, podemos
                    configurar o step para filtrar as linhas em que a coluna "País" é igual a "Brasil" e
                    em que a coluna "Data" está entre 01/01/2022 e 31/12/2022, por exemplo.
                </p>
                <p class="Texto">
                    Outra situação possível seria filtrar apenas as linhas que contêm um determinado
                    valor em uma coluna específica. Por exemplo: podemos usar o step Filter Rows
                    para selecionar apenas as linhas que contêm a palavra "importante" na coluna
                    "Descrição".
                </p>
                <p class="Texto">
                    Em resumo, o step Filter Rows é útil para filtrar linhas de dados com base em
                    uma condição especificada, o que pode ajudar a reduzir o tamanho de um
                    conjunto de dados e torná-lo mais relevante para a análise ou processamento
                    posterior.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 141113.png" alt="" class="example-images">
                <p class="Subtopico"><strong>6.3. String Cut</strong></p>
                <p class="Texto">
                    O step String Cut no Pentaho Data Integration (também conhecido como Kettle) é
                    um componente que permite cortar uma parte de uma string em uma coluna
                    específica. Esse step é útil quando se trabalha com dados de texto e é necessário
                    extrair uma parte específica de uma string para uso posterior.
                </p>
                <p class="Texto">
                    Para usar o step String Cut, basta arrastá-lo para o design da transformação e
                    conectá-lo à fonte de dados de entrada. Em seguida, é preciso configurar o step,
                    indicando qual coluna contém a string a ser cortada e qual o ponto de início e de
                    fim do corte.
                </p>
                <p class="Texto">
                    Por exemplo, se temos um conjunto de dados com uma coluna "Nome Completo"
                    que contém o nome e o sobrenome de uma pessoa, podemos usar o step String
                    Cut para extrair apenas o sobrenome. Para isso, devemos configurar o step para
                    cortar a string da coluna "Nome Completo" a partir do último espaço em branco
                    (que indica o final do nome) até o final da string.
                </p>
                <p class="Texto">
                    Além disso, é possível renomear a nova coluna gerada pelo step para um nome
                    mais descritivo, como "Sobrenome".
                </p>
                <p class="Texto">
                    Outro exemplo seria cortar apenas uma parte da string, como o código postal em
                    um endereço. Nesse caso, seria preciso configurar o step para cortar a string da
                    coluna "Endereço" a partir de um ponto específico, que pode ser determinado
                    pela posição ou pelo valor do caractere.
                </p>
                <p class="Texto">
                    Em resumo, o step String Cut é útil para extrair uma parte específica de uma
                    string em uma coluna, o que pode ajudar a simplificar a análise ou
                    processamento de dados de texto.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 141450.png" alt="" class="example-images">
                <p class="Subtopico"><strong>6.4. Calculator</strong></p>
                <p class="Texto">
                    O step Calculator no Pentaho Data Integration (também conhecido como Kettle) é
                    um componente que permite realizar cálculos matemáticos e lógicos em colunas
                    de dados. Esse step é útil quando se precisa criar novas colunas com base em
                    cálculos a partir de colunas existentes.
                </p>
                <p class="Texto">
                    Para usar o step Calculator, basta arrastá-lo para o design da transformação e
                    conectá-lo à fonte de dados de entrada. Em seguida, é preciso configurar o step,
                    definindo a expressão de cálculo que será aplicada às colunas existentes. A
                    expressão pode incluir operadores matemáticos (+, -, *, /), operadores lógicos
                    (AND, OR, NOT) e funções matemáticas (SIN, COS, MAX, MIN, dentre outras).
                </p>
                <p class="Texto">
                    Por exemplo, se temos um conjunto de dados com informações sobre vendas,
                    podemos usar o step Calculator para criar uma nova coluna "Total" que contém o
                    valor total de cada venda (multiplicando a quantidade pelo preço unitário). Para
                    isso, devemos configurar o step para criar a nova coluna "Total" com base nas
                    colunas "Quantidade" e "Preço Unitário", usando a expressão "Quantidade *
                    Preço Unitário".
                </p>
                <p class="Texto">
                    Outro exemplo seria criar uma nova coluna com base em uma condição lógica.
                    Por exemplo, podemos usar o step Calculator para criar uma nova coluna "Venda
                    Bem sucedida" que contém um valor booleano (verdadeiro ou falso) indicando se
                    a venda foi bem sucedida ou não. Para isso, devemos configurar o step para criar
                    a nova coluna com base na coluna "Total", usando a expressão "Total > 1000".
                </p>
                <p class="Texto">
                    Em resumo, o step Calculator é útil para realizar cálculos matemáticos e lógicos
                    em colunas de dados, o que pode ajudar a criar novas colunas com informações
                    relevantes para a análise ou para o processamento posterior.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 141833.png" alt="" class="example-images">
                <p class="Subtopico"><strong>6.5. String Operations</strong></p>
                <p class="Texto">
                    O step String Operations no Pentaho Data Integration (também conhecido como
                    Kettle) é um componente que permite executar operações específicas em
                    colunas de dados, como concatenação, substituição de valores e remoção de
                    espaços em branco. Esse step é útil para manipular os dados de entrada antes de
                    processá-los ou analisá-los.
                </p>
                <p class="Texto">
                    Para usar o step Operations, basta arrastá-lo para o design da transformação e
                    conectá-lo à fonte de dados de entrada. Em seguida, é preciso configurar o step,
                    indicando qual coluna ou colunas serão manipuladas e qual a operação que será
                    executada.
                </p>
                <p class="Texto">
                    Por exemplo, se temos um conjunto de dados com informações sobre clientes,
                    podemos usar o step Operations para criar uma nova coluna "Endereço
                    Completo" que contém o endereço completo do cliente (incluindo o nome da rua,
                    número, complemento, bairro, cidade e estado). Para isso, devemos configurar o
                    step para concatenar as colunas "Rua", "Número", "Complemento", "Bairro",
                    "Cidade" e "Estado", separando cada campo com vírgulas e espaços.
                </p>
                <p class="Texto">
                    Outro exemplo seria substituir um valor específico em uma coluna. Por exemplo,
                    podemos usar o step Operations para substituir todos os valores "N/A" na coluna
                    "Idade" por um valor padrão de "30". Para isso, devemos configurar o step para
                    substituir todos os valores "N/A" na coluna "Idade" pelo valor "30".
                </p>
                <p class="Texto">
                    Além disso, o step Operations também pode ser usado para remover espaços em
                    branco ou outros caracteres especiais de uma coluna, o que pode ajudar a
                    padronizar os dados de entrada.
                </p>
                <p class="Texto">
                    Em resumo, o step Operations é útil para executar operações específicas em
                    colunas de dados, o que pode ajudar a manipular e preparar os dados antes de
                    processá-los ou analisá-los.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 142339.png" alt="" class="example-images">
                <a href="topico07.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>