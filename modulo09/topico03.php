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
                <p class="Titulo">3. Tipos de Dados e Variáveis</p>
                <p class="Texto"><strong>Em Python, existem vários tipos de dados que podem ser usados em variáveis, entre eles:</strong></p>
                <ul>
                    <li><p class="Texto">Números inteiros (int): representam valores inteiros sem ponto decimal, por exemplo: 1, 2, 3, -4, -5, etc.;</p></li>
                    <li><p class="Texto">Números de ponto flutuante (float): representam valores numéricos com ponto decimal, por exemplo: 1.2, 3.5, -4.7, etc.;</p></li>
                    <li><p class="Texto">Números complexos (complex): representam números complexos com uma parte real e uma parte imaginária, por exemplo: 3 + 2j, -1 + 4j, etc.;</p></li>
                    <li><p class="Texto">Strings (str): representam uma sequência de caracteres, como um texto ou palavra. Strings são criados usando aspas simples ('') ou aspas duplas ("");</p></li>
                    <li><p class="Texto">Booleanos (bool): representam valores verdadeiros ou falsos (True ou False).</p></li>
                </ul>
                <p class="Texto">
                    Para armazenar esses tipos de dados, usamos variáveis em Python. Uma variável
                    é um espaço na memória do computador que armazena um valor específico.
                    Para criar uma variável, basta atribuir um valor a um nome de variável.
                </p>
                <p class="Subtopico">3.1. Tipos numéricos</p>
                <p class="Texto">
                    Em Python, os tipos numéricos incluem inteiros (int), números de ponto flutuante
                    (float) e números complexos (complex). Esses tipos de dados são frequentemente
                    usados para fazer cálculos e armazenar valores numéricos.
                </p>
                <p class="Texto">Aqui está um exemplo prático de como usar os tipos numéricos em Python:</p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de uso de tipos numéricos em Python</span> 

<span class="comment"># Criando variáveis numéricas</span> 
x = 5
y = 2.5
z = 1 + 2j

<span class="comment"># Imprimindo os valores das variáveis </span>
print(x) #5
print(y) # 2.5
print(z) #(1+2j)

<span class="comment"># Realizando operações numéricas</span>

soma = x + y
subtracao = x - y
multiplicacao = x * y
divisao = x / y
potencia = x ** y
modulo = x % y

<span class="comment"># Imprimindo os resultados das operações </span>

print(soma)          #7.5
print(subtracao)     # 2.5
print(multiplicacao) #12.5
print(divisao)       #2.0
print(potencia)      #25
print(modulo)        #1

                    </code></pre>
                </div>
                <p class="Subtopico"><strong>3.2. Strings</strong></p>
                <p class="Texto">
                    Em Python, as strings são usadas para representar texto. Uma string é uma
                    sequência de caracteres delimitada por aspas simples (' ') ou aspas duplas (" ").
                    Aqui estão alguns conceitos e exemplos práticos sobre strings em Python:
                </p>
                <ul>
                    <li><p class="Texto"><span class="code-color"><strong>Indexação:</strong></span> os caracteres em uma string podem ser acessados usando índices, começando em 0 para o primeiro caractere.</p></li>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
texto = <span class="green-code">"Olá, mundo!"</span>
primeiro_caractere = text[0]
segundo_caractere = text[1]
ultimo_caractere = text[-1]
                        </code></pre>
                    </div>
                    <li><p class="Texto"><span class="code-color"><strong>Concatenação:</strong></span> é possível concatenar duas ou mais strings usando o operador de adição (+).</p></li>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
saudacao = <span class="green-code">"Olá"</span>
nome = <span class="green-code">"João"</span>
frase = saudacao + ", " + nome + "!"
print(frase) <span class="comment"># "Olá, João"</span>
                        </code></pre>
                    </div>
                    <li><p class="Texto"><span class="code-color"><strong>Comprimento:</strong></span> o comprimento de uma string (ou seja, o número de caracteres) pode ser obtido usando a função len().</p></li>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
