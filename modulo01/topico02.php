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
                <p class="Titulo">Linguagem SQL</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">Quando os Bancos de Dados Relacionais estavam sendo desenvolvidos, foram criadas linguagens destinadas à sua manipulação. <span class="code-color"><strong>O Departamento de Pesquisas da IBM</strong></span>, desenvolveu a <span class="code-color"><strong>SQL</strong></span> como forma de interface para o sistema de BD relacional denominado <span class="code-color"><strong>SYSTEM R</strong></span>, no início dos anos 70. Em 1986 o <span class="code-color"><strong>American National Standard Institute (ANSI)</strong></span> publicou um padrão SQL. A SQL estabeleceu-se como linguagem padrão de Banco de Dados Relacional.</p>
                <p class="Texto">SQL apresenta uma série de comandos que permitem a definição dos dados, chamada de <span class="code-color"><strong>DDL (Data Definition Language)</strong></span>, composta, entre outros, pelos comandos <span class="code-color"><strong>Create</strong></span>, que são destinados à criação do Banco de Dados, das Tabelas que o compõem, e também das relações existentes entre as tabelas. Como exemplo de comandos da classe DDL, temos os comandos <span class="code-color"><strong>Create</strong></span>, <span class="code-color"><strong>Alter</strong></span> e <span class="code-color"><strong>Drop</strong></span>.</p>
                <p class="Texto">Os comandos da série DML (Data Manipulation Language) são destinados a consultas, inserções, exclusões e alterações em um ou mais registros de uma ou mais tabelas de maneira simultânea. Como exemplo de comandos da classe DML, temos os comandos <span class="code-color"><strong>SELECT</strong></span>, <span class="code-color"><strong>Insert</strong></span>, <span class="code-color"><strong>Update</strong></span> e <span class="code-color"><strong>Delete</strong></span>. Uma subclasse de comandos DML, a <span class="code-color"><strong>DCL (Data Control Language)</strong></span>, dispõe de comandos de controle como <span class="code-color"><strong>Grant</strong></span> e <span class="code-color"><strong>Revoke</strong></span>.</p>
                <p class="Texto">A Linguagem SQL tem como grandes virtudes sua capacidade de gerenciar índices sem a necessidade de controle individualizado de índice corrente, algo muito comum nas linguagens de manipulação de dados do tipo <span class="code-color"><strong>“registro a registro”</strong></span> (dos modelos Hierárquico e Redes).</p>
                <p class="Texto">Outra característica muito importante disponível em <span class="code-color"><strong>SQL</strong></span> é sua capacidade de construção de visões, que são modos de visualizar os dados na forma de listagens, independentemente das tabelas e da organização lógica dos dados.</p>
                <p class="Texto">Outra característica interessante na linguagem SQL é a capacidade que se tem de cancelar uma série de atualizações ou de gravá-las depois de iniciar uma sequência de atualizações. Os comandos <span class="code-color"><strong>Commit</strong></span> e <span class="code-color"><strong>Rollback</strong></span> são responsáveis por estas facilidades.</p>
                <p class="Texto">Existem inúmeras versões de SQL e sua versão original foi desenvolvida no Laboratório de Pesquisa da IBM. Essa linguagem, originalmente chamada Sequel, foi implementada como parte do projeto System R no início dos anos 70. A linguagem evoluiu desde então, e seu nome foi mudado para SQL (Structured Query Language).</p>
                <p class="Texto">Em 1986, o <span class="code-color"><em>Americam National Standard Institute (ANSI)</em></span> publicou um padrão SQL, enquanto a IBM publicou o seu próprio SQL standard, o <span class="code-color"><em>Systems Aplication Arquitecture Database Interface (SAASQL)</em></span> em 1987.</p>
                <p class="Texto">Em 1989, tanto ANSI quanto ISO publicaram padrões substitutos (ANSI X3.135-1989 e ISO/IEC 9075:1989) que aumentaram a linguagem e acrescentaram uma capacidade opcional de integridade referencial, permitindo que projetistas de bancos de dados pudessem criar relacionamentos entre dados em diferentes partes do banco de dados. A versão em uso do padrão ANSI / ISO SQL é o padrão SQL-92 (ANSI X3.135-1992), mas algumas aplicações atuais dão suporte apenas ao padrão SQL-89.</p>
                <p class="Texto">Desde 1993 há trabalhos sendo desenvolvidos para atualizar o padrão de modo para que este atenda às características das últimas versões de bancos de dados relacionais lançadas no mercado. A principal inovação da nova versão (chamada provisoriamente de SQL3) é o suporte à orientação a objetos.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/history-of-sql.png" alt="Evolução do SQL">
                </div>
                <br>
                <p class="Texto">Algumas das características da linguagem SQL são:</p>
                <ul class="Texto">
                    <li>Permite trabalhar com várias tabelas;</li>
                    <li>Permite utilizar o resultado de uma instrução SQL em outra instrução SQL (sub-queries);</li>
                    <li>Não necessita especificar o método de acesso ao dado;</li>
                    <li>É uma linguagem para vários usuários como: administardores do sistema, administradores do banco de dados<(DBA), programadores de aplicações, pessoal da agência e de tomada de decisão.</li>
                    <li>É de fácil aprendizado;</li>
                    <li>Permite a utilização dentro de uma linguagem procedural como C, COBOL, FORTRAN, Pascal e PL/I - SQL embutida.</li>
                </ul>
                <p class="Subtopico"><strong>A estrutura básica de uma expressão SQL</strong></p>
                <p class="Texto">A estrutura básica de uma expressão SQL consiste em três cláusulas: <span class="code-color"><strong>SELECT</strong></span>, <span class="code-color"><strong>FROM</strong></span> e <span class="code-color"><strong>WHERE</strong></span>.</p>
                <ul class="Texto">
                    <li>A cláusula <span class="code-color"><strong>SELECT</strong></span> corresponde à operação projeção da álgebra relacional. É usada para listar os atributos desejados no resultado de uma consulta.</li>
                    <li>A cláusula <span class="code-color"><strong>FROM</strong></span> corresponde à operação produto cartesiano da álgebra relacional. Ela lista as relações a serem examinadas na avaliação da expressão</li>
                    <li>A cláusula <span class="code-color"><strong>WHERE</strong></span> corresponde ao predicado de seleção da álgebra relacional. Consiste em um predicado envolvendo atributos de relações que aparecem na cláusula <span class="code-color"><strong>FROM</strong></span>.</li>
                </ul>
                <p class="Texto">Uma típica consulta SQL segue a seguinte ordem:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> a1, a2, ..., an ß; 3ª
