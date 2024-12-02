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
                <p class="Titulo">2. Instalação e configuração do ambiente</p>
                <img src="../assets\img\Captura de tela 2024-11-12 164636.png" alt="" class="example-images">
                <p class="Texto">
                    O Anaconda Python é uma distribuição de software gratuita e de código aberto
                    que inclui Python e outras ferramentas de análise de dados e ciência de dados.
                    Ele foi projetado para facilitar a instalação e o gerenciamento de pacotes e
                    bibliotecas usados em projetos de análise de dados, tornando mais fácil para os
                    desenvolvedores criar e executar aplicativos de análise de dados complexos.
                    O Anaconda Python vem com uma série de bibliotecas e ferramentas populares
                    para análise de dados, como o NumPy, Pandas, Matplotlib, SciPy, Jupyter, entre
                    outras. Além disso, ele oferece um gerenciador de pacotes fácil de usar, chamado
                    Conda, que permite instalar e gerenciar bibliotecas e pacotes adicionais.
                    O Anaconda Python é usado por muitos profissionais de ciência de dados,
                    pesquisadores acadêmicos e desenvolvedores de software em todo o mundo,
                    devido à sua facilidade de uso e grande número de bibliotecas pré-instaladas. Ele
                    pode ser executado em uma variedade de plataformas, incluindo Windows, Mac e
                    Linux, e é frequentemente usado em conjunto com ambientes de
                    desenvolvimento integrado (IDEs) como o Jupyter Notebook para criar aplicativos
                    de análise de dados interativos e exploratórios.
                </p>
                <p class="Texto">2.1. Instalando o Anaconda Python</p>
                <p class="Texto">Para instalar o Anaconda Python, siga as seguintes etapas:</p>
                <ul>
                    <li><p class="Texto">Baixe o instalador apropriado do Anaconda Python para o seu sistema operacional (Windows, Mac ou Linux) a partir do site oficial da Anaconda: https://www.anaconda.com/products/individual</p></li>
                    <li><p class="Texto">Execute o instalador e siga as instruções na tela. Certifique-se de selecionar a opção "Adicionar Anaconda ao PATH do sistema" para que você possa acessar o Anaconda a partir do prompt de comando ou terminal;</p></li>
                    <li><p class="Texto">Quando a instalação estiver concluída, abra o terminal ou prompt de comando e digite "conda" para verificar se o Conda (gerenciador de pacotes do Anaconda) foi instalado corretamente;</p></li>
                    <li><p class="Texto">Agora você pode começar a criar ambientes virtuais e instalar pacotes do Python usando o Conda. Para criar um novo ambiente virtual, basta digitar "conda create --name NOME_DO_AMBIENTE python=X.X" (substitua "NOME_DO_AMBIENTE" pelo nome do ambiente que você deseja criar e "X.X" pela versão do Python que você deseja usar);</p></li>
                    <li><p class="Texto">Para ativar um ambiente virtual, digite "conda activate NOME_DO_AMBIENTE". Para desativar o ambiente, digite "conda deactivate".</p></li>
                </ul>
                <p class="Texto">Pronto! Agora você pode começar a usar o Anaconda Python para desenvolver seus projetos em Python e análise de dados.</p>
                <p class="Subtopico"><strong>2.2. Configurando o ambiente de desenvolvimento</strong></p>
                <p class="Texto"><strong>Para configurar o ambiente de desenvolvimento Python com o VS Code, siga as seguintes etapas:</strong></p>
                <ul>
                    <li><p class="Texto">Certifique-se de ter o Python e o VS Code instalados em seu sistema;</p></li>
                    <li><p class="Texto">Abra o VS Code e instale a extensão "Python" da Microsoft. Para fazer isso, pressione Ctrl + Shift + X para abrir a barra de extensões, pesquise "Python" e selecione a extensão "Python" da Microsoft. Clique em "Instalar" para instalar a extensão;</p></li>
                    <li><p class="Texto">Crie um ambiente virtual para seu projeto. Isso é recomendado para manter as dependências do seu projeto separadas do Python global. Para fazer isso, abra o terminal do VS Code (Menu Terminal -> Novo Terminal) e digite "python -m venv NOME_DO_AMBIENTE". Substitua "NOME_DO_AMBIENTE" pelo nome que você deseja dar ao seu ambiente;</p></li>
                    <li><p class="Texto">Ative o ambiente virtual digitando "NOME_DO_AMBIENTE\Scripts\activate" no terminal do VS Code (substitua "NOME_DO_AMBIENTE" pelo nome do ambiente que você acabou de criar);</p></li>
                    <li><p class="Texto">Crie um novo projeto no VS Code e abra a pasta raiz do projeto;</p></li>
                    <li><p class="Texto">Pressione Ctrl + Shift + P para abrir a barra de comando e pesquise por "Python: Select Interpreter". Selecione o ambiente virtual que você criou na etapa 3;</p></li>
                    <li><p class="Texto">Agora você pode começar a escrever código Python em seu projeto. Você também pode usar as funcionalidades da extensão Python para depuração, testes e outras tarefas;</p></li>
                    <li><p class="Texto">Lembre-se de sempre ativar seu ambiente virtual antes de iniciar o VS Code e trabalhar em seu projeto. Isso garantirá que todas as dependências do seu projeto estejam instaladas corretamente e que o VS Code esteja usando a versão correta do Python.</p></li>
                </ul>
                <p class="Subtopico"><strong>2.3. Escrevendo o primeiro programa em Python</strong></p>
                <p class="Texto"><strong>Para escrever o primeiro programa em Python, siga as seguintes etapas:</strong></p>
                <ul>
                    <li><p class="Texto">Abra o VS Code e crie uma nova pasta para seu projeto;</p></li>
                    <li><p class="Texto">Crie um novo arquivo e salve-o com o nome "primeiro_programa.py". Certifique-se de que a extensão do arquivo seja ".py" para que o VS Code reconheça que é um arquivo Python;</p></li>
                    <li><p class="Texto">Digite o seguinte código no arquivo: </p></li>
                    <img src="../assets\img\Captura de tela 2024-11-12 170146.png" alt="">
                    <li><p class="Texto">Salve o arquivo e pressione F5 para executar o programa;</p></li>
                    <li><p class="Texto">O resultado do programa deve aparecer na saída do terminal do VS Code, que deve exibir a mensagem "Olá, mundo!".</p></li>
                </ul>
                <p class="Texto">
                    Parabéns, você escreveu e executou seu primeiro programa em Python! A partir
                    daqui, você pode começar a aprender os conceitos básicos da linguagem Python
                    e a explorar as muitas possibilidades que ela oferece.
                </p>
            
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>