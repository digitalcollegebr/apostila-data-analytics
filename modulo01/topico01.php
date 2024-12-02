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
                <p class="Titulo">Introdução à banco de dados</p>
                <p class="Subtopico"><strong>O que é?</strong></p>
                <p class="Texto">Um sistema que possui vários programas aplicativos acessando dados armazenados em arquivos convencionais apresenta uma série de problemas:</p>
                <ul class="Texto">
                    <li><strong>Redundância e inconsistência dos
                    dados</strong>– a redundância ocorre quando a mesma informação é mantida em diferentes arquivos, ou seja, quando há duplicação da informação. Isso pode gerar inconsistência dos dados, uma vez que podemos ter cópias diferentes do mesmo dado.</li>
                    <li><strong>Dificuldade de acesso aos dados</strong>– o ambiente convencional de processamento de arquivos não permite que dados necessários sejam recuperados de maneira conveniente e eficiente.</li>
                    <li><strong>Isolamento dos dados</strong>– uma vez que os dados estão espalhados em diversos arquivos e podem ter formatos diferentes, é difícil escrever programas para recuperar os dados adequados.</li>
                    <li><strong>Anomalias de acesso concorrente</strong>– o acesso de vários usuários simultaneamente pode gerar dados inconsistentes no sistema.</li>
                    <li><strong>Problemas com segurança</strong>– nem todo usuário deve ter acesso a todos os dados do sistema. Se programas aplicativos forem adicionados ao sistema de maneira arbitrária, é difícil assegurar restrições de
                    segurança.</li>
                    <li><strong>Problemas de integridade</strong>– a integridade dos dados e do sistema é mantida pelos programas aplicativos, tornando-se, dessa forma, mais vulnerável a falhas. O problema torna-se mais complicado quando as restrições envolvem itens de dados e arquivos diferentes.</li>
                </ul>
                <p class="Texto">Esse grande número de problemas promoveu o desenvolvimento dos Sistemas Gerenciadores de Banco de Dados, que elimina todas essas complicações de forma eficiente.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/sql.jpg" alt="Banco de dados">
                </div>
                <br>
                <p class="Subtopico"><strong>Abstração de dados</strong></p>
                <p class="Texto">O grande objetivo de um sistema de banco de dados é prover aos usuários uma visão abstrata dos dados, isto é, os detalhes de como os dados são armazenados e mantidos são escondidos do usuário. Não interessa ao usuário as complexas estruturas de armazenamento usadas para garantir a eficiência de acesso aos dados. Uma vez que muitos dos usuários de bancos de dados são leigos em computação, toda esta complexidade é escondida deles por meio de vários níveis de abstração que simplificam a interação do usuário com o sistema. Assim, os seguintes níveis são usados:</p>
                <ul class="Texto">
                    <li><strong>Nível físico</strong>– é o nível mais baixo de abstração e descreve <span class="code-color"><strong>COMO</strong></span> os dados estão realmente armazenados. Num nível físico, complexas estruturas de dados de baixo nível são descritas em detalhe.</li>
                    <li><strong>Nível conceitual</strong>– este nível descreve <span class="code-color"><strong>QUAIS</strong></span> dados estão armazenados de fato no database e as relações que existem entre eles. O nível conceitual é usado por administradores do banco de dados, que podem decidir quais informações devem ser mantidas nesse banco.</li>
                    <li><strong>Nível de visões</strong>– a maioria dos usuários do sistema de banco de dados não está interessada em todas as informações existentes. Cada grupo de usuários deve enxergar somente os dados que lhe dizem respeito. Assim, cada grupo tem uma visão do database. O nível mais alto de abstração é composto de visões que <span class="code-color"><strong>CADA</strong></span> grupo de usuários tem.</li>
                </ul>
                <br>
                <p class="Subtopico"><strong>Modelos de Dados</strong></p>
                <p class="Texto">Entende-se por <span class="code-color"><strong>Modelo de Dados</strong></span> uma coleção de ferramentas conceituais para descrição, relacionamentos e semântica de dados, e restrições de consistência.</p>
                <p class="Texto">Há vários modelos de dados que podem ser divididos em três grupos:</p>
                <ul class="Texto"  style="list-style: decimal;">

                    <li>Modelos lógicos baseados em objetos;</li>
                    <li>Modelos lógicos baseados em registros;</li>
                    <li>Modelos físicos de dados.</li>
                </ul>
                <p class="Subsubtopico"><strong>1. Modelos lógicos baseados em objetos</strong></p>
                <p class="Texto">Os Modelos Lógicos Baseados em Objetos são usados para descrever dados nos níveis conceitual e de visões em sistemas de banco de dados. Eles fornecem uma forma flexível de estruturar informações, permitindo que os dados sejam organizados de maneira mais eficiente e compreensível. Além disso, esses modelos possibilitam a especificação clara de restrições sobre os dados, garantindo que as regras e integridade sejam mantidas dentro do sistema.</p>
                <p class="Texto">Existem diversos tipos de modelos lógicos baseados em objetos, sendo alguns deles:</p>
                <ul class="Texto">
                    <li><span class="code-color"><strong>O modelo de entidade-relacionamento (E-R):</strong></span> O modelo entidade-relacionamento é baseado numa percepção de um mundo real, que consiste em uma coleção de objetos básicos chamados <span class="code-color"><strong>entidades</strong></span> e em <span class="code-color"><strong>relacionamentos</strong></span> entre esses objetos. Alguns conceitos desse modelo são: <span class="code-color"><em>entidades, relacionamentos, atributos, cardinalidade</em></span>.</li>
                    <p class="Texto">A estrutura lógica geral de um banco de dados pode ser expressa graficamente por um <span class="code-color"><em>diagrama E-R</em></span>.</p>
                    <li><span class="code-color"><strong>O modelo orientado a objetos:</strong></span> Os objetos do mundo real são agrupados em classes, de acordo com suas características comuns, e cada instância é um objeto daquela classe. Alguns conceitos desse modelo são: <span class="code-color"><em>objetos, classes, variáveis de instância, métodos, troca de mensagens, hierarquia de classes</em></span>.</li>
                </ul>
                <p class="Subsubtopico"><strong>2. Modelos lógicos baseados em registro</strong></p>
                <p class="Texto">Os bancos de dados são estruturados em registros de formato fixo de diversos tipos, onde cada tipo de registro define um número fixo de campos, ou atributos. Esses campos, em geral, têm tamanhos fixos, facilitando o acesso e a manipulação das informações. Contudo, essa estrutura não inclui um mecanismo para a representação direta do código dentro do banco de dados. Essa rigidez, embora eficiente, pode limitar a flexibilidade na adaptação a novas necessidades de dados e na representação de informações mais dinâmicas.</p>
                <p class="Texto">Existem diversos tipos de modelos lógicos baseados em objetos, sendo alguns deles:</p>
                <ul class="Subsubtopico">
                    <li><strong><span class="code-color">Modelo relacional:</span></strong> Representa dados e relacionamentos entre dados por um conjunto de tabelas, cada uma tendo
                    um número de colunas com nomes únicos.</li>
                    <li><strong><span class="code-color">Modelo de redes:</span></strong> Os dados no modelo rede são representados por coleções de registros, e os relacionamentos entre os dados são representados por ligações, que podem ser encaradas como ponteiros. Os registros no banco de dados são organizados como coleções de grafos arbitrários.</li>
                    <li><strong><span class="code-color">Modelo hierárquico:</span></strong> É similar ao modelo de redes, pois os dados e relacionamentos são representados por registros e ligações, respectivamente. A diferença é que os registros são organizados como coleções de árvores em vez de grafos arbitrários.</li>
                </ul>
                <p class="Subsubtopico"><strong>3. Modelos físicos de dados</strong></p>
                <p class="Texto">Os modelos físicos são usados para descrever dados no nível mais baixo.
                Dois dos mais conhecidos são:</p>
                <ul class="Subsubtopico">
                    <li><strong><span class="code-color">Modelo Unificados(Unifying Model)</span></strong></li>
                    <li><strong><span class="code-color">Estrutura de memória(Frame Memory)</span></strong></li>
                </ul>
                <br>
                <p class="Subtopico"><strong>Instâncias e esquemas</strong></p>
                <p class="Texto">Uma <span class="code-color"><strong>instância do banco de dados</strong></span> é uma coleção de informações armazenadas em um determinado
                momento.</p>
                <p class="Texto">O <span class="code-color"><strong>esquema do banco de dados</strong></span> é o projeto geral do banco de dados, ou seja, a definição de todas as estruturas que compõem o database.</p>
                <p class="Texto"><span class="code-color"><strong>Ex: </strong></span>Instâncias e esquemas em banco de dados são similares aos conceitos de variáveis e seus valores
                de linguagens de programação.</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <div class="area-copy">
                        <div class="languajes">
                        <i class="bi bi-database"></i>SQL</div>
                        <div class="button-code">
                        <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                        </div>
                    </div>
                    <pre><code class="Texto">
