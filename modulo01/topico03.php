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
                <p class="Titulo">Definição de dados</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">O conjunto de relações de um Banco de Dados precisa ser especificado ao sistema por meio de uma linguagem de definição de dados - DDL. A SQL DDL permite a especificação não apenas de um conjunto de relações, mas também de informações sobre cada relação, incluindo:</p>
                <ul class="Texto">
                    <li>Esquema para cada relação;</li>
                    <li>Domínio de valores associados a cada atributo;</li>
                    <li>Conjunto de índices a ser mantido para cada relação;</li>
                    <li>Restrições de integridade;</li>
                    <li>A estrutura física de armazenamento de cada relação no disco.</li>
                </ul>
                    <p class="Texto">Uma relação SQL é definida usando o comando <span class="code-color"><strong>CREATE TABLE</strong></span>. A forma geral do comando create table então é:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong> &lt;nome_tabela&gt; (
    &lt;nome_coluna1&gt &lt;tipo_coluna1&gt; <span class="code-color"><strong>&lt;NOT NULL&gt;</strong></span>, &lt;nome_coluna2&gt; &lttipo_coluna2&gt; <span class="code-color"><strong>&lt;NOT NULL&gt;</strong></span>, 
    ...
    &lt;nome_coluna&gt; &lt;tipo_coluna&gt; <span class="code-color"><strong>&lt;NOT NULL&gt;</strong></span>);
    </span>
                        </code></pre>
                    </div>
                    <p class="Texto">A restrição <span class="code-color"><strong>NOT NULL</strong></span> indica que o atributo deve ser obrigatoriamente preenchido; se não for especificado, então o default é que o atributo possa assumir o valor nulo.</p>
                    <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span> Ao se criar a tabela EMPREGADO do esquema EMPRESA, teria-se o seguinte comando:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong> EMPREGADO
    (nome char (30) NOT NULL, rg integer <span class="code-color"><strong>NOT NULL</strong></span>, cic integer,
    depto integer <span class="code-color"><strong>NOT NULL</strong></span>, rg_supervisor integer, salario, decimal
    (7,2)<span class="code-color">NOT NULL</span>)</span>
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">O comando <span class="code-color"><strong>CREATE TABLE</strong></span> inclui opções para especificar certas restrições de integridade, conforme se verá adiante.</p>
                    <p class="Texto">A relação criada acima está inicialmente vazia. O comando insert poderá ser usado para carregar os  dados para uma relação.</p>
                    <p class="Texto">Para remover uma tabela de banco de dados SQL, usamos o comando <span class="code-color"><strong>DROP TABLE</strong></span>. Esse comando remove todas as informações sobre a relação retirada do banco de dados. A forma geral para o <span class="code-color"><strong>DROP TABLE</strong></span> é:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>DROP TABLE</strong> </span>&lt;nome_tabela&gt;;
                        </code></pre>
                    </div>
                    <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Para se eliminar a tabela EMPREGADO do esquema EMPRESA, tem-se o seguinte comando:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>DROP TABLE</strong> </span>EMPREGADOS;
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">Observe que, neste caso, a chave da tabela EMPREGADOS (rg) é utilizada como chave estrangeira ou como chave primária, composta por diversas tabelas que devem ser devidamente corrigidas. Este processo não é assim tão simples, pois, como vemos neste caso, a exclusão da tabela <span class="code-color"><em>EMPREGADO</em></span> implica a alteração do projeto físico de diversas tabelas. Isso acaba implicando a construção de uma nova base de dados.</p>
                    <p class="Texto">O comando <span class="code-color"><strong>ALTER TABLE</strong></span> é usado para alterar a estrutura de uma relação existente. Ele também permite que o usuário faça a inclusão de novos atributos em uma tabela. A forma geral para o comando alter table é a seguinte:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <pre><code class="Texto">
