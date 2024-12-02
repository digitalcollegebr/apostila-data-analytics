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
                <a href="topico04.php" class="button-left">
                        <img src="../assets/img/arrow-left.png" alt="" class="left">
                </a>
                <p class="Titulo">5. Steps de Saída</p>
                <p class="Texto">
                    Os "steps de saída" no <span class="code-color"><strong>Pentaho Data Integration</strong></span> são aqueles que permitem a
                    gravação dos dados processados em uma fonte externa. Eles são usados para
                    enviar dados de um processo de transformação do Pentaho para um destino
                    externo, como um arquivo, um banco de dados ou uma API.
                </p>
                <p class="Texto">Os steps de saída no <span class="code-color"><strong>Pentaho Data Integration</strong></span> incluem:</p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Text File Output: grava dados em um arquivo de texto;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> CSV File Output: grava dados em um arquivo CSV;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Microsoft Excel Writer: grava dados em um arquivo do Microsoft Excel;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Table Output: grava dados em uma tabela de banco de dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Insert / Update: grava dados em uma tabela de banco de dados, atualizando registros existentes e inserindo novos registros;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>6.</strong></span> REST Client: envia dados para uma API REST;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>7.</strong></span> HTTP Post: envia dados para um servidor HTTP.</p></li>
                </ol>
                <p class="Texto">
                    Cada step de saída tem suas próprias configurações específicas, dependendo da
                    fonte de dados para onde os dados serão escritos. Por exemplo, o step de saída
                    Text File Output tem configurações que permitem especificar o nome do arquivo,
                    o tipo de separador de campo e outras opções de formatação de arquivo. Já o
                    step de saída Table Output tem configurações que permitem especificar o nome
                    da tabela de banco de dados, o tipo de banco de dados, a configuração de
                    conexão e outras opções específicas do banco de dados.
                </p>
                <p class="Texto">
                    Em resumo, os steps de saída no <span class="code-color"><strong>Pentaho Data Integration</strong></span> são usados para
                    gravar dados processados em uma fonte externa, permitindo que os dados sejam
                    acessados e utilizados posteriormente.
                </p>
                <p class="Subtopico"><strong>5.1. Table Output</strong></p>
                <p class="Texto">
                    O Table Output é configurado para gravar dados em uma tabela de banco de
                    dados específica. Para configurar este step, são necessárias as seguintes
                    informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Nome da tabela: nome da tabela de banco de dados em que os dados serão gravados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Configuração de conexão: informações de conexão para acessar o banco de dados (nome do banco de dados, nome do usuário, senha etc.);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Tipo de operação: tipo de operação que será executada na tabela (inserir, atualizar ou excluir dados);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Configurações dos campos: definição do nome e tipo de cada campo na tabela de banco de dados.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do Table Output seria para gravar dados em uma tabela
                    chamada "clientes" em um banco de dados MySQL. A tabela tem os seguintes
                    campos: ID, nome, endereço, cidade e telefone.
                </p>
                <p class="Texto">
                    Para gravar dados nesta tabela usando o Table Output, seria necessário
                    configurar o step com as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Nome da tabela: "clientes";</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Configuração de conexão: nome do banco de dados, nome de usuário, senha e outros parâmetros de conexão;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Tipo de operação: "Inserir" ou "Atualizar" (dependendo do objetivo);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Configurações dos campos: ID (int), nome (string), endereço (string), cidade (string) e telefone (string).</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step Table Output gravaria os dados processados e
                    transformados no <span class="code-color"><strong>Pentaho Data Integration</strong></span> na tabela "clientes" do banco de dados MySQL,
                    inserindo ou atualizando os registros conforme configurado.
                </p>
                <p class="Texto">
                    O Table Output é um passo muito útil para automatizar a gravação de dados em
                    um banco de dados, eliminando a necessidade de inserir ou atualizar dados
                    manualmente. Ele também permite que os dados sejam mantidos de forma
                    consistente em um banco de dados centralizado, tornando-os mais fáceis de
                    acessar e utilizar posteriormente.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-23 144858.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-23 144935.png" alt="" class="example-images">
                
                <p class="Subtopico"><strong>5.2. Text File Output</strong></p>
                <p class="Texto">
                    O "Text File Output" é um passo de saída no <span class="code-color"><strong>Pentaho Data Integration</strong></span> que
                    permite gravar dados em um arquivo de texto. Ele é usado para salvar dados
                    processados e transformados em um formato de arquivo de texto.
                </p>
                <p class="Texto">
                    O Text File Output é configurado para gravar dados em um arquivo de texto
                    específico. Para configurar esse step, são necessárias as seguintes informações:
                </p>
                <ol>
                        <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Nome do arquivo: nome do arquivo que será criado ou atualizado;</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tipo de arquivo: tipo de arquivo que será gerado (CSV, texto simples etc.);</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Codificação: codificação de caracteres que será usada para o arquivo;.</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Separador de campo: separador que será usado para separar os campos no arquivo;</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Configurações dos campos: definição do nome e tipo de cada campo no arquivo.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do Text File Output seria para gravar dados de um processo
                    de transformação em um arquivo CSV. Para fazer isso, seria necessário configurar
                    o step com as seguintes informações:
                </p>
                <ol>
                        <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Nome do arquivo: nome do arquivo CSV que será criado ou atualizado;</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tipo de arquivo: CSV;</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Codificação: UTF-8;</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Separador de campo: ponto e vírgula (;);</p></li>
                        <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Configurações dos campos: definição do nome e tipo de cada campo no arquivo.</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step Text File Output criaria um arquivo CSV com os
                    dados processados e transformados no <span class="code-color"><strong>Pentaho</strong></span>, separados por ponto e vírgula
                    (;) e com a codificação UTF-8.
                </p>
                <p class="Texto">
                    O Text File Output é útil para gerar arquivos de texto com dados processados e
                    transformados, que podem ser usados posteriormente em outras aplicações. Por
                    exemplo, pode ser usado para gerar relatórios em formato de arquivo de texto,
                    que podem ser facilmente importados em outras ferramentas de análise ou de
                    apresentação.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-23 155140.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-23 155410.png" alt="" class="example-images">
                <p class="Subtopico"><strong>5.3. CSV File Input</strong></p>
                <p class="Texto">
                    O "<span class="code-color"><strong>CSV File Input</strong></span>" é um passo de entrada no <span class="code-color"><strong>Pentaho Data Integration</strong></span> que
                    permite ler dados de um arquivo CSV (Comma Separated Values). Ele é usado
                    para importar dados de um arquivo CSV e transformá-los para uso em processos
                    de ETL (Extração, Transformação e Carga).
                </p>
                <p class="Texto">
                    O <span class="code-color"><strong>CSV File Input</strong></span> é configurado para ler um arquivo CSV específico e transformar
                    os dados em um formato estruturado para serem usados em outros passos do
                    processo de transformação. Para configurar esse step, são necessárias as
                    seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>1.</strong></span> Nome do arquivo: nome do arquivo CSV que será lido;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Delimitador: caractere que separa os valores no arquivo CSV (normalmente é a vírgula, mas pode ser outro);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Codificação: codificação de caracteres que será usada para ler o arquivo;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Separador de campo: ponto e vírgula (;);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>5.</strong></span> Primeira linha como cabeçalho: indica se a primeira linha do arquivo contém os nomes dos campos.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do CSV File Input seria para ler dados de um arquivo CSV
                    chamado "clientes.csv" com os seguintes campos: ID, Nome, Endereço e Cidade.
                    Para fazer isso, seria necessário configurar o step com as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>1.</strong></span> Nome do arquivo: "clientes.csv";</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Delimitador: vírgula (,);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Codificação: UTF-8;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Primeira linha como cabeçalho: sim.</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step CSV File Input lerá o arquivo "clientes.csv" e
                    transformará os dados em um formato estruturado que pode ser usado em
                    outros passos do processo de transformação. Os dados lidos serão organizados
                    em linhas e colunas, em que cada linha representará um registro e cada coluna
                    representará um campo.
                </p>
                <p class="Texto">
                    O CSV File Input é um passo muito útil para importar dados de arquivos CSV e
                    transformá-los para uso em processos de ETL. Ele permite que os dados sejam
                    lidos de forma estruturada e organizada, tornando-os mais fáceis de manipular e
                    transformar em outras ferramentas do Pentaho.
                </p>
                <p class="Subtopico"><strong>5.4. Insert/Update</strong></p>
                <p class="Texto">
                    O "<span class="code-color"><strong>Insert/Update</strong></span>" é um passo de saída no <span class="code-color"><strong>Pentaho Data Integration</strong></span> que permite
                    inserir ou atualizar registros em uma tabela de banco de dados. Ele é usado para
                    realizar operações de carga em um banco de dados, permitindo que dados sejam
                    adicionados ou atualizados a partir de uma fonte externa.
                </p>
                <p class="Texto">
                    O <span class="code-color"><strong>Insert/Update</strong></span> é configurado para inserir ou atualizar registros em uma tabela
                    de banco de dados específica. Para configurar esse step, são necessárias as
                    seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Conexão com o banco de dados: conexão com o banco de dados onde os dados serão inseridos ou atualizados.</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tabela de destino: nome da tabela onde os dados serão inseridos ou atualizados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Campos de correspondência: definição dos campos que serão usados para verificar se um registro já existe na tabela (chave primária ou outros campos);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Campos de entrada: definição dos campos que serão inseridos ou atualizados na tabela.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do <span class="code-color"><strong>Insert/Update</strong></span> seria para atualizar registros em uma
                    tabela de clientes. Suponha que a tabela "clientes" tenha os seguintes campos:
                    id_cliente, nome, telefone e endereço. Para atualizar os registros de telefone e
                    endereço para alguns clientes específicos, seria necessário configurar o step com
                    as seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"> <span class="code-color"><strong>1.</strong></span> Conexão com o banco de dados: conexão com o banco de dados onde a tabela "clientes" está localizada;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tabela de destino: "clientes";</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Campos de correspondência: id_cliente;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Campos de entrada: telefone e endereço.</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step <span class="code-color"><strong>Insert/Update</strong></span> verificará se os registros já
                    existem na tabela "clientes" com base na chave primária id_cliente e atualizará os
                    campos de telefone e endereço para os registros correspondentes.
                    O Insert/Update é um passo muito útil para realizar operações de carga em um
                    banco de dados a partir de fontes externas. Ele permite que dados sejam
                    adicionados ou atualizados de forma fácil e eficiente, garantindo que os registros
                    sejam mantidos atualizados e precisos.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 132609.png" alt="" class="example-images">
                <p class="Subtopico"><strong>5.5. Update</strong></p>
                <p class="Texto">
                    O "<span class="code-color"><strong>Update</strong></span>" é um passo de saída no Pentaho Data Integration que permite
                    atualizar registros em uma tabela de banco de dados. Ele é usado para realizar
                    operações de atualização em um banco de dados, permitindo que dados sejam
                    atualizados a partir de uma fonte externa.
                </p>
                <p class="Texto">
                    O <span class="code-color"><strong>Update</strong></span> é configurado para atualizar registros em uma tabela de banco de
                    dados específica. Para configurar esse step, são necessárias as seguintes
                    informações:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>1.</strong></span> Conexão com o banco de dados: conexão com o banco de dados onde os dados serão atualizados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tabela de destino: nome da tabela onde os dados serão atualizados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Campos de correspondência: definição dos campos que serão usados para verificar se um registro já existe na tabela (chave primária ou outros campos);</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Campos de entrada: definição dos campos que serão atualizados na tabela.</p></li>
                </ol>
                <p class="Texto">
                    Um exemplo de uso do <span class="code-color"><strong>Update</strong></span> seria para atualizar registros em uma tabela de
                    clientes. Suponha que a tabela "clientes" tenha os seguintes campos: id_cliente,
                    nome, telefone e endereço. Para atualizar os registros de telefone e endereço
                    para alguns clientes específicos, seria necessário configurar o step com as
                    seguintes informações:
                </p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>1.</strong></span> Conexão com o banco de dados: conexão com o banco de dados onde a tabela "clientes" está localizada;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.</strong></span> Tabela de destino: "clientes";</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.</strong></span> Campos de correspondência: id_cliente;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.</strong></span> Campos de entrada: telefone e endereço.</p></li>
                </ol>
                <p class="Texto">
                    Com essas configurações, o step <span class="code-color"><strong>Update</strong></span> verificará se os registros já existem na
                    tabela "clientes" com base na chave primária id_cliente e atualizará os campos de
                    telefone e endereço para os registros correspondentes.
                </p>
                <p class="Texto">
                    O <span class="code-color"><strong>Update</strong></span> é um passo muito útil para realizar operações de atualização em um
                    banco de dados a partir de fontes externas. Ele permite que dados sejam
                    atualizados de forma fácil e eficiente, garantindo que os registros sejam mantidos
                    atualizados e precisos.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 133042.png" alt="" class="example-images">
                <a href="topico06.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div> 
        </div>
    </div>

<?php include('../layouts/footer.php') ?>