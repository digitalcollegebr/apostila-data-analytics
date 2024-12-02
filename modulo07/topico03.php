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
            <a href="topico02.php" class="button-left">
                    <img src="../assets/img/arrow-left.png" alt="" class="left">
            </a>     
            <p class="Titulo">3. O ambiente do Pentaho Data Integration</p>
                <p class="Texto">
                    O <span class="code-color"><strong>Pentaho</strong></span> tem uma interface bastante familiar para quem trabalha com
                    ferramentas de desenvolvimento ou com outras ferramentas de <span class="code-color">ETL</span> como o <span class="code-color">SQL</span>
                    Server Integration Services ou o Talend. Depois que o programa é iniciado e a tela
                    de abertura se fecha, a interface do Pentaho Data Integration se abre. Observe na
                    aba “Welcome” diversos links para documentação, vídeos e recursos de
                    aprendizado a distância. Aqui serão detalhadas as principais abas e opções do
                    Pentaho Data Integration, também conhecido como PDI.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 140017.png" alt="" class="example-images" >
                <p class="Texto">
                    O <span class="code-color"><strong>Pentaho Data Integration</strong></span> pode criar dois tipos de arquivos com as seguintes
                    terminações: “. ktr” e “. kjb”, respectivamente as “transformations” e os “Jobs”. Os
                    arquivos “ktr”, são responsáveis pelos processos de ETL propriamente ditos, e os
                    “Jobs” são usados para eventualmente coordenar a execução das
                    transformações. À esquerda da interface do Pentaho, você pode ver o painel
                    “Explorer”, que permite visualizar os arquivos de transformação e de execução
                    criados por você.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 140348.png" alt=""  style="display: flex; margin: 0 auto; padding: 2%;">
                <p class="Texto">
                    Observe que quando uma nova transformação é criada, a aba “Design” fica
                    imediatamente habilitada. Essa aba apresenta todos os componentes disponíveis
                    no <span class="code-color"><strong>Pentaho Data Integration</strong></span>, que podem ser empregados para importar,
                    converter e exportar dados entre diversas fontes e origens. Você ainda pode
                    adicionar componentes no Canvas, arrastando e soltando a opção desejada da
                    aba “design”.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-22 140658.png" alt="" style="display: flex; margin: 0 auto; padding: 2%;">
                <p class="Texto">
                    Quando um JOB (.kjb) é criado, sua aba de Design se modifica, habilitando dessa
                    maneira as opções que são possíveis de se realizar num kjb.
                </p>
                <a href="topico04.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>