<span class="code-color"><strong>FROM</strong></span> T1, T2, ..., Tm ß 1ª
<span class="code-color"><strong>WHERE</strong></span> P ß 2ª
                    </code></pre>
                </div>
                <p class="Texto">Cada <span class="code-color"><em>ai</em></span> representa um atributo, cada <span class="code-color"><em>Ti</em></span> é uma relação, e cada <span class="code-color"><em>P</em></span> é um predicado. Esta consulta é equivalente à expressão da seguinte álgebra relacional.</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> a1, a2, ..., an ß; 3ª
<span class="code-color"><strong>FROM</strong></span> T1, T2, ..., Tm ß 1ª
<span class="code-color"><strong>WHERE</strong></span> P ß 2ª
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O SQL forma o produto cartesiano das relações chamadas na cláusula FROM, executa uma seleção da álgebra relacional usando o predicado da cláusula WHERE e, então, projeta o resultado para os atributos da cláusula SELECT. Na prática, o SQL pode converter esta expressão em uma forma equivalente que pode ser processada mais eficientemente Por exemplo:</p>
                <p class="Texto">No esquema BANCO, encontre os nomes de todos os clientes de 'Vitória'.</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> cliente_nome
<span class="code-color"><strong>FROM</strong></span> CLIENTE
<span class="code-color"><strong>WHERE</strong></span> cidade = 'Vitória';
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Encontre os nomes de todos os clientes.</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> cliente_nome
<span class="code-color"><strong>FROM</strong></span> CLIENTE
                    </code></pre>
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Ex: </strong></span>No esquema EMPRESA, selecionar o nome e o RG dos funcionários que trabalham no departamento número 2 na tabela EMPREGADO.</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> nome, rg
<span class="code-color"><strong>FROM</strong></span> EMPREGADOS
<span class="code-color"><strong>WHERE</strong></span> depto = 2;
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A partir disso, obtém-se o seguinte resultado:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>RG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fernando</td>
                            <td>20202020</td>
                        </tr>
                        <tr>
                            <td>Ricardo</td>
                            <td>30303030</td>
                        </tr>
                        <tr>
                            <td>Jorge</td>
                            <td>40404040/td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto">A consulta acima é originária da seguinte função em álgebra relacional:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <pre><code class="Texto">
<span class="code-color"><strong>π</strong></span> nome, rg (</span><span class="code-color"><strong>σ</strong></span>depto = 2 (EMPREGADOS));
                </code></pre>
                </div>
                <br>
                <p class="Texto">Em SQL também é permitido o uso de condições múltiplas. Veja o exemplo a seguir:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> nome, rg
<span class="code-color"><strong>FROM</strong></span> EMPREGADOS
<span class="code-color"><strong>WHERE</strong></span> depto = 2; <span class="code-color"><strong>AND</strong></span> salario >  2500.00;
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O que fornece o seguinte resultado:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>RG</th>
                            <th>SALÁRIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jorge</td>
                            <td>40404040</td>
                            <td>R$4.200,00</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto">Originário da seguinte função em álgebra relacional:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>π</strong></span> nome, rg(<strong>σ</strong>depto = 2  .and. salario > 3500.00(EMPREGADOS));
                </code></pre>
                </div>
                <br>
                <p class="Texto">O operador <span class="code-color"><strong>*</strong></span> dentro do especificador <span class="code-color"><strong>SELECT</strong></span> seleciona todos os atributos de uma tabela, enquanto que a exclusão do especificador <span class="code-color"><strong>WHERE</strong></span> faz com que todas as tuplas de uma tabela sejam selecionadas. Desta forma, a expressão:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> empregado;
                </code></pre>
                </div>
                <br>
                <p class="Texto">Gerando o seguinte resultado:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>RG</th>
                            <th>CPF</th>
                            <th>DEPARTAMENTO</th>
                            <th>RG SUPERVISOR</th>
                            <th>SALÁRIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João Luiz</td>
                            <td>10101010</td>
                            <td>11111111</td>
                            <td>1</td>
                            <td>NULO</td>
                            <td>R$ 3000,00</td>
                        </tr>
                        <tr>
                            <td>Fernando</td>
                            <td>20202020</td>
                            <td>22222222</td>
                            <td>2</td>
                            <td>10101010</td>
                            <td>R$ 2500,00</td>
                        </tr>
                        <tr>
                            <td>Ricardo</td>
                            <td>30303030</td>
                            <td>33333333</td>
                            <td>2</td>
                            <td>10101010</td>
                            <td>R$ 2300,00</td>
                        </tr>
                        <tr>
                            <td>Jorge</td>
                            <td>40404040</td>
                            <td>44444444</td>
                            <td>2</td>
                            <td>20202020</td>
                            <td>R$ 4.200,00</td>
                        </tr>
                        <tr>
                            <td>Renato</td>
                            <td>50505050</td>
                            <td>55555555</td>
                            <td>3</td>
                            <td>20202020</td>
                            <td>R$ 1300,00</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Subtopico"><strong> Cláusulas DISTINCT e all</strong></p>
                <p class="Texto">Diferentemente de álgebra relacional, a operação SELECT em SQL permite a geração de tuplas duplicadas como resultado de uma expressão. Para evitar isto, devemos utilizar a cláusula <span class="code-color"><strong>distinc</strong></span>.</p>
                <br>
                <div class="code-wrapper">
                    <div class="container-code">
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                            </button>
                            <pre><code>
                <span class="code-color"><strong>SELECT</strong></span> depto
                <span class="code-color"><strong>FROM</strong></span> EMPREGADO;
                            </code></pre>
                        </div>
                        
                        <div class="text-section">
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                                </button>
                                <pre><code>
                <span class="code-color"><strong>SELECT DISTINCT</strong></span> depto
                <span class="code-color"><strong>FROM</strong></span> EMPREGADO;
                                </code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                            <br>
                            <table border="1" cellpadding="10" class="table"> 
                                <thead>
                                    <tr>
                                        <th>DEPTO</th>
                                        <th>DEPTO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <p class="Texto">A cláusula <span class="code-color"><strong>All</strong></span> é o <span class="code-color"><em>default</em></span> para o <span class="code-color"><strong>SELECT</strong></span>, ou seja, <span class="code-color"><strong>SELECT All</strong></span> indica para obter todas as tuplas. Logo, esta cláusula não precisa ser colocada (a não ser, talvez, por motivos de documentação).</p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre os nomes e as cidades de clientes que possuam empréstimos em alguma agência.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span>  cliente_nome, cidade
