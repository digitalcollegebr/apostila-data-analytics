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
            <p class="Titulo">Introdução ao PostgreSQL DDL</p>
            <p class="Subtopico"><strong>Introdução</strong></p>
            <p class="Texto">O PostgreSQL DDL é o acrônimo para Data Definition Language. O Idioma de Definição de Dados é usado para lidar com as descrições e esquemas do banco de dados, e é usado para definir e modificar a estrutura dos dados. Com a ajuda do Idioma de Definição de Dados, decidimos como os dados devem ser armazenados no banco de dados. Podemos realizar operações no banco de dados criando um novo banco de dados, alterando o banco de dados existente e removendo, truncando ou renomeando o banco de dados existente.</p>
            <p class="Texto"><strong>Como funciona a declaração DDL no PostgreSQL? </strong>O Idioma de Definição de Dados é usado para definir, bem como modificar, a estrutura dos dados. O que significa que os comandos do Idioma de definição de dados podem ser usados para criar, soltar ou modificar tabelas dentro de um mesmo banco de dados.</p>
            <p class="Texto">Lista de declaração DDL. O Idioma de Definição de Dados consiste nas seguintes declarações:</p>
            <ul class="Texto">
                <li class="code-color"><strong>CREATE</strong>;</li>
                <li class="code-color"><strong>ALTER</strong>;</li>
                <li class="code-color"><strong>TRUNCATE</strong>;</li>
                <li class="code-color"><strong>DROP</strong>.</li>
            </ul>
            <p class="Subtopico"><strong>CREATE</strong></p>
            <p class="Texto">O CREATE é usado para criar objetos (database, table, index, views, store procedure, function, e triggers).</p>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE </strong></span> &lt;nome_da_tabela&gt;
(column_name_1 datatype,
column_name_2 datatype,
.
.
column_name_n datatype
);
                </code></pre>
            </div>
            <br>
            <p class="Texto"><strong><span class="code-color">Ex.:</span></strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong></span> student
(
    student_id <span class="code-color"><strong>INT</strong></span>,
    student_name <span class="code-color"><strong>VARCHAR</strong></span>,
    student_age <span class="code-color"><strong>INT</strong></span>,
    student_address <span class="code-color"><strong>VARCHAR(25)</strong></span>,
    student_phone <span class="code-color"><strong>VARCHAR(20)</strong></span>
);
                </code></pre>
            </div>
            <br>
            <p class="Subtopico"><strong>ALTER</strong></p>
            <p class="Texto">A instrução <span class="code-color"><strong>ALTER</strong></span> permite modificar os objetos de banco de dados existentes. Podemos alterar ou modificar a estrutura do banco de dados usando uma instrução <span class="code-color"><strong>ALTER</strong></span>.</p>
            <p class="Texto">Podemos executar as seguintes operações usando uma instrução ALTER:</p>
            <ul class="Texto">
                <li>Adicione uma coluna na tabela;</li>
                <li>Drop a coluna existente;</li>
                <li>Altere o tipo de dados da coluna.</li>
            </ul>
            <p class="Texto"><strong><span class="code-color">a. </span>Considere a seguinte sintaxe de instrução ALTER para adicionar uma PRIMARY KEY em uma coluna de uma tabela existente.</strong></p>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong></span>
&lt;nome_da_tabela&gt;
<span class="code-color"><strong>ADD PRIMARY KEY</strong></span> (&lt;nome_da_coluna&gt;);
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong></span>
student
<span class="code-color"><strong>ADD PRIMARY KEY </strong></span>(student_id);
                </code></pre>
            </div>
            <p class="Texto"><strong>b. </strong>Considere a seguinte sintaxe de instrução ALTER para definir NÃO NULL em uma coluna na tabela existente.</p>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong></span>
&lt;nome_da_tabela&gt;
<span class="code-color"><strong>ALTER COLUMN</strong></span>
&lt;nome_da_coluna&gt;
<span class="code-color"><strong>SET NOT NULL</strong></span>;
                </code></pre>
            </div>
            <p class="Titulo"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong></span>
