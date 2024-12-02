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
                <p class="Titulo">4. Estrutura de Controle de Fluxo</p>
                <p class="Texto">
                    As estruturas de controle de fluxo em Python permitem que você controle o fluxo
                    de execução do programa com base em certas condições. As estruturas de
                    controle de fluxo mais comuns em Python são as instruções if, else e elif, bem
                    como os loops while e for.
                </p>
                <p class="Subtopico">4.1. Condições if, else e elif</p>
                <p class="Texto">
                    As condições if, else e elif são instruções em Python que permitem que você
                    execute diferentes blocos de código com base em uma determinada condição.
                    Aqui estão algumas definições e exemplos práticos para cada uma dessas
                    instruções:
                </p>
                <p class="Texto">
                    <strong>If</strong>: a instrução “if” é usada para executar um bloco de código se uma determinada
                    condição for verdadeira. Por exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de instrução if em Python</span>
x = 5 

<span class="blue-code">if</span> x > 0:
    <span class="orange-code">print</span>(<span class="green-code">"X é positivo"</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, o programa imprime "x é positivo" porque a condição x > 0 é
                    verdadeira.
                </p>
                <p class="Texto">
                    <strong>Else</strong>: a instrução “else” é usada para executar um bloco de código se a condição
                    do if for falsa. Por exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de instrução if-else em Python</span>
x = -2
<span class="blue-code">if</span> x > 0:
    <span class="orange-code">print</span>(<span class="green-code">"x é positivo"</span>)
else:
    <span class="orange-code">print</span>(<span class="green-code">"x é negativo ou igual a zero"</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, o programa imprime "x é negativo ou igual a zero" porque a
                    condição x > 0 é falsa.
                </p>
                <p class="Texto">
                    Elif: a instrução “elif” é usada para testar várias condições. Por exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
x = 0

<span class="blue-code">if</span> x > 0:
    <span class="orange-code">print</span>(<span class="green-code">"x é positivo"</span>)
<span class="blue-code">elif</span> x < 0:
    <span class="orange-code">print</span>(<span class="green-code">"x é negativo"</span>)
<span class="blue-code">else</span>:
    <span class="orange-code">print</span>(<span class="green-code">"x é igual a zero"</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, o programa imprime "x é igual a zero" porque a condição x > 0 é
                    falsa, a condição x < 0 também é falsa, e a condição final do else é executada.
                </p>
                <p class="Texto">
                    Você também pode usar operadores lógicos, como and, or e not, para combinar
                    ou negar condições. Por exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
x = 5
y = 10

<span class="blue-code">if</span> x > 0 and y > 0:
    <span class="orange-code">print</span>(<span class="green-code">"x e y são positivos"</span>)
<span class="blue-code">elif</span> x < 0 or y < 0:
    <span class="orange-code">print</span>(<span class="green-code">"pelo menos x ou y é negativo"</span>)
<span class="blue-code">else</span>:
    <span class="orange-code">print</span>(<span class="green-code">"x e y são iguais a zero"</span>)
    
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, o programa imprime "x e y são positivos" porque a condição x > 0
                    and y > 0 é verdadeira. Se a condição do if fosse falsa, o programa testaria a
                    condição do elif e, se fosse verdadeira, imprimiria "pelo menos x ou y é negativo".
                    Caso contrário, o programa executaria o bloco de código do else.
                </p>
                <p class="Subtopico">4.2. Loops (While e For)</p>
                <p class="Texto">
                    Os loops while e for são estruturas de controle de fluxo em Python que permitem
                    executar um bloco de código várias vezes, com base em uma determinada
                    condição ou intervalo de valores. Aqui estão algumas definições e exemplos
                    práticos para cada um desses loops:
                </p>
                <ul>
                    <li><p class="Texto"><span class="code-color"><strong>while:</strong> o loop while é usado para executar um bloco de código enquanto uma determinada condição for verdadeira. Por exemplo:</p></li>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="comment"># Exemplo de loop em Python</span>
i = <span class="red-color">1</span>

while i <= <span class="red-color">5</span>:
    <span class="orange-code">print</span>(i)
    i + <span class="red-color">1</span>
                        </code></pre>
                    </div>
                    <p class="Texto">
                        Neste exemplo, o loop while imprime os números de 1 a 5, porque a condição i <=
                        5 é verdadeira até que i seja igual a 6, quando a condição se torna falsa e o loop
                        termina.
                    </p>
                    <li><p class="Texto"><span class="code-color"><strong>for:</strong> o loop for é usado para iterar sobre uma sequência de valores, como uma lista, uma tupla ou uma string. Por exemplo:</p></li>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="comment"># Exemplo de loop em Python</span>

frutas  = <span class="code-color">[</span><span class="green-code">"maçã"</span><span class="code-color">,</span><span class="green-code"> "banana"</span><span class="code-color">, </span><span class="green-code">"laranja"</span><span class="code-color">]</span>
for frutas in frutas:
    <span class="orange-code">print</span>(fruta)
                        </code></pre>
                    </div>
                   <p class="Texto">Neste exemplo, o loop for imprime cada elemento da lista “frutas”, um por vez.</p>
                </ul>
                <p class="Texto">
                    Você também pode usar a função range para criar uma sequência de números
                    inteiros para iterar com o loop for. Por exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de loop for com a função range em Python</span>
<span class="blue-code">for</span> i <span class="blue-code">in</span> range(1, 6):
    print(i)

                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, o loop for imprime os números de 1 a 5, porque a função
                    range(1, 6) gera uma sequência de números inteiros de 1 a 5.
                </p>
                <p class="Texto">
                    Você também pode usar o comando break dentro de um loop para interromper a
                    execução do loop prematuramente, se uma determinada condição for atendida.
                    Por exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de uso do comando break em um loop em Python</span>
<span class="code-color">i</span> = <span class="code-color">1</span>

<span class="blue-code">while</span> i <= <span class="code-color">5</span>:
    <span class="blue-code">if</span> i ==<span class="code-color">3</span>:
        <span class="blue-code">break</span>
    <span class="orange-code">print</span>(i)
    i += 1
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, o loop while imprime os números de 1 a 2 e, em seguida,
                    interrompe a execução quando i é igual a 3, porque a condição i == 3 é atendida.
                </p>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.php') ?>
</body>