<span class="code-color"><strong>FROM</strong></span> Cliente, Emprestimo
<span class="code-color"><strong>WHERE</strong></span> Cliente.cliente_cod=Emprestimo.cliente_cod;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">O SQL inclui os conectores <span class="code-color"><strong>AND</strong></span>, <span class="code-color"><strong>OR</strong></span> e <span class="code-color"><strong>NOT</strong></span>; caracteres especiais: <span class="code-color"><strong>(</strong></span>, <span class="code-color"><strong>)</strong></span>, <span class="code-color"><strong>.</strong></span>, <span class="code-color"><strong>:</strong></span>, <span class="code-color"><strong>_</strong></span>, <span class="code-color"><strong>%</strong></span>, <span class="code-color"><strong><</strong></span>, <span class="code-color"><strong>></strong></span>, <span class="code-color"><strong><=</strong></span>, <span class="code-color"><strong>>=</strong></span>, <span class="code-color"><strong>=</strong></span>, <span class="code-color"><strong><></strong></span>, <span class="code-color"><strong>+</strong></span>, <span class="code-color"><strong>-</strong></span>, <span class="code-color"><strong>*</strong></span> e <span class="code-color"><strong>/</strong></span>; e o operador para comparação: <span class="code-color"><strong>BETWEEN</strong></span>, como mostra o exemplo a seguir.</p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Selecionar todas as contas que possuam saldo entre 10000 e 20000.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> conta_numero
<span class="code-color"><strong>FROM</strong></span> <span class="code-color"> CONTA</span>
<span class="code-color"><strong>WHERE</strong></span> saldo >= 10000 and saldo <= 20000
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Que equivale à consulta:</p>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> conta_numero
<span class="code-color"><strong>FROM</strong></span> CONTA
<span class="code-color"><strong>WHERE</strong></span>
  saldo  <span class="code-color"><strong>BETWEEN</strong></span> 1000 <span class="code-color"><strong>AND</strong></span> 2000
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">A SQL inclui também um operador para comparações de cadeias de caracteres, o <span class="code-color"><strong>LIKE</strong></span>. Ele é usado em conjunto com dois caracteres especiais:</p>
                            <ul class="Texto">
                                <li>Por cento (%): substitui qualquer subcadeia de caracteres.</li>
                                <li>Sublinhado ( _ ): substitui qualquer caractere.</li>
                            </ul>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre os nomes de todos os clientes cujas ruas finalizam com a subcadeia 'na', seguido de um caractere.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span>  cliente_nome
<span class="code-color"><strong>FROM</strong></span> CLIENTE
<span class="code-color"><strong>WHERE</strong></span> rua <span class="code-color"><strong>LIKE</strong></span> 1000 <span class="code-color"><strong>'%na%'</strong></span>
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre os nomes de todos os clientes cujas ruas finalizam com a subcadeia 'na', seguido de um caractere.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong> cliente_nome
<span class="code-color"><strong>FROM</strong></span> CLIENTE
<span class="code-color"><strong>WHERE</strong></span> rua <span class="code-color"><strong>LIKE</strong></span> 1000  <span class="code-color"><strong>'%na_'</strong></span>
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Para que o padrão possa incluir os caracteres especiais (isto é, % , _ , etc...), a SQL permite a especificação de um <span class="code-color"><strong>caractere de escape</strong></span>. O caractere de escape é usado imediatamente antes de um caractere especial para indicar que o caractere especial deverá ser tratado como um caractere normal. Define-se o caractere de escape para uma comparação <span class="code-color"><strong>LIKE</strong></span> usando a palavra-chave <span class="code-color"><strong>ESCAPE</strong></span>. Para ilustrar, considere os padrões seguintes que utilizam uma barra invertida como caractere de escape.</p>
                            <ul class="Texto">
                                <li><span class="code-color"><strong>LIKE 'ab\%cd%' ESCAPE '\'</strong></span> substitui todas as cadeias começando com 'ab%cd';</li>
                                <li><span class="code-color"><strong>LIKE 'ab\_cd%' ESCAPE '\'</strong></span> substitui todas as cadeias começando com 'ab_cd'.</li>
                            </ul>
                            <p class="Texto">A procura por não-substituições, em vez de substituições, é realizada por meio do operador <span class="code-color"><strong>NOT LIKE</strong></span>.</p>
                            <p class="Subtopico"><strong>Variáveis tuplas (renomeação)</strong></p>
                            <p class="Texto">Uma tupla em um banco de dados relacional refere-se a uma única linha de uma tabela. Cada tupla é composta por um conjunto de atributos (colunas), onde cada atributo possui um valor específico. Por exemplo, em uma tabela de clientes, uma tupla pode ser uma linha representando um cliente específico com atributos como nome, RG e endereço.</p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong>Vamos supor que temos um esquema chamado <span class="code-color"><em>EMPRESA</em></span>, que contém duas tabelas: <span class="code-color"><em>departamento_projeto</em></span> e <span class="code-color"><em>projeto</em></span>. Queremos encontrar o número do departamento que controla projetos localizados em "Rio Claro".</span></p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> <span class="code-color"><strong>FROM</strong></span><span class="code-color">departamento_projeto</span>
