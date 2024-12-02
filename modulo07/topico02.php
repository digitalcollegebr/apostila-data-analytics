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
                <a href="topico01.php" class="button-left">
                    <img src="../assets/img/arrow-left.png" alt="" class="left">
                </a>          
                <p class="Titulo">2. Instalando o Pentaho Data Integration Pré-requisitos:</p>
                <p class="Subsubtopico"><span class="code-color"><strong>Java</strong></span></p>
                <p class="Texto">
                    É necessário ter instalado o <span class="code-color"><strong>JDK/JRE</strong></span> do Java, podendo ser a implementação aberta
                    (OpenJDK) ou fechada da Oracle, disponível em:
                    <a href="https://www.oracle.com/java/technologies/javase-jdk8-downloads.html">
                        > > https://www.oracle.com/java/technologies/javase-jdk8-downloads.html
                    </a>

                </p>
                <p class="Texto">
                    Baixe o arquivo apropriado, de acordo com o seu computador, versão de 32 bits ou 64 bits.
                </p>
                <p class="Subsubtopico"><span class="code-color"><strong>
                    Pentaho Data Integration (PDI), versão Community Edition:
                </strong></span></p>   
                <p class="Texto">Faça o download do PDI no link abaixo. Atualmente a última versão é a 9.3: <br>
                    <a href="https://sourceforge.net/projects/pentaho/files/">> > https://sourceforge.net/projects/pentaho/files/</a>
                </p>
                <p class="Subsubtopico"><span class="code-color"><strong>
                    Instalação do Java
                </strong></span></p>
                <p class="Texto">
                    Faça a instalação normal do Java e, posteriormente, crie a variável de ambiente
                    <span class="code-color"><strong>JAVA_HOME</strong></span> com o valor do caminho de instalação do Java <span class="code-color"><strong>JDK</strong></span>.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-21 125530.png" alt="" class="example-images">
                <p class="Texto">Edite a variável <span class="code-color">“path”</span> e coloque o caminho da pasta <span class="code-color">“bin”</span> do Java JDK.</p>
                <img src="../assets\img\Captura de tela 2024-10-22 132948.png" alt="" class="example-images">
                <p class="Subsubtopico"><strong><span class="code-color">Instalação do PDI</span></strong></p>
                <p class="Texto">
                    Escolha um local no PC para armazenar o arquivo do PDI. Aqui, o local escolhido
                    foi dentro de <span class="code-color">“C:\pentaho”</span> , dentro de <span class="code-color">“C:”</span>. Foi criada a pasta Pentaho e o arquivo
                    de download foi descompactado. Crie também a pasta <span class="code-color">“KETTLE_HOME”</span>. Nesta
                    pasta serão salvos os arquivos de inicialização da ferramenta. Em seguida, crie a
                    variável <span class="code-color">“KETTLE_HOME”</span> e coloque como valor o caminho da pasta
                    <span class="code-color">KETTLE_HOME</span>:
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 134357.png" alt="" class="example-images">
                <p class="Texto">
                    Feito isso, basta iniciar o arquivo Spoon.bat localizado dentro da pasta do PDI,
                    assim a ferramenta será inicializada.
                </p>
                <a href="topico03.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>