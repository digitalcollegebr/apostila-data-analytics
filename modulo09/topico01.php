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
                <p class="Titulo">Iniciando com Python</p>
                <p class="Subtopico"><strong>1. Introdução</strong></p>
                <p class="Texto">
                    Python é uma linguagem de programação de alto nível, interpretada e de
                    propósito geral. Foi criada por Guido van Rossum, em 1991, e é atualmente
                    mantida por uma comunidade de desenvolvedores. A Python é conhecida por ser
                    uma linguagem fácil de aprender e de usar, com uma sintaxe simples e legível.
                    Além disso, possui uma vasta biblioteca padrão e muitas outras bibliotecas de
                    terceiros, o que faz dela uma linguagem muito versátil e utilizada em diversas
                    áreas, como ciência de dados, inteligência artificial, desenvolvimento web,
                    automação de tarefas, entre outras. A Python é uma linguagem interpretada, o
                    que significa que o código é executado linha por linha, sem necessidade de
                    compilá-lo antes da execução, facilitando a prototipagem e a depuração de erros.
                </p>
                <p class="Texto">1.1. Por que usar Python?</p>
                <p class="Texto">
                    Existem muitas razões pelas quais alguém pode querer usar Python em seus
                    projetos de programação. Aqui estão algumas das principais razões:
                </p>
                <ul>
                    <li><p class="Texto"><span class="code-color"><strong>Facilidade de aprendizado:</strong></span> Python é considerada uma das linguagens de programação mais fáceis de aprender e usar, graças à sua sintaxe simples e legível. Isso faz com que seja uma ótima escolha para iniciantes em programação;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Versatilidade:</strong></span> Python é uma linguagem de propósito geral, o que significa que pode ser usada para uma grande variedade de projetos, desde desenvolvimento web até ciência de dados e inteligência artificial;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Biblioteca padrão abrangente:</strong></span> a biblioteca padrão da Python é muito completa e possui muitas funcionalidades prontas para uso, o que economiza tempo e esforço na programação de soluções para problemas comuns;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Grande comunidade:</strong></span> Python tem uma das maiores comunidades de desenvolvedores do mundo, com muitos recursos, fóruns e bibliotecas disponíveis;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Suporte multiplataforma:</strong></span> Python pode ser executada em uma variedade de plataformas, incluindo Windows, Mac e Linux, além de ser compatível com muitas outras linguagens e ferramentas;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Linguagem de script:</strong></span> Python é uma linguagem interpretada, o que significa que o código pode ser executado diretamente, sem a necessidade de compilação. Isso facilita a prototipagem e o desenvolvimento rápido de soluções.</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Fácil integração:</strong></span> Python é fácil de integrar com outras linguagens e sistemas, permitindo que ela seja usada em conjunto com outras ferramentas e tecnologias.</p></li>
                </ul>
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>