<span class="code-color"><strong>AS</strong></span> <span class="code-color"> t1, projeto</span> <span class="code-color"><strong>AS</strong></span> <span class="code-color"> t2</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">t1.numero_projeto = t2.numero;
</span>
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Na expressão SQL acima, <span class="code-color">t1</span> e <span class="code-color">t2</span> são chamados <span class="code-color"><em>“alias”</em></span> (apelidos) e representam a mesma tabela a qual estão referenciando. Um <span class="code-color"><em>alias</em></span> é muito importante quando há redundância nos nomes das colunas de duas ou mais tabelas que estão envolvidas em uma expressão. Em vez de utilizar o “alias”, é possível utilizar o nome da tabela, mas isto pode ficar cansativo em consultas muito complexas, além do fato que essa ação impossibilitaria a utilização da mesma tabela mais de uma vez em uma expressão SQL. A palavra chave <span class="code-color"><strong>AS</strong></span> é opcional.</p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>No esquema EMPRESA, selecione o nome e o RG de todos os funcionários que são supervisores.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> <span class="code-color">e1.nome</span>
<span class="code-color"><strong>AS</strong></span> <span class="code-color">“Nome do Supervisor”, e1.rg</span> <span class="code-color"><strong>AS</strong></span> <span class="code-color"> “RG do Supervisor”</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">empregado e1, empregado e2</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color"> e1.rg = e2.rg_supervisor;</span>
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">O que gera o seguinte resultado:</p>
                            <br>
                            <table border="1" cellpadding="10" class="table"> 
                                <thead>
                                    <tr>
                                        <th>NOME DO SUPERVISOR</th>
                                        <th>RG DO SUPERVISOR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>João Luiz</td>
                                        <td>10101010</td>
                                    </tr>
                                    <tr>
                                        <td>Fernando</td>
                                        <td>20202020</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <p class="Texto"><strong>Observação: </strong> a consulta acima é decorrente da seguinte expressão em álgebra relacional:</p>
                            <br>
                            <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>π</strong></span> <span class="code-color">  nome, rg (EMPREGADOS |X| tg_t1 = rg_supervisor_t2 EMPREGADOS)
                </code></pre>
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre o nome e a cidade de todos os clientes com uma conta em qualquer agência.</p>
                <br>
                <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">C.cliente_nome, C.cidade</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE C, CONTA S</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">  C.cliente_cod = S.cliente_cod;</span>
                                </code></pre>
                            </div>
                            <br>
                            <p class="Subtopico"><strong>Operações de conjuntos</strong></p>
                            <p class="Texto">A SQL inclui as operações de conjunto union, intersect e minus que operam em relações e correspondem às operações , e – da álgebra relacional.</p>
                            <p class="Texto">Uma vez que as relações são conjuntos, na união destas, as linhas duplicadas são eliminadas. Para que uma operação R ∪ S, R ∩ S ou R - S seja válida, necessita-se que duas condições sejam cumpridas:</p>
                            <ul class="Texto">
                                <li>As relações R e S devem ter o mesmo número de atributos;</li>
                                <li>Os domínios do i-ésimo atributo de R e do i-ésimo atributo de S devem ser os mesmos.</li>
                            </ul>
                            <p class="Texto"><span class="code-color"><strong>Obs.: </strong></span> nem todos os interpretadores SQL suportam todas as operações de conjunto. Embora a operação <span class="code-color"><strong>UNION</strong></span> seja relativamente comum, são raros os que suportam <span class="code-color"><strong>INTERSECT</strong></span> ou <span class="code-color"><strong>MINUS</strong></span>.</p>
                            <p class="Subtopico"><strong>Ex.: </strong>Mostrar o nome dos clientes que possuem conta, empréstimo ou ambos na agência de código '051':</p>
                            <p class="Subsubtopico"><strong><span class="code-color">Empréstimo na agência '051':</span></strong></p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE C, EMPRESTIMO</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= EMPRESTIMO.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color">CLIENTE.agencia_cod = '051'</span>;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Subsubtopico"><strong><span class="code-color">Conta na agência ‘ 051’:
                            </span></strong></p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE, consulta</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= CONTA.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color"> CONTA.agencia_cod = ‘051’</span>;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Subsubtopico"><strong><span class="code-color">Fazendo a união dos dois:
                            </span></strong></p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
