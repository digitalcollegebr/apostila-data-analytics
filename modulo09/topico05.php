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
                <p class="Titulo">5. Coleções de Dados</p>
                <p class="Texto">
                    Em Python, existem três tipos principais de coleções de dados: listas, dicionários
                    e tuplas. Aqui estão algumas definições e exemplos práticos sobre cada um
                    desses tipos de coleções:
                </p>
                <ul>
                    <li><p class="Texto"><strong>Listas:</strong> são coleções ordenadas de elementos. Os elementos podem ser de qualquer tipo de dados e podem ser adicionados, modificados ou removidos facilmente;</p></li>
                    <li><p class="Texto"><strong>Dicionários:</strong> dicionários são coleções de pares chave-valor. Cada valor é associado a uma chave única e imutável que pode ser usada para acessar esse valor posteriormente;</p></li>
                    <li><p class="Texto"><strong>Tuplas:</strong> as tuplas são coleções imutáveis de elementos, ou seja, não podem ser modificadas após a criação. As tuplas são usadas para armazenar um conjunto de valores que não deve ser alterado.</p></li>
                </ul>
                <p class="Texto">
                    Cada tipo de coleção de dados tem suas próprias propriedades e métodos. Por
                    exemplo, as listas podem ser usadas para armazenar uma coleção ordenada de
                    elementos, os dicionários são úteis para armazenar informações associadas a
                    uma chave específica e as tuplas são usadas para armazenar informações que
                    não podem ser alteradas após a criação. Ao escolher qual tipo de coleção usar, é
                    importante considerar as necessidades específicas do seu projeto e como cada
                    tipo de coleção pode ser usado para resolver o problema em questão.
                </p>
                <p class="Subtopico"><strong>5.1. Listas</strong></p>
                <p class="Texto">
                    Em Python, as listas são uma estrutura de dados que permitem armazenar uma
                    coleção ordenada de valores. Aqui estão algumas definições e exemplos práticos
                    sobre listas:
                </p>
                <p class="Texto">
                    <strong>Definição:</strong><br>
                    uma lista em Python é definida usando colchetes [ ] e separando cada
                    elemento com uma vírgula. Os elementos podem ser de qualquer tipo de dado,
                    inclusive outras listas.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de criação de uma lista em Python</span>

lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
lista_misturada = <span class="code-color">1, </span><span class="code-color">"dois"</span> <span class="code-color">True, [6, 7, 8]</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    Acessando elementos: você pode acessar elementos individuais de uma lista
                    usando um índice entre colchetes []. O primeiro elemento da lista tem índice 0, o
                    segundo tem índice 1, e assim por diante. Também é possível acessar elementos
                    da lista contando de trás para frente, usando índices negativos.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de acesso a elementos de uma lista em Python</span>

lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
primeiro_numero = lista_numeros[0] <span class="comment"># Retorna 1</span>
ultimo_numero = lista_numeros[-1] <span class="comment"># Retorna 5</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Modificando elementos:</strong><br>
                    você pode modificar elementos individuais de uma
                    lista atribuindo um novo valor a um índice específico.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de modificação usando uma lista em Python</span>
lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
lista_numeros<span class="code-color">[0]</span> = 6
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Adicionando elementos:</strong><br>
                    você pode adicionar elementos a uma lista usando o
                    método append().
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de adição de elementos a uma lista em Python</span>

lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
lista_numeros.append(6)
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Removendo elementos:</strong><br>
                     você pode remover elementos de uma lista usando os
                    métodos pop() (para remover um elemento com base em seu índice) ou remove()
                    (para remover um elemento com base em seu valor).
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
lista_numeros = [<span class="code-color">1</span>, <span class="code-color">2</span>, <span class="code-color">3</span>, <span class="code-color">4</span>, <span class="code-color">5</span>]
lista_numeros.pop(0) <span class="comment"># Remove o primeiro elemento da lista</span>
lista_numeros.remove(3) <span class="comment"># Remove o valor 3 da lista</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Verificando a presença de um elemento:</strong><br>
                     você pode verificar se um elemento
                    está presente em uma lista usando o operador in.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de verificação da presença de um elemento em uma lista em Python</span>

lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
if <span class="code-color">3</span> in lista_numeros:
    <span class="orange-code">print</span>(<span class="green-code">"O número 3 está na lista!"</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Iterando sobre uma lista:</strong> você pode iterar sobre os elementos de uma lista
                    usando um loop for.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de iteração sobre uma lista em Python</span>

lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
<span class="blue-code">for</span> nuemro <span class="blue-code">in</span> lista_numeros:
    <span class="orange-code">print</span>(numero)
                    </code></pre>
                </div>
                <p class="Texto">
                    Esses são apenas alguns exemplos básicos de como trabalhar com listas em
                    Python. As listas têm muitas outras funcionalidades e métodos que podem ser
                    úteis para diferentes situações de programação.
                </p>
                <p class="Subtopico"><strong>5.2. Dicionários</strong></p>
                <p class="Texto">
                    Em Python, dicionários são coleções de pares chave-valor. Cada valor é associado
                    a uma chave única e imutável que pode ser usada para acessar esse valor
                    posteriormente. Aqui estão algumas definições e exemplos práticos sobre
                    dicionários em Python.
                </p>
                <p class="Texto">
                    <strong>Criação de um dicionário: </strong><br>
                    Para criar um dicionário, utilizamos as chaves { } e separamos cada par chave-
                    valor com uma vírgula.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de criação de um dicionário em Python</span>

dicionario_pessoa = {<span class="green-code">"nome"</span>: <span class="green-code">"João"</span>, <span class="green-code">"idade"</span>: 30, <span class="green-code">"cidade"</span>: <span class="green-code">"São Paulo"</span>}
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Acesso aos valores do dicionário:</strong><br>
                    Para acessar os valores de um dicionário, basta especificar a chave
                    correspondente ao valor desejado dentro dos colchetes [ ].
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de acesso aos valores de um dicionário em Python</span>

<span class="orange-code">print</span>(dicionario_pessoa[<span class="green-code">"nome"</span>]) <span class="comment"># retorna "João"</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Adição de novos elementos ao dicionário:</strong> 
                    Podemos adicionar um novo par chave-valor a um dicionário simplesmente
                    atribuindo o valor a uma nova chave.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de adição de um novo elemento a um dicionário em Python</span>
dicionario_pessoa[<span class="green-code">"profissão"</span>] = <span class="green-code">"Engenheiro"</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Remoção de elementos do dicionário:</strong><br>
                    Podemos remover um elemento de um dicionário utilizando a palavra chave "del"
                    e especificando a chave correspondente.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de remoção de um elemento de um dicionário em Python</span>

del dicionario_pessoa<span class="code-color">[<span class="green-code">"idade"</span>]</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Métodos úteis dos dicionários:</strong> 
                    Alguns dos métodos mais comuns dos dicionários em Python incluem "keys()",
                    que retorna uma lista de todas as chaves do dicionário, e "values()", que retorna
                    uma lista de todos os valores do dicionário.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de uso dos métodos "keys()" e "values()" em Python</span>
<span class="orange-code">print</span>(dicionario_pessoa.keys()) <span class="comment"># retorna ["nome", "cidade", "profissão"]</span>
<span class="orange-code">print</span>(dicionario_pessoa.keys()) <span class="comment"># retorna ["João", "São Paulo", "Engenheiro"]</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    Os dicionários são úteis para armazenar informações associadas a uma chave
                    específica. Eles podem ser usados para armazenar informações de contato,
                    configurações de usuário ou qualquer outra informação que precise ser acessada
                    de forma rápida e eficiente.
                </p>
                <p class="Subtopico"><strong>5.3. Tuplas</strong></p>
                <p class="Texto">
                    Em Python, tuplas são coleções de valores imutáveis e ordenados. Ao contrário
                    das listas, as tuplas não podem ser modificadas após a sua criação. Aqui estão
                    algumas definições e exemplos práticos sobre tuplas em Python:
                </p>
                <p class="Texto">
                    <strong>Criação de uma tupla:</strong><br>
                    Para criar uma tupla, utilizamos os parênteses ( ) e separamos cada elemento
                    com uma vírgula.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de criação de uma tupla em Python</span>

tupla_frutas = (<span class="green-code">"maçã"</span>, <span class="green-code">"banana"</span>, <span class="green-code">"laranja"</span>, <span class="green-code">"uva"</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Acesso aos elementos da tupla:</strong><br>
                    Podemos acessar os elementos de uma tupla utilizando seus índices. Os índices
                    começam em 0.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de acesso aos elementos de uma tupla em Python</span>
<span class="orange-code">print</span>(tupla_frutas[0]) <span class="comment"># Retorna "maçã"</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Conversão de lista em tupla:</strong><br>
                    Podemos converter uma lista em uma tupla utilizando a função "tuple()".
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de conversão de lista em tupla em Python</span>

lista_numeros = <span class="code-color">[1, 2, 3, 4, 5]</span>
tupla_numeros = tuple(lista_numeros)
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Desempacotamento de tupla:</strong><br>
                    Podemos atribuir cada elemento de uma tupla a uma variável separadamente,
                    em um processo conhecido como desempacotamento.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de desempacotamento de tupla em Python</span>

tupla_pessoa = (<span class="green-code">"João"</span>, 30, <span class="green-code">"São Paulo"</span>)
nome, idade, cidade = tupla_pessoa
                    </code></pre>
                </div>
                <p class="Texto">
                    <strong>Métodos úteis das tuplas:</strong>
                    Alguns dos métodos mais comuns das tuplas em Python incluem "count()", que
                    conta o número de vezes que um elemento aparece na tupla, e "index()", que
                    retorna o índice da primeira ocorrência de um elemento na tupla.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment"># Exemplo de uso de métodos "count()" e "index()" em Python</span>

<span class="orange-code">print</span>(tupla_frutas.count("banana")) <span class="comment"># retorna 1</span>
<span class="orange-code">print</span>(tupla_frutas.index("laranja")) <span class="comment"># retorna 2</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    As tuplas são úteis quando precisamos armazenar uma coleção de elementos
                    que não pode ser modificada posteriormente, como dias da semana ou
                    coordenadas geográficas. Elas também podem ser usadas para retornar
                    múltiplos valores de uma função.
                </p>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.php') ?>
</body>