text = <span class="green-code">"Esta é um string."</span>
comprimento = len(texto)
print(comprimento) <span class="comment"># 18</span>
                        </code></pre>
                    </div>
                    <li><p class="Texto"><span class="code-color"><strong>Métodos de string:</strong></span> as strings em Python possuem vários métodos que podem ser usados para realizar operações comuns, como transformar letras em maiúsculas ou minúsculas, separar strings em substrings ou remover espaços em branco.</p></li>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
texto = <span class="green-code">"Python é uma linguagem de programação"</span>
maiusculo = texto.<span class="orange-code">upper</span>
minusculo = texto.<span class="orange-code">lower</span>
palavras = texto.split()
substituicao = texto.replace(<span class="green-code">'Python'</span>, <span class="green-code">'Java'</span>)
                        </code></pre>
                    </div>
                </ul>
                <p class="Texto">
                            Neste exemplo, usamos alguns dos métodos de string mais comuns em Python.
                            O método upper() transforma todas as letras em maiúsculas, enquanto o método
                            lower() transforma todas as letras em minúsculas. O método split() divide uma
                            string em substrings com base em um separador (por padrão, o espaço em
                            branco). O método replace() substitui uma substring por outra em uma string.
                        </p>
                        <p class="Subtopico"><strong>3.3. Booleanos</strong></p>
                        <p class="Texto">
                            Em Python, o tipo booleano é usado para representar valores lógicos verdadeiros
                            ou falsos. Os valores booleanos são representados pelos objetos True e False.
                            Aqui estão alguns conceitos e exemplos práticos sobre booleanos em Python:
                        </p>
                        <p class="Texto">
                            <strong>Operadores de comparação:</strong> os operadores de comparação são usados para
                            comparar dois valores e retornar um valor booleano. Por exemplo:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
x = 5
y = 10

igual = x == y<span class="comment"># False</span>
diferente  = x ! y<span class="comment"># True</span>
maior = x > y<span class="comment"># False</span>
menor = x < y <span class="comment"># True</span>
maior_ou_igual = x >= y <span class="comment"># False</span>
menor_ou_igual = x <= y <span class="comment"># True</span>
                            </code></pre>
                        </div>
                        <p class="Texto">
                            <strong>Operadores booleanos:</strong> os operadores booleanos são usados para combinar
                            valores booleanos. Os operadores booleanos mais comuns são and, or e not. Por
                            exemplo:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
x = 5
y = 10
z = 15

resultado = (x < y) and (y < z) <span class="comment"># True</span>
resultado2 = (x > y) or (y > z) <span class="comment"># False</span>
resultado3 = not (x < y) <span class="comment"># False</span>
                            </code></pre>
                        </div>
                        <p class="Texto">
                            <strong>Valores truthy e falsy:</strong> em Python, além dos valores booleanos explícitos True e
                            False, alguns outros valores também são considerados truthy (verdadeiros) ou
                            falsy (falsos) em um contexto booleano. Valores falsy incluem False, None, 0, ""
                            (uma string vazia), [] (uma lista vazia), () (uma tupla vazia) e {} (um dicionário vazio).
                            Qualquer outro valor é considerado truthy. Por exemplo:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
<span class="comment"># Exemplos de valores truthy e falsy em Python</span>
<span class="blue-code">if</span> 0:
    <span class="orange-code">print</span>(<span class="green-code">"Este código nunca será executado."</span>)
<span class="blue-code">else:</span>
    <span class="orange-code">print</span>(<span class="green-code">"Este código será executado"</span>) <span class="comment">"Este código será executado"</span>
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Neste exemplo, o valor 0 é considerado falsy em um contexto booleano, portanto
                            o código dentro do bloco if nunca será executado. Em vez disso, o código dentro
                            do bloco else será executado.
                        </p>
                        
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>