<span class="code-color"><strong>ALTER TABLE</strong> &lt;tabela&gt; &lt;ADD, DROP, MODIFY&gt; &lt;coluna&gt; &lt;tipo_coluna&gt;</span>;
                        </code></pre>
                    </div>
                    <p class="Texto">Em que <span class="code-color"><strong>ADD</strong></span> adiciona uma coluna, <span class="code-color"><strong>DROP</strong></span> remove uma coluna, e <span class="code-color"><strong>modify</strong></span> modifica algo em uma tabela.</p>
                    <p class="Texto">No caso do comando <span class="code-color"><strong>ALTER TABLE</strong></span>, a restrição <span class="code-color">NOT NULL</span> não é permitida, pois assim que se insere um novo atributo na tabela, o valor para ele em todas as tuplas da tabela receberá o valor <span class="code-color"><strong>NULL</strong></span>.</p>
                    <p class="Texto">Não é permitido eliminar algum atributo de uma relação já definida. Assim, caso se deseje eliminar uma chave primária devidamente referenciada em outra tabela como chave estrangeira, em vez de obter a eliminação do campo, obterá apenas um erro.</p>
                    <p class="Subtopico"><strong>Visões (views)</strong></p>
                    <p class="Texto">Uma <span class="code-color"><strong>view</strong></span> em SQL é uma tabela que é derivada de outras tabelas ou de outras views. Uma view não necessariamente existe em forma física; é considerada uma tabela virtual (em contraste com as tabelas cujas tuplas são efetivamente armazenadas no banco de dados).</p>
                    <p class="Texto">Uma view é definida usando o comando <span class="code-color"><strong>CREATE VIEW</strong></span>. Para definir uma visão, precisa-se dar a ela um nome e definir a consulta que a processa.</p>
                    <p class="Texto">A forma geral é:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE VIEW</strong> &lt;nomevisao&gt; <strong>AS</strong> &lt;expressão de consulta&gt;</span>
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">Em que &lt;expressão de consulta&gt; é qualquer consulta SQL válida. Como exemplo, considere a visão consistindo em nomes de agências e de clientes.</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
    <span class="code-color"><strong>CREATE VIEW</strong></span> TODOS_CLIENTES <span class="code-color"><strong>AS</strong></span> (
    <span class="code-color"><strong>SELECT</strong></span> agencia_nome, cliente_nome
    <span class="code-color"><strong>FROM</strong></span> CLIENTE, CONTA, AGENCIA
    <span class="code-color"><strong>WHERE</strong></span> CLIENTE.cliente_cod = CONTA.cliente_cod 
    <span class="code-color"><strong>AND</strong></span> CONTA.agencia_cod = AGENCIA.agencia_cod
)
<span class="code-color"><strong>UNION</strong></span>
(
    <span class="code-color"><strong>SELECT</strong></span> agencia_nome, cliente_nome
    <span class="code-color"><strong>FROM</strong></span> CLIENTE, EMPRESTIMO, AGENCIA
    <span class="code-color"><strong>WHERE</strong></span> CLIENTE.cliente_cod = EMPRESTIMO.cliente_cod 
    <span class="code-color"><strong>AND</strong></span> EMPRESTIMO.agencia_cod = AGENCIA.agencia_cod
);

                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">Nomes de visões podem aparecer em qualquer lugar onde nome de relação (tabela) possa aparecer. Usando a visão TODOS_CLIENTES, pode-se achar todos os clientes da agência 'Princesa Isabel', escrevendo:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> cliente_nome
<span class="code-color"><strong>FROM</strong></span> TODOS_CLIENTES
<span class="code-color"><strong>WHERE</strong></span> agencia_nome = 'Princesa Isabel';
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">Uma modificação é permitida por intermédio de uma visão apenas se a visão em questão está definida em termos de uma relação do atual banco de dados relacional.</p>
                    <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Selecionando tuplas de empréstimos.</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE VIEW</strong></span> emprestimo_info <span class="code-color"><strong>AS</strong></span>
(
    <span class="code-color"><strong>SELECT</strong></span> agencia_cod, emprestimo_numero, cliente_cod
    <span class="code-color"><strong>FROM</strong></span> EMPRESTIMO
);
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">Uma vez que a SQL permite a um nome de visão aparecer em qualquer lugar em que um nome de relação aparece, pode-se escrever:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> emprestimo_info
<span class="code-color"><strong>VALUES</strong></span> (1, 40, 7);
                        </code></pre>
                    </div>
                    <p class="Texto">Essa inserção é representada por uma inserção na relação EMPRESTIMO, uma vez que é a relação a partir da qual a visão emprestimo_info foi construída. Deve-se, entretanto, ter algum valor para quantia. Esse valor é um valor nulo. Assim, o <span class="code-color"><strong>INSERT</strong></span> acima resulta na inserção da tupla: (1,40,7, NULL) na relação EMPRESTIMO.</p>
                    <p class="Texto">Da mesma forma, poderia-se usar os comandos <span class="code-color"><strong>UPDATE</strong></span> e <span class="code-color"><strong>DELETE</strong></span>.</p>
                    <p class="Texto">Para apagar uma visão, usa-se o comando:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <pre><code class="Texto">