student
<span class="code-color"><strong>ALTER COLUMN</strong></span>
student_name
<span class="code-color"><strong>SET NOT NULL</strong></span>;
                </code></pre>
            </div>
            <p class="Texto"><strong><span class="code-color">c. </span>Considere a seguinte sintaxe de declaração ALTER para excluir NÃO NULL em uma coluna na tabela existente.</strong></p>
            <br>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong></span>
&lt;nome_da_tabela&gt;
<span class="code-color"><strong>ALTER COLUMN</strong></span>
&lt;nome_da_coluna&gt;
<span class="code-color"><strong>DROP NOT NULL</strong></span>;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong></span>
student
<span class="code-color"><strong>ALTER COLUMN</strong></span>
student_name
<span class="code-color"><strong>DROP NOT NULL</strong></span>;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><strong><span class="code-color">d. </span>Considere a seguinte sintaxe de instrução ALTER para adicionar uma nova coluna na tabela existente.</strong></p>
            <br>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            &lt;tableName&gt;
            <span class="code-color"><strong>ADD</strong></span> &lt;columnName data-type&gt;;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            student
            <span class="code-color"><strong>ADD</strong></span> email <span class="code-color"><strong>varchar(50)</strong></span>;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><strong>Considere a seguinte sintaxe de instrução ALTER para renomear um nome de coluna existente para o novo nome da coluna.</strong></p>
            <br>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            &lt;nome_da_tabela&gt;
            <span class="code-color"><strong>RENAME COLUMN</strong></span>
            &lt;antigo_nome_da_coluna&gt; <span class="code-color"><strong>TO</strong></span> &lt;novo_nome_da_coluna&gt;;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            student
            <span class="code-color"><strong>RENAME COLUMN</strong></span>
            Email <span class="code-color"><strong>TO</strong></span> email_id;
                </code></pre>
            </div>
            <br>
            <p class="Texto">Considere a seguinte sintaxe de instrução ALTER para remover uma coluna existente da tabela.</p>
            <p class="Texto"><strong>Sintaxe: </strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            &lt;tableName&gt;
            <span class="code-color"><strong>DROP COLUMN</strong></span> &lt;columnName&gt;
                </code></pre>
            </div>
                <br>
            <p class="Texto"><strong><span class="code-color">Ex.:</span></strong></p>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
                    <span class="code-color"><strong>ALTER TABLE</strong></span>
                    student
                    <span class="code-color"><strong>DROP COLUMN</strong></span> Email_id;
                </code></pre>
            </div>
            <br>
            <p class="Texto">Podemos renomear os objetos do banco de dados. A instrução RENAME é usada para renomear as tabelas no banco de dados.</p>
            <p class="Texto">Considere a seguinte sintaxe de declaração RENAME para renomear a coluna existente da tabela.</p>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            &lt;antigo_nome&gt;
            <span class="code-color"><strong>RENAME TO</strong></span>
            &lt;novo_nome&gt;;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>ALTER TABLE</strong></span>
            student
            <span class="code-color"><strong>RENAME TO</strong></span>
            studentInfo;
                </code></pre>
            </div>
            <br>
            <p class="Subtopico"><strong>TRUNCATE</strong></p>
            <p class="Texto">Podemos remover todas as linhas de uma tabela, incluindo todos os espaços alocados para as linhas.</p>
            <p class="Texto">Considere a seguinte sintaxe de instrução TRUNCATE para remover todas as linhas da tabela.</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>TRUNCATE TABLE</strong></span>
            &lt;nome_da_tabela&gt;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>TRUNCATE TABLE</strong></span>
            studentInfo
                </code></pre>
            </div>
            <br>
            <p class="Subtopico"><strong>DROP</strong></p>
            <p class="Texto">Podemos excluir objetos de banco de dados usando a instrução DROP, como uma tabela, índice ou visualização etc.</p>
            <p class="Texto">Considere a seguinte sintaxe de instrução DROP para remover toda a estrutura do objeto do banco de dados.</p>
            <p class="Texto"><strong>Sintaxe:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>DROP TABLE</strong></span>
            &lt;nome_da_tabela&gt;;
            <span class="code-color"><strong>OR</strong></span>
            <span class="code-color"><strong>DROP DATABASE</strong></span>
            &lt;nome_do_banco&gt;;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><strong>Ex.:</strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>DROP TABLE</strong></span>
            studentInfo;
                </code></pre>
            </div>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>