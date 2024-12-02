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
                <p class="Titulo">PIPELINE DE DADOS</p>
                <p class="Subtopico">1. Introdução</p>
                <p class="Texto">
                    Um pipeline de dados é uma série de processos que são executados em
                    conjunto para mover, processar e transformar dados de uma fonte para um
                    destino específico. Ele é comumente utilizado em ambientes de big data, onde há
                    uma grande quantidade de dados que precisam ser processados e analisados.
                </p>
                <p class="Texto">
                    O pipeline de dados começa com a coleta de dados brutos de várias fontes, como
                    bancos de dados, arquivos, dispositivos IoT, sensores etc. Em seguida, os dados
                    passam por um processo de limpeza e pré-processamento, que inclui remoção
                    de dados duplicados, correção de erros, preenchimento de valores ausentes e
                    padronização de formatos.
                </p>
                <p class="Texto">
                    O próximo passo é a transformação dos dados, que envolve aplicação de regras
                    de negócios e técnicas de análise para extrair insights significativos dos dados. A
                    transformação também pode incluir agregação e junção de dados de várias
                    fontes.
                </p>
                <p class="Texto">
                    Em seguida, os dados são armazenados em um formato acessível para análise
                    futura, que pode incluir bancos de dados, data warehouses ou data lakes.
                    Finalmente, os dados são disponibilizados para uso, o que pode incluir a criação
                    de visualizações, relatórios ou dashboards para visualização de informações. A
                    pipeline de dados é geralmente automatizada para garantir a consistência e a
                    eficiência do processo.
                </p>
                <p class="Texto">
                    Em resumo, o pipeline de dados é uma abordagem sistemática para gerenciar
                    dados, desde a coleta até a análise e visualização. Ele é essencial para a tomada
                    de decisões baseada em dados e é usada em uma variedade de setores,
                    incluindo finanças, saúde, varejo e tecnologia.
                </p>
                <p class="Texto">
                    Nesse material iremos utilizar a ferramenta Pentaho Data Integration para
                    demonstrar a criação de pipeline de dados.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 140055.png" alt="" class="example-images">
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>