<span class="code-color"><strong>DROP VIEW</strong></span> &lt;nomevisão&gt;;
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto"><strong>Ex.: Apagar a visão emprestimo_info.</strong></p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>DROP VIEW</strong></span> emprestimo_info;
                        </code></pre>
                    </div>
                    <p class="Subtopico"><strong>Restrições de integridade</strong></p>
                    <p class="Texto">As restrições de integridade fornecem meios para assegurar que mudanças feitas no banco de dados por usuários autorizados não resultem na inconsistência dos dados.</p>
                    <p class="Texto">Há vários tipos de restrições de integridade que seriam cabíveis a bancos de dados. Entretanto, as regras de integridade são limitadas às que podem ser verificadas com um mínimo de tempo de processamento.</p>
                    <p class="Subtopico"><strong>Restrições de domínios</strong></p>
                    <p class="Texto">Um valor de domínio pode ser associado a qualquer atributo. Restrições de domínio são as mais elementares formas de restrições de integridade. Elas são facilmente verificadas pelo sistema sempre que um novo item de dado é incorporado ao banco de dados.</p>
                    <p class="Texto">O princípio que está por trás do domínio de atributos é similar ao dos tipos em linguagem de programação. De fato é possível criar domínios em SQL por meio do comando <span class="code-color"><strong>CREATE DOMAIN</strong></span>.</p>
                    <p class="Texto">A forma geral é:</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE DOMAIN</strong></span> nome_do_domínio tipo_original
[ [ <span class="code-color"><strong>NOT</strong></span> ] <span class="code-color"><strong>NULL</strong></span> ]
[ <span class="code-color"><strong>DEFAULT</strong></span> valor_default ]
[ <span class="code-color"><strong>CHECK</strong></span> ( condições ) ];

                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto"><strong>Ex.: </strong>Cria o tipo_codigo como um número de 3 algarismos com valores permitidos de 100 a 800.</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE DOMAIN</strong></span> tipo_codigo <span class="code-color"><strong>numeric(3)</strong></span>
<span class="code-color"><strong>NOT NULL</strong></span>
<span class="code-color"><strong>CHECK</strong></span> ((tipo_codigo &gt;= 100) <span class="code-color"><strong>AND</strong></span> (tipo_codigo &lt;= 800));
                        </code></pre>
                    </div>
                    <br>
                    <p class="Texto">A cláusula <span class="code-color"><strong>CHECK</strong></span> da SQL-92 permite modos poderosos de restrições de domínio. Ela pode ser usada também no momento de criação da tabela.</p>
                    <br>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong></span> dept
