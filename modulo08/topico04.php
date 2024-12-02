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
                <p class="Titulo">4. Pentaho Data Integration – JOBs</p>
                <p class="Texto">
                    Neste ponto do conteúdo, serão criados 5 fluxos de dados utilizando JOBs no
                    Pentaho Data Integration, bem como será explicada a teoria dos Steps
                    relacionados a cada fluxo. A parte prática será exposta em sala de aula.
                </p>
                <p class="Subtopico"><strong>4.1. Fluxo 1</strong></p>
                <p class="Texto">
                    Neste ponto do conteúdo, serão criados 5 fluxos de dados utilizando JOBs no
                    Pentaho Data Integration, bem como será explicada a teoria dos Steps
                    relacionados a cada fluxo. A parte prática será exposta em sala de aula.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 155321.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-29 155438.png" alt="" class="example-images">
                <p class="Texto">No passo da transformação, basta escolher o caminho e o arquivo KTR.</p>
                <img src="../assets\img\Captura de tela 2024-10-29 155547.png" alt="" class="example-images">
                <p class="Texto">Nessa primeira guia, colocamos o endereço de e-mail do destinatário.</p>
                <img src="../assets\img\Captura de tela 2024-10-29 155707.png" alt="" class="example-images">
                <p class="Texto">
                    Na guia server é feita a configuração do servidor de envio de e-mail. Em SMTP
                    Server, você deve colocar o IP ou DNS do servidor que vai enviar seus e-mails.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 155850.png" alt="" class="example-images">
                <p class="Texto">
                    Na guia Email Message, vamos preencher os campos Subject – é o título do e-mail
                    – e o campo Comment – é a mensagem propriamente dita.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 160125.png" alt="" class="example-images">
                <p class="Texto">
                    Por fim, na última guia fica a opção de colocar anexo no e-mail de acordo com as
                    opções do select file type.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 160309.png" alt="" class="example-images">
                <p class="Texto">
                    Todo JOB obrigatoriamente deve começar com o step Start, pois este dá início à
                    execução do fluxo de dados. No segundo passo, temos uma Transformation – em
                    suas propriedades temos que configurar o caminho da transformação (KTR) que
                    queremos executar. Logo na sequência temos dois possíveis caminhos, um
                    quando ocorrer erro e outro quando não ocorrer erro. Em ambos os casos serão
                    enviados e-mails informando a situação do nosso fluxo de dados. Por fim, se tudo
                    ocorrer bem, temos o passo final, que é o Success.
                </p>
                <p class="Subtopico"><strong>4.2. Fluxo 2</strong></p>
                <p class="Texto">
                    Neste ponto do conteúdo, serão criados 5 fluxos de dados utilizando JOBs no
                    Pentaho Data Integration, bem como será explicada a teoria dos Steps
                    relacionados a cada fluxo. A parte prática será exposta em sala de aula.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 160606.png" alt="" class="example-images">
                <p class="Texto">
                    No JOB da figura, temos o incremento de um step que vai servir para acessar
                    outro JOB. É isso mesmo: um JOB pode chamar outro JOB.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 160759.png" alt="" class="example-images">
                <p class="Texto">
                    Similarmente ao step do fluxo anterior, onde chamarmos uma transformação
                    nesse step, chamaremos outro JOB.
                </p>
                <p class="Subtopico"><strong>4.3. Fluxo 3</strong></p>
                <img src="../assets\img\Captura de tela 2024-10-29 163001.png" alt="" class="example-images">
                <p class="Texto">
                    O terceiro fluxo realiza a verificação se uma determinada pasta está vazia. Caso
                    esteja com conteúdo, o fluxo passará para o passo das operações; caso não, o
                    fluxo enviará um e-mail alertando que a pasta está vazia.
                </p>
                <p class="Texto">
                    No passo das operações, o fluxo irá chamar um KTR como exposto nos fluxos
                    anteriores. Na sequência, ele moverá o conteúdo dessa pasta para outra pasta e,
                    por fim, finalizará o processo enviando um e-mail de sucesso.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 163155.png" alt="" class="example-images">
                <p class="Texto">
                    Nesse step vamos clicar no botão “navegar” e escolher a pasta que queremos
                    verificar. Também temos a opção de incluir as pastas filhas.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 163259.png" alt="" class="example-images">
                <p class="Texto">
                    Na figura 12, configuramos o step que move os arquivos. Nesse passo vamos
                    escolher duas pastas, uma de origem, de onde iremos recortar os arquivos, e
                    outra de destino, onde iremos colar os arquivos. Após essas escolhas, basta clicar
                    no botão add.
                </p>
                <p class="Texto">A instalação e a configuração do Pentaho Server envolvem as seguintes etapas:</p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>Requisitos de sistema:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Baixe o arquivo de instalação:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Descompacte o arquivo:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Inicie o Pentaho Server:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Acesse o Pentaho User Console:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações do servidor:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações do usuário:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações de fonte de dados:</strong></span> Conteúdo</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações de segurança:</strong></span> Conteúdo</p></li>
                </ol>
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>