<span class="comment"> /*esquema*\
</span></span>
<span class="dark_blue_code">var</span> <span class="code-color"><strong>x</strong></span></span> : <span class="code-color"><strong>interger</strong></span>;</code></pre>
                </div>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <div class="area-copy">
                        <div class="languajes">
                        <i class="bi bi-database"></i>SQL</div>
                        <div class="button-code">
                        <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                        </div>
                    </div>
                    <pre><code class="Texto">
<span class="comment"> /*instância (valor da variável em um dado instante)*\
</span>
<span class="code-color"><strong>x</strong></span></span> := <span class="code-color"><strong>10</strong></span>;</code></pre>
                </div>
                <br>
                <p class="Subtopico"><strong>Independência dos dados</strong></p>
                <p class="Texto">O termo independência dos dados diz respeito à habilidade de modificar a definição de um esquema em um nível sem afetar a definição do esquema num nível mais alto.</p>
                <p class="Texto">A independência dos dados pode ser de dois tipos:</p>
                <ul class="Texto">
                    <li class="code-color"><strong>Indepência física dos dados</strong></li>
                    <p class="Texto">Habilidade de modificar o esquema físico sem modificar os programas aplicativos.</p>
                    <li class="code-color"><strong>Independência lógica dos dados</strong></li>
                    <p class="Texto">Habilidade de modificar o esquema lógico sem modificar os programas aplicativos.</p>
                    <p class="Texto"><span class="code-color"><strong>Obs.:</strong></span> A independência lógica é mais difícil de ser alcançada, uma vez que os programas são muito dependentes da estrutura lógica.</p>
                </ul>
                <p class="Subtopico"><strong>Linguagem de definição de dados (DDL)</strong></p>
                <p class="Texto">Entende-se por <span class="code-color"><strong>Linguagem de Definição de Dados (DDL – Data Definition Language)</strong></span> o conjunto de comandos que permitem definir esquemas do banco de dados, logo, esta linguagem vai atuar na própria estrutura desse banco.</p>
                <p class="Texto">Entre as operações de definição de dados estão:</p>
                <ul class="Texto">
                    <li>Criar tabelas, índices e visões;</li>
                    <li>Alterar a estrutura de uma tabela;</li>
                    <li>Remover tabela, índices e visões.</li>
                </ul>
                <p class="Texto">Um tipo especial de <span class="code-color"><strong>DDL</strong></span> é a <span class="code-color"><strong>Linguagem de Armazenagem e Definição de Dado</strong></span>s que permite a definição da estrutura de armazenamento e dos métodos de acesso do banco de dados.</p>
                <p class="Subtopico"><strong>Linguagem de manipulação de dados (DML)</strong></p>
                <p class="Texto">Entende-se por <span class="code-color"><strong>Linguagem de Manipulação de Dados (DML – Data Manipulation Language)</strong></span> o conjunto de comandos que permitem acessar e manipular os dados, logo, esta linguagem vai atuar sobre os dados propriamente ditos armazenados no banco de dados.</p>
                <p class="Texto">Manipular significa:</p>
                <ul class="Texto">
                    <li>Buscar informações;</li>
                    <li>Inserir informações;</li>
                    <li>Eliminar informações;</li>
                    <li>Modificar informações.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/crud.png" alt="CRUD">
                </div>
                <br>
                <p class="Texto">Há dois tipos de linguagens de manipulação de dados:</p>
                <ul class="Subsubtopico">
                    <li>DMLs procedurais – o usuário especifica qual dado quer e diz como obtê-lo.</li>
                    <li>DMLs não-procedurais – o usuário especifica qual dado quer, sem dizer como obtê-lo.</li>
                    <li>Mais fáceis de aprender e usar</li>
                </ul>
                <p class="Texto">Uma <span class="code-color"><strong>consulta</strong></span> é um comando requisitando a busca de uma informação. A <span class="code-color"><strong>linguagem de consulta</strong></span> é a parte da DML que envolve a busca de informações.</p>
                <p class="Subtopico"><strong>Gerenciador de banco de dados</strong></p>
                <p class="Texto">Os SGBDs trabalham com grandes quantidades de informação armazenada, na área dos GB (gigabyte) e TB (terabyte).</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Unidade</th>
                            <th>Equivalência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1 GB</td>
                            <td>≈ 1.000 MB ≈ 1.000.000 KB ≈ 1.000.000.000 bytes (1 bilhão de bytes)</td>
                        </tr>
                        <tr>
                            <td>1 TB</td>
                            <td>≈ 1 trilhão de bytes</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto">Esta grande quantidade de informação deve ser acessada de maneira eficiente (desempenho), para isso faz-se uso de complexas estruturas de dados. Esses dados são armazenados nos discos rígidos e, como a transferência de dados entre a memória principal e os discos é bastante lenta em comparação com a velocidade da CPU, o sistema de banco de dados deve estruturar esses dados de forma a minimizar o movimento deles entre os discos e a memória principal.</p>
                <p class="Texto">Deve-se ter em mente que o fator principal na satisfação de um usuário de banco de dados, bem como de qualquer sistema computacional, é seu <span class="code-color"><strong>desempenho</strong></span>. De nada adianta uma bela interface se o sistema é lento.</p>
                <p class="Texto">O desempenho de um sistema de banco de dados depende de dois fatores:</p>
                <ul class="Texto">
                    <li>Da eficiência das estruturas de dados usadas para representar esses dados;</li>
                    <li>De quão eficientemente o sistema é capaz de operar essas estruturas de dados.</li>
                </ul>
                <p class="Texto">O Gerenciador de Banco de Dados é um módulo de programa que faz parte do SGDB e que provê a interface entre os dados de baixo nível armazenados num banco de dados e os programas de aplicação e as solicitações submetidas ao sistema.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/sgb.png" alt="">
                </div>
                <br>
                <p class="Texto">O gerenciador de banco de dados é responsável pelas seguintes tarefas:</p>
                <ul class="Texto" style="list-style: decimal;">
                    <li>Interação com o gerenciador de arquivos do sistema operacional (armazenamento dos dados, busca dos dados, atualização dos dados);</li>
                    <li>Cumprimento da intergridade;</li>
                    <li>Cumprimento da segurança (nem todo usuário precisa ver todo o banco de dados);</li>
                    <li>Cópias de reserva (backup) e recuperação;</li>
                    <li>Controle de concorrência.</li>
                </ul>
                <p class="Texto">É importante notar que o porte do sistema de banco de dados depende do porte da empresa ou da aplicação. Sistemas de bancos de dados projetados para uso em pequenos computadores pessoais podem não ter todos os recursos descritos anteriormente.</p>
                <p class="Subtopico"><strong>Administrador do Banco de Dados (DBA)</strong></p>
                <p class="Texto">Uma das principais razões para usar um banco de dados é a necessidade de ter controle central
                desses dados e dos programas de acesso a eles.</p>
                <p class="Texto">O <span class="code-color"><strong>Administrador de Banco de Dados (DBA – DataBase Administrator)</strong></span> é a pessoa que centraliza o controle sobre os registros e programas de acesso num sistema de banco de dados. As funções do administrador do banco de dados incluem:</p>
                <ul class="Texto">
                    <li>Definição de esquemas (usando DDL);</li>
                    <li>Definição de estruturas de armazenamento e métodos de acesso;</li>
                    <li>Modificação de esquemas e da organização do armazenamento físico;</li>
                    <li>Concessão de autorização para acesso aos dados;</li>
                    <li>Especificação de restrições de integridade.</li>
                </ul>
                <p class="Subtopico"><strong>Usuários de banco de dados</strong></p>
                <p class="Texto">Há, basicamente, quatro tipos de usuários de um sistema de banco de dados:</p>
                <p class="Texto"><strong>1. Programadores de aplicativos (ou de aplicação) – </strong>profissionais que escrevem programas em uma linguagem de programação qualquer, contendo, além dos comandos próprios da linguagem de programação, outros comandos de acesso ao banco de dados.</p>
                <p class="Texto">Essas linguagens de programação são chamadas de <span class="code-color"><em>linguagens hospedeiras</em></span> ou <span class="code-color"><em>linguagens host</em></span> (host languages) por hospedarem comandos de banco de dados estranhos ao seu ambiente.</p>
                <p class="Texto">Os comandos de banco de dados estranhos ao ambiente da linguagem host são denominados
                chamadas à <span class="code-color"><strong>DML embutidas</strong></span>, por estarem embutidas (inseridas) na linguagem host.</p>
                <p class="Texto">Uma chamada a um comando da DML embutida se faz usando um caractere (ou comando) especial, que varia de sistema para sistema. No Oracle, por exemplo, temos o comando <span class="code-color"><strong>EXEC SQL</strong></span>, que precede qualquer comando de acesso ao banco de dados. Veja o trecho de programa abaixo contendo uma chamada à DML embutida numa linguagem de programação tipo Pascal:</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <div class="area-copy">
                        <div class="languajes">
                        <i class="bi bi-database"></i>SQL</div>
                        <div class="button-code">
                        <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                        </div>
                    </div>
                    <pre><code class="Texto">
<span class="comment"> /*Comando da linguagem hospedeira*\
</span></span>
<span class="blue-code"><strong>a</strong></span></span> <span class="code-color"><strong>:=</strong></span> <span class="blue-code"><strong>b</strong></span> <span class="code-color"><strong>+</strong></span> <span class="blue-code"><strong>c</strong></span>;</code></pre>
                </div>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <div class="area-copy">
                        <div class="languajes">
                        <i class="bi bi-database"></i>SQL</div>
                        <div class="button-code">
                        <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                        </div>
                    </div>
                    <pre><code class="Texto">
<span class="comment"> /*Chamada à DML embutida*\
</span>
<span class="orange-code"><strong>EXEC SQL</strong></span> <span class="dark_blue_code"><strong>SELECT</strong> <span class="green-code"><strong>*</strong></span> <span class="dark_blue_code"><strong>FROM</strong></span> <span class="blue-code"><strong>TABELA1</strong></span>;</code></pre>
                </div>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <div class="area-copy">
                        <div class="languajes">
                        <i class="bi bi-database"></i>SQL</div>
                        <div class="button-code">
                        <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                        </div>
                    </div>
                    <pre><code class="Texto">
<span class="comment"> /*Outro comando da linguagem hospedeira*\
</span>
<span class="pink-code"><strong>while</strong></span> (<span class="blue-code">a</span> <span class="code-color"><</span> <span class="blue-code">d</span>) <span class="pink-code"><strong>do</strong></span> <span class="blue-code"><strong>a</strong></span> <span class="code-color"><strong>:=</strong></span> <span class="blue-code"><strong>a</strong></span> <span class="code-color"><strong>+</strong></span> <span class="green-code"><strong>1</strong></span></code></pre>
                </div>
                <br>
                <p class="Texto">O processo de compilação procede-se da seguinte maneira:</p>
                <ul class="Texto">
                    <li>O programa com chamadas à DML embutidas passa pelo pré-compilador da DML, que transforma as chamadas à DML embutidas em chamadas de procedimentos normais na linguagem hospedeira;</li>
                    <li>O programa pré-compilado, resultado da operação anterior, vai para o compilador da linguagem hospedeira, que efetua a compilação de forma normal, usando as bibliotecas do sistema de banco de dados e gerando o código-objeto final.</li>
                </ul>
                <p class="Texto">Existem, atualmente, as chamadas linguagens de 4a geração, que combinam as estruturas de controle das linguagens de programação com as estruturas de controle para manipulação de objetos do banco de dados. Tais linguagens são comumente usadas para criação de formulários (telas) e relatórios.</p>
                <p class="Texto"><strong>2. Usuários de alto nível –</strong> não escrevem programas, mas escrevem consultas em linguagens de consulta ao banco de dados.</p>
                <p class="Texto"><strong>3. Usuários especializados –</strong> escrevem programas especializados (CAD, CAM, sistemas especialistas, sistemas de dados complexos).</p>
                <p class="Texto"><strong>4. Usuários ingênuos ou leigos - </strong>utilizam os programas aplicativos.</p>
                <p class="Texto">Um sistema de gerenciamento de banco de dados é composto das seguintes partes:</p>
                <p class="Subsubtopico"><strong class="code-color">1. Gerenciador de arquivos</strong></p>
                <ul class="Texto" id="custom-bullet">
                    <li>Gerencia a alocação do espaço de armazenamento.</li>
                    <li>Gerencia as estruturas de dados usadas para representar os dados armazenados no disco.</li>
                </ul>
                <p class="Subsubtopico"><strong class="code-color">2. Gerenciador de banco de dados</strong></p>
                <ul class="Texto" id="custom-bullet">
                    <li>Fornece a interface entre dados de baixo nível (em disco) e programas aplicativos, bem como
                    consultas de usuários.</li>
                </ul>
                <p class="Subsubtopico"><strong class="code-color">3. Processador de consultas</strong></p>
                <ul class="Texto" id="custom-bullet">
                    <li>Traduz comandos numa linguagem de consulta para instruções que o gerenciador de banco de dados entende.</li>
                    <li>É responsável pela otimização de consultas.</li>
                </ul>
                <p class="Subsubtopico"><strong class="code-color">4. Pré-compilador da DML</strong></p>
                <ul class="Texto" id="custom-bullet">
                    <li>Traduz comandos da DML embutidos para chamadas de procedimento normais na linguagem
                    hospedeira (linguagem “host”).</li>
                    <li>Interage com o processador de consultas.</li>
                </ul>
                <p class="Subsubtopico"><strong class="code-color">5. Compilador da DDL</strong></p>
                <ul class="Texto" id="custom-bullet">
                    <li>Converte comandos da DDL em tabelas contendo metadados.</li>
                </ul>
                <p class="Texto">Além desses componentes, algumas estruturas de dados são usadas para implementação do sistema
                físico:</p>
                <ul class="Texto">
                    <li><strong>Arquivo de dados - </strong>armazenam o banco de dados propriamente dito.</li>
                    <li><strong>Dicionário de dados - </strong>armazena os metadados, isto é, os dados sobre os dados.</li>
                    <li><strong>Índices - </strong>estrutura que proporciona acesso rápido aos dados.</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>