(
    deptno <span class="code-color"><strong>integer(2)</strong></span> <span class="code-color"><strong>NOT NULL</strong></span>, 
    dname <span class="code-color"><strong>char(12)</strong></span>,
    loc <span class="code-color"><strong>char(12)</strong></span>,
    <span class="code-color"><strong>CHECK</strong></span> (deptno &gt;= 100)
);

                        </code></pre>
                    </div>
                    <br>
                    <p class="Subtopico"><strong>Restrições de integridade referencial</strong></p>
                    <p class="Texto">Muitas vezes deseja-se assegurar que um valor que aparece em uma relação para um dado conjunto de atributos apareça também para um certo conjunto de atributos em outra relação. Isso é chamado de <span class="code-color"><em>Integridade Referencial</em></span>.</p>
                    <p class="Texto">Neste relacionamento, considerando <span class="code-color"><strong>K1</strong></span> como sendo chave primária de <span class="code-color"><strong>E1</strong></span>, e <span class="code-color"><strong>Kn</strong></span> como sendo chave primária de <span class="code-color"><strong>En</strong></span>, temos em <span class="code-color"><strong>R</strong></span> tuplas que serão identificadas inclusive por <span class="code-color"><strong>K1</strong></span> e <span class="code-color"><strong>Kn</strong></span> (na forma de chaves estrangeiras). Desta forma, não poderá existir um elemento <span class="code-color"><strong>K1</strong></span> em <span class="code-color"><strong>R</strong></span> que não faça parte de <span class="code-color"><strong>E1</strong></span>, tampouco um <span class="code-color"><strong>Kn</strong></span> em <span class="code-color"><strong>R</strong></span> que não faça parte de <span class="code-color"><strong>En</strong></span>.</p>
                    <p class="Texto">As modificações no banco de dados podem causar violações de integridade referencial. Considerações devem ser feitas ao inserir, remover e atualizar tuplas. Considerar: <span class="code-color"><strong>πα(R2) ⊆ πk(R1)</strong></span>.</p>
                    <ul class="Texto">
                        <li><span class="code-color"><strong>Inserir: </strong></span>Se uma tupla t2 é inserida em R2, o sistema precisa assegurar que existe uma tupla t1 em R1 tal que t1[k] = t2[α]. Isto é, t2[α] επk(R1).</li>
                        <li><span class="code-color"><strong>Remover: </strong></span>Se uma tupla t2 é removida de R2, o sistema precisa computar o conjunto de tuplas em R2 que referencia t1: σα (R1)= t1[k](R2).</li>
                    </ul>
                    <p class="Texto">Se este conjunto não for vazio, o comando remover é rejeitado como um erro, ou as tuplas que se referem a t1 precisam, elas mesmas, serem removidas. A última solução pode levar a uma remoção em cascata, uma vez que as tuplas precisam se referir a outras tuplas que se referem a t1 e assim por diante.</p>
                    <ul class="Texto">
                        <li><span class="code-color"><strong>Atualizar: </strong></span>Precisa-se considerar dois casos para atualização: a atualização da relação referenciadora (filha - R2) e a atualização da relação referenciada (pai - R1).</li>
                    </ul>
                    <p class="Texto">Se a tupla t2 é atualizada na relação R2 e a atualização modifica valores para a chave estrangeira α, então é feito um teste similar para o caso de inserção. Para o caso de t2 denotar o novo valor da tupla t2’, o sistema precisa assegurar que: t2’ [α]∈ πk (R1).</p>
                    <p class="Texto">Se a tupla t1 é atualizada em R1 e a atualização modifica valores para a chave primária (K), então é feito um teste similar ao caso remover. O sistema precisa computar: σα (R1)= t1[k](R2).</p>
                    <p class="Texto">A SQL permite a especificação de chaves primárias, candidatas e estrangeiras como parte da instrução <span class="code-color"><strong>CREATE TABLE</strong></span>.</p>
                    <ul class="Texto">
                        <li>A cláusula <span class="code-color"><strong>PRIMARY KEY</strong></span> da instrução CREATE TABLE inclui uma lista de atributos que comprrende a chave primária;</li>
                        <li>A cláusula <span class="code-color"><strong>UNIQUE KEY</strong></span> da instrução CREATE TABLE inclui lista de atributos que compreende a chave candidata;</li>
                        <li> A clásula <span class="code-color"><strong>FOREING KEY </strong></span> da instrução CREATE TABLE inclui uma lista de atributos que compreende a chave estrangeira e o nome da relação relação referida pela chave estrangeira.</li>
                    </ul>
                    <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Criar as relações cliente, agência e conta para o esquema do banco.</p>
                    <br>
                    <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong></span> cliente
    (
        cliente_cod <span class="code-color"><strong>INTEGER NOT NULL</strong></span>,
        cliente_nome <span class="code-color"><strong>CHAR(30)</strong></span>,
        rua <span class="code-color"><strong>CHAR(30)</strong></span>,
        cidade <span class="code-color"><strong>CHAR(30)</strong></span>,
        <span class="code-color"><strong>PRIMARY KEY</strong></span> (cliente_cod)
    );

<span class="code-color"><strong>CREATE TABLE</strong></span> agencia
    (
        agencia_cod <span class="code-color"><strong>INTEGER NOT NULL</strong></span>,
        agencia_nome <span class="code-color"><strong>CHAR(30)</strong></span>,
        agencia_cidade <span class="code-color"><strong>CHAR(30)</strong></span>,
        fundos <span class="code-color"><strong>DECIMAL(7,2)</strong></span>,
        <span class="code-color"><strong>PRIMARY KEY</strong></span> (agencia_cod),
        <span class="code-color"><strong>CHECK</strong></span> (fundos >= 0)
    );

