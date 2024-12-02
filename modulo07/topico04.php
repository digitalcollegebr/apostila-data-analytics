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
            <a href="topico03.php" class="button-left">
                    <img src="../assets/img/arrow-left.png" alt="" class="left">
            </a>
            <p class="Titulo">4. Steps de Entrada</p>
                <p class="Texto">
                    Os "steps de entrada" (ou "input steps") no Pentaho Data Integration (também
                    conhecido como <span class="code-color">PDI</span> ou <span class="code-color">Kettle</span>) são os componentes que permitem a leitura de
                    dados de diferentes fontes e formatos para serem processados pela ferramenta.
                    Esses steps incluem:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Text file input: para ler dados de arquivos de texto;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tipo de arquivo: formato do arquivo (CSV, TSV, Delimitado, Tamanho Fixo etc.);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Opções de delimitação: caractere usado para separar as colunas no arquivo;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Opções de codificação: conjunto de caracteres usado no arquivo;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Opções de cabeçalho: indica se o arquivo contém um cabeçalho com o nome das colunas;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>6.</strong></span> Configurações das colunas: definição do nome, tipo e posição de cada coluna no arquivo.</p></li>
                </ol>
                <p class="Texto">
                    Cada step de entrada tem suas próprias configurações específicas, como o tipo
                    de arquivo, o delimitador de campo, o nome da tabela, a consulta <span class="code-color"><strong>SQL</strong></span>, entre
                    outros, dependendo do tipo de fonte de dados.
                </p>
                <p class="Subtopico"><strong>4.1. Text File Input</strong></p>
                <p class="Texto">
                    Text File Input é um "step de entrada" do <span class="code-color"><strong>Pentaho Data Integration</strong></span> que permite
                    ler dados de arquivos de texto com formatos variados. Ele é usado para
                    processar arquivos de texto com colunas delimitadas por um caractere especial
                    (como vírgulas, ponto e vírgula etc.), arquivos de texto com colunas com tamanho
                    fixo, entre outros formatos.
                </p>
                <p class="Texto">
                    O Text File Input é configurado para ler um ou mais arquivos de texto e definir as
                    colunas que devem ser lidas. Para configurar esse step, são necessárias as
                    seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: caminho e nome do arquivo que será lido;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Tipo de arquivo: formato do arquivo (CSV, TSV, Delimitado, Tamanho Fixo etc.);</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Opções de delimitação: caractere usado para separar as colunas no arquivo;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>4.</strong></span> Opções de codificação: conjunto de caracteres usado no arquivo;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>5.</strong></span> Opções de cabeçalho: indica se o arquivo contém um cabeçalho com o nome das colunas;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>6.</strong></span> Configurações das colunas: definição do nome, tipo e posição de cada coluna no arquivo.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do Text File Input seria para ler um arquivo CSV que contém
                    informações de vendas de uma loja. O arquivo tem as seguintes colunas: ID do
                    produto, nome do produto, quantidade vendida e preço unitário. O arquivo é
                    salvo com o nome "vendas.csv" e o separador de colunas é a vírgula.
                </p>
                <p class="Texto">
                    Para ler esse arquivo com o Text File Input, seria necessário configurar o step
                    com as seguintes informações:
                </p>
                <ul>
                    <li><p class="Texto">Arquivo de entrada: "vendas.csv";</p></li>
                    <li><p class="Texto">Tipo de arquivo: CSV;</p></li>
                    <li><p class="Texto">Opções de delimitação: vírgula;</p></li>
                    <li><p class="Texto">Opções de codificação: UTF-8 (ou outro conjunto de caracteres, dependendo do arquivo);</p></li>
                    <li><p class="Texto">Opções de cabeçalho: o arquivo contém um cabeçalho com o nome dascolunas;</p></li>
                    <li><p class="Texto">Configurações das colunas: nome do produto (string), quantidade vendida (integer), preço unitário (float).</p></li>
                </ul>
                <img src="../assets\img\Captura de tela 2024-10-22 145650.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-22 145822.png" alt="" class="example-images">
                <p class="Texto">
                    CSV File Input é um "step de entrada" do Pentaho Data Integration que permite
                    ler dados de arquivos CSV (Comma Separated Values). Ele é usado para processar
                    arquivos com dados estruturados em colunas separadas por vírgulas ou outros
                    caracteres delimitadores.
                </p>
                <p class="Texto">
                    O CSV File Input é configurado para ler um ou mais arquivos CSV e definir as
                    colunas que devem ser lidas. Para configurar esse step, são necessárias as
                    seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: caminho e nome do arquivo que será lido;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Opções de delimitação: caractere usado para separar as colunas no arquivo;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Opções de codificação: conjunto de caracteres usado no arquivo;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>4.</strong></span> Opções de cabeçalho: indica se o arquivo contém um cabeçalho com o nome das colunas;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>5.</strong></span> Configurações das colunas: definição do nome, tipo e posição de cada coluna no arquivo.</p></li>
                    
                </ol>
                <p class="Texto">
                    Um exemplo de uso do CSV File Input seria para ler um arquivo CSV que contém
                    informações de vendas de uma loja. O arquivo tem as seguintes colunas: ID do
                    produto, nome do produto, quantidade vendida e preço unitário. O arquivo é
                    salvo com o nome "vendas.csv" e o separador de colunas é a vírgula.
                </p>
                <p class="Texto">
                    Para ler esse arquivo com o CSV File Input, seria necessário configurar o step com
                    as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: "vendas.csv".</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Opções de delimitação: vírgula.</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Opções de codificação: UTF-8 (ou outro conjunto de caracteres, dependendo do arquivo).</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>4.</strong></span> Opções de cabeçalho: o arquivo contém um cabeçalho com o nome das colunas.</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>5.</strong></span> Configurações das colunas: nome do produto (string), quantidade vendida (integer), preço unitário (float).</p></li>
                    
                </ol>
                <p class="Texto">
                    Com essas configurações, o step CSV File Input leria o arquivo "vendas.csv" e
                    criaria uma saída com as colunas “nome do produto”, “quantidade vendida” e
                    “preço unitário”. Esses dados poderiam, então, ser processados e transformados
                    usando outros steps do Pentaho Data Integration.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 150547.png" alt="" class="example-images">
                <p class="Subtopico"><strong>4.3. Microsoft Excel Input</strong></p>
                <p class="Texto">
                     Microsoft Excel Input é um "step de entrada" do Pentaho Data Integration que permite ler dados de planilhas do Microsoft Excel (.xls ou .xlsx). Ele é usado para processar dados em planilhas e transformá-los em dados utilizáveis no Pentaho. 
                </p>
                <p class="Texto">
                    O Microsoft Excel Input é configurado para ler uma ou mais planilhas e definir as colunas que devem ser lidas. Para configurar esse step, são necessárias as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: caminho e nome do arquivo que será lido;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Nome da planilha: nome da planilha que contém os dados a serem lidos;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Intervalo de células: intervalo de células que contém os dados a serem lidos;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>4.</strong></span> Opções de cabeçalho: indica se a planilha contém um cabeçalho com o nome das colunas;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>5.</strong></span> Configurações das colunas: definição do nome, tipo e posição de cada coluna na planilha.</p></li>
                    
                </ol>

                <p class="Texto">
                    Um exemplo de uso do Microsoft Excel Input seria para ler uma planilha do
                    Microsoft Excel que contém informações de vendas de uma loja. A planilha tem
                    as seguintes colunas: ID do produto, nome do produto, quantidade vendida e
                    preço unitário. A planilha é salva com o nome "vendas.xlsx" e a planilha com as
                    informações de vendas tem o nome "Planilha1".
                </p>
                <p class="Texto">
                    Para ler essa planilha com o Microsoft Excel Input, seria necessário configurar o
                    step com as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: "vendas.xlsx";</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Nome da planilha: "Planilha1";</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Intervalo de células: "A1:D100" (por exemplo, se os dados estiverem nas células de A1 a D100);</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>4.</strong></span> Opções de cabeçalho: a planilha contém um cabeçalho com o nome das colunas;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>5.</strong></span> Configurações das colunas: nome do produto (string), quantidade vendida (integer), preço unitário (float).</p></li>
                    
                </ol>
                <p class="Texto">
                    Com essas configurações, o step Microsoft Excel Input leria a planilha "Planilha1"
                    do arquivo "vendas.xlsx" e criaria uma saída com as colunas “nome do produto”,
                    “quantidade vendida” e “preço unitário”. Esses dados poderiam, então” ser
                    processados e transformados usando outros steps do Pentaho Data Integration.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 165223.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-22 165321.png" alt="" class="example-images">

                <p class="Subtopico"><strong>4.4. Table Input</strong></p>
                <p class="Texto">
                    Table Input é um "step de entrada" do Pentaho Data Integration que permite ler
                    dados diretamente de uma tabela em um banco de dados relacional. Ele é usado
                    para processar dados armazenados em bancos de dados e transformá-los em
                    dados utilizáveis no Pentaho.
                </p>
                <p class="Texto">
                    O Table Input é configurado para se conectar a um banco de dados e selecionar
                    dados de uma tabela específica. Para configurar esse step, são necessárias as
                    seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Configurações de conexão: informações de conexão com o banco de dados (como o nome do host), porta, nome do banco de dados, nome de usuário e senha;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> SQL da consulta: consulta SQL que seleciona os dados da tabela desejada;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Opções de cache: opções de cache de dados para melhorar o desempenho do step.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do Table Input seria para ler dados de uma tabela de vendas
                    em um banco de dados MySQL. A tabela tem as seguintes colunas: ID da venda,
                    ID do produto, data da venda e quantidade vendida.
                </p>
                <p class="Texto">Para ler essa tabela com o Table Input, seria necessário configurar o step com as seguintes informações:</p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Configurações de conexão: nome do host, porta, nome do banco de dados, nome de usuário e senha;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> SQL da consulta: "SELECT * FROM vendas" (ou outra consulta SQL que selecione as colunas desejadas);</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Opções de cache: habilitado ou desabilitado, dependendo do desempenho desejado.</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step Table Input executaria a consulta SQL "SELECT *
                    FROM vendas" no banco de dados MySQL especificado e criaria uma saída com
                    as colunas ID da venda, ID do produto, data da venda e quantidade vendida.
                    Esses dados poderiam, então, ser processados e transformados usando outros
                    steps do Pentaho Data Integration.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 165947.png" alt="" class="example-images">
                <p class="Subtopico"><strong>4.5. XML File Input</strong></p>
                <p class="Texto">
                    O "XML File Input" é um passo (step) de entrada no Pentaho Data Integration que
                    permite ler dados de arquivos XML. Ele é usado para processar dados em
                    arquivos XML e transformá-los em dados utilizáveis no Pentaho.
                </p>
                <p class="Texto">
                    O XML File Input é configurado para ler um arquivo XML e definir as tags que
                    devem ser lidas. Para configurar esse step, são necessárias as seguintes
                    informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: caminho e nome do arquivo XML que será lido;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Nome do elemento raiz: nome do elemento raiz que contém os dados a serem lidos;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Caminho de elementos: o caminho do elemento ou elementos que contêm os dados a serem lidos;</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Configurações dos campos: definição do nome, tipo e posição de cada campo no arquivo XML.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do XML File Input seria para ler um arquivo XML que contém
                    informações sobre produtos. O arquivo XML tem os seguintes elementos:
                    produto, nome, descrição, preço e categoria. O arquivo é salvo com o nome
                    "produtos.xml".
                </p>
                <p class="Texto">
                    Para ler este arquivo XML com o XML File Input, seria necessário configurar o step
                    com as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Arquivo de entrada: "produtos.xml";</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>2.</strong></span> Nome do elemento raiz: "produto";</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Caminho de elementos: "/produto" (se o elemento raiz contiver apenas um elemento "produto");</p></li>
                    <li><p class="Texto"> <span class="code-color"><strong>3.</strong></span> Configurações dos campos: nome (string), descrição (string), preço (float) e categoria (string).</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step XML File Input leria o arquivo "produtos.xml" e
                    criaria uma saída com as colunas “nome”, “descrição”, “preço” e “categoria”. Esses
                    dados poderiam, então, ser processados e transformados usando outros steps
                    do Pentaho Data Integration.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-23 142235.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-23 142425.png" alt="" class="example-images">
                <a href="topico05.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>