(<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE C, EMPRESTIMO</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= EMPRESTIMO.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color">CLIENTE.agencia_cod = '051'</span>)

<span class="code-color"><strong>UNION</strong></span>
(<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE, CONTA</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= CONTA.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color"> CONTA.agencia_cod = '051'</span>);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Achar todos os clientes que possuam uma conta e um empréstimo na agência de código '051'.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
(<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE, EMPRESTIMO</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= EMPRESTIMO.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color">agencia_cod = '051'</span>)

<span class="code-color"><strong>INTERSECT</strong></span>
(<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE, CONTA</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= CONTA.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color"> CONTA.agencia_cod = '051'</span>);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Achar todos os clientes que possuem uma conta mas não possuem um empréstimo na agência de código ‘ 051’.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
(<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE, EMPRESTIMO</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= EMPRESTIMO.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color">agencia_cod = '051'</span>)

<span class="code-color"><strong>MINUS</strong></span>
(<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE, CONTA</span>
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color">CLIENTE.cliente_cod= CONTA.cliente_cod</span> <span class="code-color"><strong>AND</strong></span>  <span class="code-color"> CONTA.agencia_cod = '051'</span>);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Subtopico"><strong>Ordenando a exibição de tuplas</strong></p>
                            <p class="Texto">A cláusula <span class="code-color"><strong>ORDER BY</strong></span> ocasiona o aparecimento de tuplas no resultado de uma consulta em uma ordem determinada. Para listar em ordem alfabética todos os clientes do banco, faz-se:</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span> <span class="code-color">cliente_nome</span>
<span class="code-color"><strong>FROM</strong></span> <span class="code-color">CLIENTE</span>
<span class="code-color"><strong>ORDER BY</strong></span> <span class="code-color">cliente_nome</span>;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Como padrão, SQL lista tuplas na ordem crescente. Para especificar a ordem de classificação, podemos especificar <span class="code-color"><strong>ASC</strong></span> para ordem crescente e <span class="code-color"><strong>DESC</strong></span> para decrescente. Podemos ordenar uma relação por mais de um elemento. Como se segue:</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> CLIENTE
<span class="code-color"><strong>ORDER BY</strong></span> quantia <span class="code-color"><strong>DESC</strong></span>, agencia_cod <span class="code-color"><strong>ASC</strong></span>;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Para colocar as tuplas (linhas) em ordem, é realizada uma operação de <span class="code-color"><strong>sort</strong></span>. Esta operação é relativamente custosa e, portanto, só deve ser usada quando realmente for necessário.</p>
                            <p class="Subtopico"><strong>Membros de conjuntos</strong></p>
                            <p class="Texto">Um membro de conjunto (ou elemento de conjunto) refere-se a um dos itens ou elementos que compõem um conjunto. Em matemática e teoria dos conjuntos, um conjunto é uma coleção de objetos distintos, que podem ser números, letras, ou até mesmo outras coleções de conjuntos.</p>
                            <p class="Texto">No contexto de bancos de dados, um conjunto pode se referir ao resultado de uma consulta (query), e os registros retornados (linhas) seriam os membros desse conjunto resultante.</p>
                            <p class="Texto">O conectivo <span class="code-color"><strong>IN</strong></span> testa os membros de conjunto, onde o conjunto é uma coleção de valores produzidos por uma cláusula <span class="code-color"><strong>SELECT</strong></span>. Da mesma forma, pode ser usada a expressão <span class="code-color"><strong>NOT IN</strong></span>. Por exemplo, ao selecionar todas as agências com o código 1,2 ou 3:</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> AGENCIA
<span class="code-color"><strong>WHERE</strong></span> agencia_cod <span class="code-color"><strong>IN</strong></span> (1,2,3);
                                </code></pre> 
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Selecione o nome de todos os funcionários que trabalham em projetos localizados em Rio Claro.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> e1.nome, e1.rg, e1.depto
<span class="code-color"><strong>FROM</strong></span> empregado e1, empregado_projeto e2
<span class="code-color"><strong>WHERE</strong></span> e1.rg = e2.rg_empregado <span class="code-color"><strong>AND</strong></span> e2.numero_projeto <span class="code-color"><strong>IN</strong></span> (<span class="code-color"><strong>SELECT</strong></span> numero
<span class="code-color"><strong>FROM</strong></span> projeto
<span class="code-color"><strong>WHERE</strong></span> localizacao = 'Rio Claro');
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre todos os clientes que possuem uma conta e um empréstimo na agência 'Princesa Isabel'.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> distinct cliente_nome<br>
<span class="code-color"><strong>FROM</strong></span> CLIENTE<br>
<span class="code-color"><strong>WHERE</strong></span> CLIENTE.cliente_cod <span class="code-color"><strong>IN</strong></span> (<span class="code-color"><strong>SELECT</strong></span> cliente_cod<br>
<span class="code-color"><strong>FROM</strong></span> CONTA, AGENCIA<br>
<span class="code-color"><strong>WHERE</strong></span> CONTA.agencia_cod = AGENCIA.agencia_cod <span class="code-color"><strong>AND</strong></span> agencia_nome = ‘Princesa Isabel’)<br>
<span class="code-color"><strong>AND</strong></span> CLIENTE.cliente_cod <span class="code-color"><strong>IN</strong></span> (<span class="code-color"><strong>SELECT</strong></span> cliente_cod<br>
<span class="code-color"><strong>FROM</strong></span> EMPRESTIMO, AGENCIA<br>
<span class="code-color"><strong>WHERE</strong></span> EMPRESTIMO.agencia_cod = AGENCIA.agencia_cod <span class="code-color"><strong>AND</strong></span> agencia_nome = ‘Princesa Isabel’);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Encontre todas as agências que possuem ativos maiores que alguma agência de Vitória.
                            </strong></span></p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> distinct t.agencia_nome<br>
<span class="code-color"><strong>FROM</strong></span> AGENCIA t, AGENCIA s<br>
<span class="code-color"><strong>WHERE</strong></span> t.ativos > s.ativos <span class="code-color"><strong>AND</strong></span> s.cidade = 'Vitória';
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Obs.: </strong></span>Uma vez que isto é uma comparação “maior que”, não se pode escrever a expressão usando a construção in.</p>
                            <p class="Texto">A SQL oferece o operador <span class="code-color"><strong>some</strong></span> (equivalente ao operador <span class="code-color"><strong>any</strong></span>), usado para construir a consulta anterior. São aceitos pela linguagem: <span class="code-color"><strong>&gt;some</strong></span>, <span class="code-color"><strong>&lt;some</strong></span>, <span class="code-color"><strong>&gt;=some</strong></span>, <span class="code-color"><strong>&lt;=some</strong></span>, <span class="code-color"><strong>=some</strong></span>.
                            </p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> agencia_nome
<span class="code-color"><strong>FROM</strong></span> AGENCIA
<span class="code-color"><strong>WHERE</strong></span> ativos <span class="code-color"><strong>&gt;</strong></span> <span class="code-color"><strong>some</strong></span>
(<span class="code-color"><strong>SELECT</strong></span> ativos
 <span class="code-color"><strong>FROM</strong></span> AGENCIA
 <span class="code-color"><strong>WHERE</strong></span> agencia_cidade = 'Vitória')
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Como o operador <span class="code-color"><strong>some</strong></span>, o operador <span class="code-color"><strong>all</strong></span> pode ser usado como: 
                            <span class="code-color"><strong>&gt;</strong></span> <span class="code-color"><strong>all</strong></span>, <span class="code-color"><strong>&lt;</strong></span> <span class="code-color"><strong>all</strong></span>, <span class="code-color"><strong>&gt;=</strong></span> <span class="code-color"><strong>all</strong></span>, <span class="code-color"><strong>&lt;=</strong></span> <span class="code-color"><strong>all</strong></span>, <span class="code-color"><strong>=</strong></span> <span class="code-color"><strong>all</strong></span> e <span class="code-color"><strong>&lt;&gt;</strong></span> <span class="code-color"><strong>all</strong></span>. A construção <span class="code-color"><strong>&gt;</strong></span> <span class="code-color"><strong>all</strong></span> corresponde à frase “maior que todos”.
                            </p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontrar as agências que possuem ativos maiores do que todas as agências de Vitória.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> agencia_nome
<span class="code-color"><strong>FROM</strong></span> AGENCIA
<span class="code-color"><strong>WHERE</strong></span> ativos <span class="code-color"><strong>&gt;</strong></span> <span class="code-color"><strong>ALL</strong></span>
(
    <span class="code-color"><strong>SELECT</strong></span> ativos
    <span class="code-color"><strong>FROM</strong></span> AGENCIA
    <span class="code-color"><strong>WHERE</strong></span> agencia_cidade ='Vitória'
);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">A SQL possui um recurso para testar se uma subconsulta tem alguma tupla em seus resultados. A construção <span class="code-color"><strong>EXISTS</strong></span> retorna <span class="code-color"><strong>TRUE</strong></span> se o argumento subconsulta está não-vazio. Pode-se usar também a expressão <span class="code-color"><strong>NOT EXISTS</strong></span>.</p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>No esquema EMPRESA, liste os nomes dos gerentes que têm ao menos um dependente.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> <span class="code-color">nome</span>
<span class="code-color"><strong>FROM</strong></span> EMPREGADO
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color"><strong>EXISTS</strong></span>
(
    <span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> DEPENDENTES
    <span class="code-color"><strong>WHERE</strong></span> DEPENDENTES.rg_responsavel = EMPREGADO.rg
)
<span class="code-color"><strong>AND EXISTS</strong></span>
(
    <span class="code-color"><strong>SELECT</strong></span> * <span class="code-color"><strong>FROM</strong></span> DEPARTAMENTO
    <span class="code-color"><strong>WHERE</strong></span> DEPARTAMENTO.rg_gerente = EMPREGADO.rg
);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Usando a construção exists, encontre todos os clientes que possuem uma conta e um empréstimo na agência 'Princesa Isabel'.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> cliente_nome
<span class="code-color"><strong>FROM</strong></span> CLIENTE
<span class="code-color"><strong>WHERE</strong></span> <span class="code-color"><strong>EXISTS</strong></span>  
(  
    <span class="code-color"><strong>SELECT</strong></span> *  
    <span class="code-color"><strong>FROM</strong></span> CONTA, AGENCIA  
    <span class="code-color"><strong>WHERE</strong></span> CONTA.cliente_cod = CLIENTE.cliente_cod  
    <span class="code-color"><strong>AND</strong></span> AGENCIA.agencia_cod = CONTA.agencia_cod
    <span class="code-color"><strong>AND</strong></span> agencia_nome = 'Princesa Isabel'
)  
<span class="code-color"><strong>AND EXISTS</strong></span>  
(  
    <span class="code-color"><strong>SELECT</strong></span> *  
    <span class="code-color"><strong>FROM</strong></span> EMPRESTIMO, AGENCIA  
    <span class="code-color"><strong>WHERE</strong></span> EMPRESTIMO.cliente_cod = CLIENTE.cliente_cod  
    <span class="code-color"><strong>AND</strong></span> AGENCIA.agencia_cod = EMPRESTIMO.agencia_cod  
    <span class="code-color"><strong>AND</strong></span> agencia_nome = 'Princesa Isabel'  
);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Subtopico"><strong>Funções agregadas</strong></p>
                            <p class="Texto">A SQL oferece a habilidade para computar funções em grupos de tuplas usando a cláusula <span class="code-color"><strong>GROUP BY</strong></span>. O(s) atributo(s) dados na cláusula group by são usados para formar grupos. Tuplas com o mesmo valor em todos os atributos na cláusula group by são colocadas em um grupo. A SQL inclui funções para computar:</p>
                            <p class="Texto">Média: <span class="code-color"><strong>avg</strong></span></p> // mínimo: <span class="code-color"><strong>min</strong></span> //  máximo: <span class="code-color"><strong>max</strong></span> // soma: <span class="code-color"><strong>sum</strong></span>  // contagem: <span class="code-color"><strong>count</strong></span></p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre o saldo médio de conta em cada agência.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> agencia_nome, <span class="code-color"><strong>AVG</strong></span>(saldo)  
<span class="code-color"><strong>FROM</strong></span> CONTA, AGENCIA
<span class="code-color"><strong>WHERE</strong></span> CONTA.agencia_cod = AGENCIA.agencia_cod  
<span class="code-color"><strong>GROUP BY</strong></span> agencia_nome;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Encontre o número de depositantes de cada agência.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> agencia_nome, <span class="code-color"><strong>COUNT</strong></span>(<span class="code-color"><strong>DISTINCT</strong></span> cliente_nome)  
<span class="code-color"><strong>FROM</strong></span> CONTA, AGENCIA
<span class="code-color"><strong>WHERE</strong></span> CONTA.agencia_cod = AGENCIA.agencia_cod  
<span class="code-color"><strong>GROUP BY</strong></span> agencia_nome;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Obs.: </strong></span> Note que nesta última consulta é importante a existência da cláusula distinct, pois um cliente pode ter mais de uma conta em uma agência, mas esse dado só deverá ser contado uma única vez.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> agencia_nome, <span class="code-color"><strong>MAX</strong></span>(saldo)  
<span class="code-color"><strong>FROM</strong></span> CONTA, AGENCIA  
<span class="code-color"><strong>WHERE</strong></span> CONTA.agencia_cod = AGENCIA.agencias_cod
<span class="code-color"><strong>GROUP BY</strong></span> agencia_nome;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Às vezes, é útil definir uma condição que se aplique a grupos em vez de tuplas. Por exemplo, poderiase ter interesse apenas em agências nas quais a média dos saldos é maior que 1200. Nesse caso, essa condição seria aplicada a cada grupo e não a tuplas simples, e seria definida por meio da cláusula <span class="code-color"><strong>HAVING</strong></span>. Expressa-se essa consulta em SQL assim:</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> <span class="code-color">agencia_nome</span>, <span class="code-color"><strong>AVG</strong></span>(saldo)  
<span class="code-color"><strong>FROM</strong></span> CONTA, AGENCIA  
<span class="code-color"><strong>WHERE</strong></span> CONTA.agencia_cod = AGENCIA.agencias_cod;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Às vezes, deseja-se tratar a relação inteira como um grupo simples. Nesses casos, não se utiliza a
                            cláusula <span class="code-color"><strong>GROUP BY</strong></span>.</p>
                            <br>
                            <p class="Subtopico"><strong><span class="code-color"><strong>Ex.: </strong></span></strong>Encontre a média de saldos de todas as contas.
                            </p>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> <span class="code-color"><strong>AVG</strong></span>(saldo)  
<span class="code-color"><strong>FROM</strong></span> CONTA;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Subtopico"><strong>Modificando o banco de dados</strong></p>
                            <p class="Texto">A modificação no banco de dados refere-se a operações que alteram a estrutura ou o conteúdo de um banco de dados. Isso é fundamental para manter a integridade e a relevância dos dados ao longo do tempo. As principais operações de modificação incluem:</p>
                            <ul class="Texto">
                                <li><span class="code-color"><strong>Remoção: </strong></span>Pode-se remover somente tuplas inteiras, não se pode remover valores apenas em atributos particulares.</li>
                            </ul>
                            <p class="Texto"><strong>Sintaxe:</strong></p>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>DELETE FROM</strong></span> &lt;tabela&gt;
<span class="code-color"><strong>WHERE</strong></span> &lt;condição&gt;;
                                </code></pre>
                            </div>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>DELETE FROM</strong></span> &lt;tabela&gt;
<span class="code-color"><strong>WHERE</strong></span> &lt;condição&gt;;
                                </code></pre>
                            </div>
                            <br>
            <p class="Texto">
            Note que o comando <span class="code-color"><strong>DELETE</strong></span> opera em uma única relação. A cláusula <span class="code-color"><strong>WHERE</strong></span> pode conter predicados tão complexos quanto aqueles encontrados em um comando <span class="code-color"><strong>SELECT</strong></span>, permitindo a exclusão de registros de acordo com critérios específicos.
            </p>
            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Remover todas as tuplas de empréstimo.
            </p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>DELETE</strong></span> EMPRESTIMO;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Remover todos os registros da conta de 'João'.
            </p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>DELETE</strong></span> CONTA
<span class="code-color"><strong>WHERE</strong></span> cliente_cod <span class="code-color"><strong>IN</strong></span>
(
    <span class="code-color"><strong>SELECT</strong></span> cliente_cod
    <span class="code-color"><strong>FROM</strong></span> CLIENTE
    <span class="code-color"><strong>WHERE</strong></span> cliente_nome = 'João'
);
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Remover todos os empréstimos com números entre 1300 e 1500.
            </p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>DELETE</strong></span> EMPRESTIMO
<span class="code-color"><strong>WHERE</strong></span> emprestimo_numero <span class="code-color"><strong>BETWEEN</strong></span> 1300 <span class="code-color"><strong>AND</strong></span> 1500;
                </code></pre>
            </div>
            <br>
            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Remover todas as contas de agências localizadas em 'Vitória'.
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>DELETE</strong></span> CONTA
<span class="code-color"><strong>WHERE</strong></span> agencia_cod <span class="code-color"><strong>IN</strong></span> 
(<span class="code-color"><strong>SELECT</strong></span> 
agencia_cod 
<span class="code-color"><strong>FROM</strong></span> AGENCIA
<span class="code-color"><strong>WHERE</strong></span> agencia_cidade = 'Vitoria');
                </code></pre>
            </div>
            <br>
            <ul class="Texto">
                <li><span class="code-color"><strong>Inserção: </strong></span>Para inserir um dado em uma relação ou especificar uma tupla para ser inserida, escreve-se uma consulta cujo resultado seja um conjunto de tuplas a serem inseridas. Os valores dos atributos para tuplas inseridas precisam necessariamente ser membros do mesmo domínio do atributo.</li>
            </ul>
            <p class="Texto"><strong>Sintaxe: </strong></p>
            <br>
            <div class="typewriter-small" id="copycode">
                                <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> class="code-color">&lt;tabela&gt; (&lt;coluna1&gt;, &lt;coluna2&gt;, &lt;coluna3&gt;, ...)
<span class="code-color"><strong>VALUES</strong></span> (&lt;valor1&gt, &lt;valor2&gt, &lt;valor&gt;, ...);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Inserir uma nova conta para João (código = 1), número 9000, na agência de código=2 cujo valor seja 1200.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> CONTA 
<span class="code-color"><strong>VALUES</strong></span> (2, 9000, 1, 1200);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Na inserção acima, é considerada a ordem na qual os atributos correspondentes estão listados no esquema relação. Caso o usuário não se lembre da ordem desses atributos, pode fazer o mesmo comando da seguinte forma:</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> CONTA
(agencia_cod, conta_numero, cliente_cod, saldo) 
<span class="code-color"><strong>VALUES</strong></span> (2, 9000, 1, 1200);
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Pode-se querer também inserir tuplas baseadas no resultado de uma consulta.</p>
                            <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>Inserir todos os clientes que possuam empréstimos na agência 'Princesa Isabel' na relação CONTA com um saldo de 200. O número da nova conta é o número do empréstimo * 10000.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> CONTA
(agencia_cod, conta_numero, cliente_cod, saldo) 
<span class="code-color"><strong>SELECT</strong></span> 
AGENCIA.agencia_cod, emprestimo_numero * 10000, 
cliente_cod, 200
<span class="code-color"><strong>FROM</strong></span> EMPRESTIMO, <span class="code-color">AGENCIA</span> 
<span class="code-color"><strong>WHERE</strong></span> EMPRESTIMO.agencia_cod = AGENCIA.agencia_cod
<span class="code-color"><strong>AND</strong></span> agencia_nome = 'Princesa Isabel';
                                </code></pre>
                            </div>
                            <br>
                            <ul class="Texto">
                                <li><span class="code-color"><strong>Atualizações</strong></span>Em certas situações, pode-se desejar mudar um valor em uma tupla sem mudar todos os valores na tupla. Para isso, o comando <span class="code-color"><strong>UPDATE</strong></span> pode ser usado.</li>
                            </ul>
                            <p class="Texto"><strong>Sintaxe: </strong></p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>UPDATE</strong></span> &lt;tabela&gt;
<span class="code-color"><strong>SET</strong></span> &lt;coluna&gt; = &lt;novo_valor&gt; 
<span class="code-color"><strong>WHERE</strong></span> &lt;condição&gt;;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Suponha que esteja sendo feito o pagamento de juros e que em todos os saldos sejam acrescentados
                            5%. Escreve-se:</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>UPDATE</strong></span> CONTA
<span class="code-color"><strong>SET</strong></span> saldo = saldo * 1.05;
                                </code></pre>
                            </div>
                            <br>
                            <p class="Texto">Suponha que todas as contas com saldo superiores a 10000 recebam aumento de 6% e as demais de 5%.</p>
                            <br>
                            <div class="typewriter-small" id="copycode">
                                <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                                <pre><code class="Texto">
<span class="code-color"><strong>UPDATE</strong></span> CONTA
<span class="code-color"><strong>SET</strong></span> saldo = saldo * <span class="code-color">1.06</span>
<span class="code-color"><strong>WHERE</strong></span> saldo &gt; 10000;

<span class="code-color"><strong>UPDATE</strong></span> CONTA
<span class="code-color"><strong>SET</strong></span> saldo = saldo * 1.05
<span class="code-color"><strong>WHERE</strong></span> saldo &lt;= 10000;
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto">A cláusula <span class="code-color"><strong>WHERE</strong></span> pode conter uma série de comandos select aninhados. Considere, por exemplo,
                                que todas as contas de pessoas que possuem empréstimos no banco terão acréscimo de 1%.</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>UPDATE</strong></span> CONTA
<span class="code-color"><strong>SET</strong></span> <span class="code-color">saldo</span> = saldo * 1.01
<span class="code-color"><strong>WHERE</strong></span> cliente_cod <span class="code-color"><strong>IN</strong></span> 
(<span class="code-color"><strong>SELECT</strong></span> cliente_cod
<span class="code-color"><strong>FROM</strong>EMPRESTIMO);
    </code></pre>
                                    </code></pre>
                                </div>
                                <p class="Texto"><span class="code-color"><strong>Ex.:</strong></span>No esquema EMPRESA, atualize o salário de todos os empregados que trabalham no departamento 2 para R$ 3.000,00.</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>UPDATE</strong></span> empregado
<span class="code-color"><strong>SET</strong></span> salario = <span class="code-color">3000</span>
<span class="code-color"><strong>WHERE</strong></span> depto = 2;
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto"><span class="code-color"><strong>Ex.: </strong></span>No esquema BANCO, atualize o valor dos ativos. Os ativos são os valores dos saldos das contas da
                                agência.</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>UPDATE</strong></span> agencia</span>
<span class="code-color"><strong>SET</strong></span> ativos
    (
        <span class="code-color"><strong>SELECT</strong></span> sum(saldo)
        <span class="code-color"><strong>FROM</strong></span> conta
        <span class="code-color"><strong>WHERE</strong></span> conta.agencia_cod = agencia.agencia_cod
    );
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Subtopico"><strong>Valores nulos</strong></p>
                                <p class="Texto">É possível dar valores a apenas alguns atributos do esquema para tuplas inseridas em uma dada
                                relação. Os atributos restantes são designados como nulos. Considere a requisição:</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> <span class="code-color">CLIENTE</span> (cliente_cod, cliente_nome, rua, cidade)
<span class="code-color"><strong>VALUES</strong></span> (123,'Andrea', null, null);
                                    </code></pre>
                                </div>
                                <p class="Texto">A palavra chave null pode ser usada em um predicado para testar se um valor é nulo. Assim, para achar todos os clientes que possuem valores nulos para rua, escrevemos:</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
<span class="code-color"><strong>SELECT DISTINCT</strong></span> cliente_nome
<span class="code-color"><strong>FROM</strong></span> CLIENTE
<span class="code-color"><strong>WHERE</strong></span> rua <span class="code-color"><strong>IS NULL</strong></span>;
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto">O predicado <span class="code-color"><strong>IS NOT NULL</strong></span> testa a ausência de um valor nulo.</p>
                                <br>
                                <div class="typewriter-small" id="copycode">
                                    <button class="copy-btn" onclick="copyCode()">
                                        <i class="fas fa-copy"></i> Copiar
                                    </button>
                                    <pre><code class="Texto">
                                <span class="code-color"><strong>CREATE TABLE</strong></span> cliente
                                (<br>
                                    cliente_cod <span class="code-color"><strong>INTEGER NOT NULL</strong></span>,<br>
                                    cliente_nome <span class="code-color"><strong>CHAR(30)</strong></span>,<br>
                                    rua <span class="code-color"><strong>CHAR(30)</strong></span>,<br>
                                    cidade <span class="code-color"><strong>CHAR(30)</strong></span>,<br>
                                    <span class="code-color"><strong>PRIMARY KEY</strong></span> (cliente_cod)<br>
                                );<br><br>

                                <span class="code-color"><strong>CREATE TABLE</strong></span> agencia
                                (<br>
                                    agencia_cod <span class="code-color"><strong>INTEGER NOT NULL</strong></span>,<br>
                                    agencia_nome <span class="code-color"><strong>CHAR(30)</strong></span>,<br>
                                    agencia_cidade <span class="code-color"><strong>CHAR(30)</strong></span>,<br>
                                    fundos <span class="code-color"><strong>DECIMAL(7,2)</strong></span>,<br>
                                    <span class="code-color"><strong>PRIMARY KEY</strong></span> (agencia_cod),<br>
                                    <span class="code-color"><strong>CHECK</strong></span> (fundos >= 0)<br>
                                );<br><br>

                                <span class="code-color"><strong>CREATE TABLE</strong></span> conta
                                (<br>
                                    agencia_cod <span class="code-color"><strong>INT</strong></span>,<br>
                                    conta_numero <span class="code-color"><strong>CHAR(10) NOT NULL</strong></span>,<br>
                                    cliente_cod <span class="code-color"><strong>INT NOT NULL</strong></span>,<br>
                                    saldo <span class="code-color"><strong>DECIMAL(7,2)</strong></span>,<br>
                                    <span class="code-color"><strong>PRIMARY KEY</strong></span> (cliente_cod, conta_numero),<br>
                                    <span class="code-color"><strong>FOREIGN KEY</strong></span> (cliente_cod) <span class="code-color"><strong>REFERENCES</strong></span> cliente(cliente_cod),<br>
                                    <span class="code-color"><strong>FOREIGN KEY</strong></span> (agencia_cod) <span class="code-color"><strong>REFERENCES</strong></span> agencia(agencia_cod),<br>
                                    <span class="code-color"><strong>CHECK</strong></span> (saldo >= 0)<br>
                                );
                                    </code></pre>
                                </div>
                                <br>
                                <p class="Texto">Note que os atributos chave precisam ter a especificação .</p>

            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>