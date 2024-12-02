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
                <p class="Titulo">6. Módulos, Pacotes e Funções</p>
                <p class="Texto">
                    Em Python, funções são blocos de código que podem ser chamados
                    repetidamente em diferentes partes de um programa. As funções permitem que
                    o código seja reutilizado e organizado de uma maneira mais clara e modular. Aqui
                    estão algumas definições e exemplos práticos sobre funções em Python:
                </p>
                <p class="Texto">
                    Criação de uma função:
                    Para criar uma função, utilizamos a palavra-chave "def", seguida pelo nome da
                    função, parênteses ( ) e dois-pontos :. O bloco de código da função é definido
                    com indentação.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de criação de uma função em Python</span>

def soma(a, b):
    resultado = a + b
    <span class="blue-code">return</span> resultado
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Chamada de uma função:</strong><br>
                    Para chamar uma função, utilizamos o nome da função, seguido por parênteses (
                    ) e os argumentos da função, se houver.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de chamada de uma função em Python</span>

x = <span class="code-color">3</span>
x = <span class="code-color">4</span>
resultado = soma(x, y)
print(resultado) <span class="comment"># retorna 7</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Argumentos de uma função:</strong><br>
                    As funções podem ter argumentos, que são valores passados para a função
                    quando ela é chamada. Os argumentos podem ser obrigatórios ou opcionais e
                    podem ter um valor padrão.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de função com argumentos obrigatórios e opcionais em Python</span>

<span class="blue-code">def</span> <span class="red-color">saudacao</span>(nome, sobrenome, formalidade=<span class="blue-code">False</span>):
    <span class="blue-code">if</span> formalidade:
        <span class="blue-code">return</span> <span class="green-code">f"Olá, Sr. {nome} {sobrenome}"</span>
    <span class="blue-code">else</span>:
        <span class="blue-code">return</span><span class="green-code">f"Oi, {nome}"</span>

<span class="orange-code">print</span>(saudacao(<span class="green-code">"João"</span>, <span class="green-code">"Souza"</span>), formalidade=<span class="blue-code">True</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Retorno de uma função:</strong><br>
                    As funções podem retornar valores com a palavra-chave "return". Se uma função
                    não tiver um comando "return", ela retornará "None" por padrão.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="blue-code">def</span> <span class="red-color">verifica_par</span>(numero):
    <span class="blue-code">if</span> numero % <span class="code-color">2</span> == <span class="code-color">0</span>:
        <span class="blue-code">return True</span>
    <span class="blue-code">else:</span>
        <span class="blue-code">return False</span>

<span class="orange-code">print</span>(verifica_par(<span class="code-color">4</span>)) <span class="comment"># retorna True</span>
<span class="orange-code">print</span>(verifica_par(<span class="code-color">5</span>)) <span class="comment"># retorna False</span>
                    </code></pre>
                </div>
                <p class="Texto">
                <strong>Escopo de uma função:</strong><br>
                As variáveis definidas dentro de uma função só existem dentro dessa função, a
                menos que sejam definidas como globais.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de escopo de variáveis em uma função em Python</span>
<span class="blue-code">def</span> funcao():
        x = <span class="code-color">5</span>
        print(x)

funcao() <span class="comment"># retorna 5</span>
print(x) <span class="comment"># gera um erro, já que x não existe fora da função</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    As funções são uma parte importante da programação em Python, permitindo
                    que o código seja reutilizado e organizado de forma modular. Elas podem ter
                    argumentos e retornar valores, e podem ser usadas para executar tarefas
                    complexas com eficiência e clareza.
                </p>
                <p class="Subtopico"><strong>6.1. Módulos e Pacotes</strong></p>
                <p class="Texto">
                    Em Python, um módulo é um arquivo contendo definições e instruções que
                    podem ser usadas em outros arquivos. Módulos permitem reutilizar código
                    existente e aumentar a modularidade do programa. Aqui estão algumas
                    definições e exemplos práticos sobre módulos em Python:
                </p>
                <p class="Texto">
                    <strong>Importação de um módulo:</strong>
                    Para usar um módulo em um programa Python, é necessário importá-lo usando a
                    palavra-chave "import", seguida do nome do módulo. Por exemplo, para importar
                    o módulo "math":
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de importação </span>
                    </code></pre>
                </div>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.php') ?>
</body>