<span class="code-color"><strong>CREATE TABLE</strong></span> conta
    (
        agencia_cod <span class="code-color"><strong>INT</strong></span>,
        conta_numero <span class="code-color"><strong>CHAR(10) NOT NULL</strong></span>,
        cliente_cod <span class="code-color"><strong>INT NOT NULL</strong></span>,
        saldo <span class="code-color"><strong>DECIMAL(7,2)</strong></span>,
        <span class="code-color"><strong>PRIMARY KEY</strong></span> (cliente_cod, conta_numero),
        <span class="code-color"><strong>FOREIGN KEY</strong></span> (cliente_cod) <span class="code-color"><strong>REFERENCES</strong></span> cliente(cliente_cod),
        <span class="code-color"><strong>FOREIGN KEY</strong></span> (agencia_cod) <span class="code-color"><strong>REFERENCES</strong></span> agencia(agencia_cod),
        <span class="code-color"><strong>CHECK</strong></span> (saldo >= 0)
        );
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto">Note que os atributos chave precisam ter a especificação <span class="code-color"><strong>NOT NULL</strong></span>.</p>
                                <p class="Texto">Quando uma regra de integridade referencial é violada, o procedimento normal é rejeitar a ação que ocasionou essa violação. Entretanto, é possível criar ações para modificação das tabelas associadas em que tenha havido(ou em que haveria) a quebra de integridade referencial.</p>
                                <p class="Texto">Isso é feito por meio das cláusulas <span class="code-color"><strong>ON DELETE</strong></span> e <span class="code-color"><strong>ON UPDATE CASCADE</strong></span>associadas à cláusula <span class="code-color"><strong>FOREIGN KEY</strong></span>, por exemplo: </p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong></span> conta
(
    agencia_cod <span class="code-color"><strong>INT</strong></span>,
    conta_numero <span class="code-color"><strong>CHAR(10) NOT NULL</strong></span>,
    cliente_cod <span class="code-color"><strong>INT NOT NULL</strong></span>,
    saldo <span class="code-color"><strong>DECIMAL(7,2)</strong></span>,
    <span class="code-color"><strong>PRIMARY KEY</strong></span> (cliente_cod, conta_numero),
    <span class="code-color"><strong>FOREIGN KEY</strong></span> (cliente_cod) <span class="code-color"><strong>REFERENCES</strong></span> cliente(cliente_cod),
    <span class="code-color"><strong>FOREIGN KEY</strong></span> (agencia_cod) <span class="code-color"><strong>REFERENCES</strong></span> agencia(agencia_cod)
    <span class="code-color"><strong>ON DELETE CASCADE ON UPDATE CASCADE</strong></span>,
    <span class="code-color"><strong>CHECK</strong></span> (saldo >= 0)
);
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Subtopico"><strong>Asserções</strong></p>
                                <p class="Texto">Uma asserção (afirmação) é um predicado expressando uma condição que desejamos que o banco de dados sempre satisfaça. Quando uma assertiva é criada, o sistema testa sua validade. Se a afirmação é válida, então qualquer modificação posterior no banco de dados será permitida apenas quando a asserção não for violada.</p>
                                <p class="Texto">Restrições de domínio e regras de integridade referencial são formas especiais de asserções.</p>
                                <p class="Texto">O alto custo de testar e manter afirmações tem levado a maioria de desenvolvedores de sistemas a omitir o suporte para afirmações gerais. A proposta geral para a linguagem SQL inclui uma construção de proposta geral, chamada instrução <span class="code-color"><strong>CREATE ASSERTION</strong></span>, para a expressão de restrição de integridade. Uma afirmação pertencente a uma única relação toma a seguinte forma:</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <pre><code class="Texto">
<span class="code-color"><strong>CREATE ASSERTION</strong></span> &lt;nome da asserção&gt; 
<span class="code-color"><strong>CHECK</strong></span> <predicado>
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Definir uma restrição de integridade que não permita saldos negativos.</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>CREATE ASSERTION</strong></span> saldo_restricao 
<span class="code-color"><strong>CHECK</strong></span> (<span class="code-color"><strong>NOT EXISTS</strong></span> (<span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> conta <span class="code-color"><strong>WHERE</strong></span> saldo &lt; 0))
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Só permitir a inserção de saldos maiores que quantias emprestadas para aquele cliente.</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>CREATE ASSERTION</strong></span> saldo_restricao2 
<span class="code-color"><strong>CHECK</strong></span> (<span class="code-color"><strong>NOT EXISTS</strong></span>
(<span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> conta <span class="code-color"><strong>WHERE</strong></span>
saldo &lt;
 (<span class="code-color"><strong>SELECT MAX</strong></span>(quantia)
 <span class="code-color"><strong>FROM</strong></span> emprestimo
 <span class="code-color"><strong>WHERE</strong></span> emprestimo.cliente_cod = conta.cliente_cod)));
                                    </code></pre>
                                </div>

            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>