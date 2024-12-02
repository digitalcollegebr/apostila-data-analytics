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
                <p class="Titulo">Arquitetura Data Warehouse</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">A escolha da arquitetura do Data Warehouse é uma decisão gerencial do projeto e está relacionada com a capacidade da infraestrutura disponível. A decisão da arquitetura pode trazer enormes impactos ao projeto, uma decisão errada pode acarretar o tempo de execução do projeto, com isso causando a insatisfação aos envolvidos.</p>
                <p class="Texto">Existem 10 fatores que afetam a decisão relativa à escolha da arquitetura, descritos a seguir:</p>
                <ul class="Texto">
                    <li>Interdependência de informações entre as unidades da organização;</li>
                    <li>Demanda de informações da alta administração;</li>
                    <li>Nível de urgência de um Data Warehouse;</li>
                    <li>Natureza das tarefas do usuário final;</li>
                    <li>Limitação de recursos;</li>
                    <li>Visão estratégica do Data Warehouse antes da implementação;</li>
                    <li>Compatibilidade com os sistemas existentes;</li>
                    <li>Capacidade interna da equipe de Tecnologia da Informação (TI);</li>
                    <li>Questões de natureza técnica;</li>
                    <li>Fatores sociais / políticos.</li>
                </ul>
                <p class="Texto">Os componentes de um Data Warehouse são: extração, armazenamento e apresentação. A arquitetura de um Data Warehouse determina como se dá a organização de seus componentes. A arquitetura demonstrada na Figura 2 compreende a camada dos dados operacionais que serão acessados pela camada de extração de dados, em seguida os dados serão armazenados no Data Warehouse. A camada de acesso à informação possibilita a extração das informações do Data Warehouse utilizando um conjunto de ferramentas.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/arquiteturaWare.png" alt="Arquitetura Data Warehouse">
                </div>
                <br>
                <p class="Texto">Na figura acima, é demonstrada a implementação top-down que foi introduzida por Inmon (1997) e iniciou-se com a extração, transformação e integração das informações dos sistemas operativos e dados externos. Em seguida, os dados e metadados são enviados a um Data Warehouse centralizado que reúne todos os dados relativos à organização. Nessa implementação os dados irão ficar disponíveis nos Data Marts, que são um pequeno conjunto de um Data Warehouse organizado por assunto. Para <strong>Machado (2013)</strong>, as vantagens da implementação top-down são:</p>
                <ul class="Texto">
                    <li>Herança de arquitetura: todos os Data Marts originados de um Data Warehouse utilizam a arquitetura e os dados desse Data Warehouse, permitindo uma fácil manutenção;</li>
                    <li>Visão de empreendimento: o Data Warehouse concentra todos os negócios da empresa, sendo possível extrair dele níveis menores de informação;</li>
                    <li>Repositório de metadados centralizado e simples: o Data Warehouse provê um repositório de metadados central para o sistema. Essa centralização permite manutenções mais simples do que aquelas realizadas em múltiplos repositórios;</li>
                    <li>Controle e centralização de regras: a arquitetura top-down garante a existência de um único conjunto de aplicações para extração, limpeza e integração dos dados, além de processos centralizados de manutenção e monitoração.</li>
                </ul>
                <br>
                <p class="Texto">As desvantagens da implementação top-down segundo <strong>Machado (2013)</strong> são:</p>
                <ul class="Texto">
                    <li>Implementação muito longa: em média, 15 ou mais meses para que a primeira área de assunto entre em produção, dificultando a garantia de apoio político e orçamentário;</li>
                    <li>Alta taxa de risco: não existem garantias para o investimento nesse tipo de ambiente;</li>
                    <li>Heranças de cruzamentos funcionais: é necessária uma equipe de desenvolvedores e usuários finais altamente capacitada para avaliar as informações e consultas que garantam à empresa habilidades para sobreviver;</li>
                    <li>Expectativas relacionadas ao ambiente: a demora do projeto e a falta de retorno podem induzir a expectativa dos usuários.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/topDown.png" alt="Implementação Top-Down">
                </div>
                <br>
                <p class="Texto">A implementação bottom-up permite que o planejamento e o desenho do Data Mart possa ser realizado antes da criação do Data Warehouse. Essa implementação caracteriza-se pelo armazenamento e extração a partir da criação incremental de vários Data Marts independentes, com metadados e área de extração individualizadas e, no conjunto, formando as fontes de dados do Data Warehouse. A área de extração é composta por áreas de estágio e mecanismos de extração distintos para cada Data Mart. A arquitetura é ilustrada na Figura 4. As vantagens da implementação bottom-up são:</p>
                <ul class="Texto">
                    <li>Implementação rápida: a construção dos Data Marts é altamente direcionada, permitindo um rápido desenvolvimento;</li>
                    <li>Retorno rápido: a arquitetura baseada em Data Marts com incremento demonstra rapidamente seu valor;</li>
                    <li>Manutenção do enfoque da equipe: a elaboração de Data Marts incrementais permite que os principais negócios sejam criados inicialmente;</li>
                    <li>Herança incremental: os Data Marts incrementais obrigam a entrega de recursos passo a passo.</li>
                </ul>
                <p class="Texto">As desvantagens da implementação bottom-up são:</p>
                <ul class="Texto">
                    <li>Perigo de legado: essas soluções podem não considerar a arquitetura global, transformando-se assim em legados.</li>
                    <li>Desafio de possuir a visão de empreendimento: é necessário que se mantenha a visão do negócio como um todo.</li>
                    <li>Administrar e coordenar múltiplas equipes e iniciativas: desenvolvimento de múltiplos Data Marts em paralelo.</li>
                    <li>A maldição do sucesso: os usuários com seus Data Marts solicitam novas atualizações cada vez mais, isso traz constantes desafios para a equipe de desenvolvimento.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/bottomUp.png" alt="Implementação Bottom-Up">
                </div>
                <br>
                <p class="Texto">A implementação BUS foi introduzida por Kimball (1998) e tem o propósito de integrar as implementações Top-Down e Bottom-Up. Nessa implementação efetua-se a criação do modelo de Data Warehouse em sua forma macro, em seguida os Data Marts são planejados e integrados através dos metadados e de tabelas de fatos e dimensões padronizadas. Antes de iniciar a construção do Data Warehouse, são definidos os Data Marts a serem construídos e as dimensões e fatos comuns. Cada Data Mart é construído respeitando a pré-estruturação dos fatos e dimensões comuns. O Data Warehouse é composto pela união dos Data Marts, sendo coordenado pelos metadados. A área de extração é composta por uma única área de estágio e por um único mecanismo de extração. Algumas variações desta arquitetura são discutidas em Firestone (2000), sendo que as mesmas variações apresentam áreas de extração independentes e alternativas ao esquema de metadados originalmente proposto.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/bus.png" alt="Implementação BUS">
                </div>
                <br>
                <p class="Texto">A granularidade representa o nível de detalhamento dos dados contidos no Data Warehouse e a definição do nível de granularidade constitui um dos passos mais importantes da construção de um Data Warehouse. Quanto menor o nível de detalhes, mais alto é o nível de granularidade. A importância do nível de granularidade em um Data Warehouse determina o volume de dados armazenados e o tipo de consulta que pode ser atendido e deve ser balanceado de acordo com o detalhamento requerido nas consultas. Machado (2013) defende que em quase todas as situações, um menor nível de granularidade para suas dimensões deve ser usado, para atender o maior número de consultas possíveis, inclusive as não esperadas. Ele também argumenta que o menor nível de granularidade torna o Data Warehouse muito mais resistente a novos elementos de dados. No entanto, essa adoção de uma granularidade muito baixa, além de aumentar o volume de dados armazenados no Data Warehouse, pode também elevar a complexidade das consultas finais se uma parte das consultas pretendidas envolve operações mais complexas do que simples agregações. A escolha inadequada pode comprometer todo o restante do projeto.</p>
                <p class="Texto">Se tomarmos como base o modelo estrela, a definição da granularidade corresponde ao menor grão que será armazenado na tabela de fatos e a granularidade da tabela de dimensões não poderá ser menor do que a de fatos, no entanto, se essa for maior, não irá acarretar qualquer contradição lógica, mas poderá causar a perda de informações úteis para o usuário.</p>
                <br>
                <p class="Subtopico"><strong>Modelo Multidimensional</strong></p>
                <p class="Texto">A modelagem multidimensional é uma técnica de concepção e visualização de um modelo de dados de forma intuitiva. É utilizada especialmente para sumarizar e reestruturar dados e apresentá-los em visões que suportem a análise dos valores desses dados.</p>
                <p class="Texto">A modelagem multidimensional tem sido amplamente adotada como a técnica de representação de um Data Warehouse, a sua simplicidade é a chave fundamental que possibilita aos utilizadores o entendimento fácil dos dados apresentados.</p>
                <p class="Texto">A modelagem multidimensional é uma das mais importantes diferenças entre o modelo operacional e um Data Warehouse, os modelos entidade-relacionamentos estão sendo utilizados na maioria dos ambientes operacionais. Já os Data Warehouse utilizam a modelagem multidimensional, necessitando, assim, de análises de dados multidimensionais. De acordo com Peixinho ( 2012), o modelo multidimensional possui três elementos básicos:</p>
                <ul class="Texto">
                    <li><span class="code-color"><strong>Fato: </strong></span>um fato é uma coleção de itens de dados, cada fato representa um item, um evento de negócio de uma empresa. É representado pelos valores numéricos e implementado pelas tabelas denominadas Tabelas Fatos;</li>
                    <li><span class="code-color"><strong>Dimensões: </strong></span>são os elementos que participam de um fato, as dimensões determinam o contexto de um assunto de negócios;</li>
                    <li><span class="code-color"><strong>Medidas: </strong></span>são os atributos numéricos que representam um fato, a performance de um indicador de negócios relativo às dimensões que participam desse fato.</li>
                </ul>
                <br>
                <table border="1" cellpadding="10">
                    <thead>
                        <tr>
                            <th>Modelo Entidade Relacionamento</th>
                            <th>Modelo Multidimensional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mais complexo</td>
                            <td>Estrutura mais fácil e intuitiva</td>
                        </tr>
                        <tr>
                            <td>Anos 70</td>
                            <td>Anterior a Entidade Relacionamento e recriada posteriormente</td>
                        </tr>
                        <tr>
                            <td>Tabelas representam conjunto de entidades e relacionamentos</td>
                            <td>Tabelas representam fatos e dimensões</td>
                        </tr>
                        <tr>
                            <td>Tabelas resultantes normalizadas</td>
                            <td>Tabelas Fatos normalizadas, Tabelas Dimensões não podem ser normalizadas</td>
                        </tr>
                        <tr>
                            <td>Tabelas acessadas por todos filtros</td>
                            <td>Tabelas de dimensões são pontos de entrada de acesso</td>
                        </tr>
                        <tr>
                            <td>Maior dificuldade de consulta e leitura por usuário não especializado</td>
                            <td>Leitura e consulta mais fáceis para usuários não especializados</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto">Uma medida está localizada como atributo de um fato e é determinada pelas combinações das dimensões desse fato. A modelagem multidimensional tem como ideia principal a representação dos dados do negócio como um cubo de dados, no qual as células do cubo contêm as medidas, e os lados são definidos pelas dimensões.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/cubo.png" alt="Cubo Multidimensional">
                </div>
                <br>
                <p class="Texto">Conforme demonstrado na figura acima, é possível observar que o cubo agrupa as dimensões e que o cubo completo pode ser dividido para que possa ser possível uma visualização de um determinado fato, sendo assim, a forma como os dados são armazenados é de vital importância para uma boa performance.</p>
                <p class="Texto">A modelagem multidimensional possui dois tipos de modelos: o modelo estrela (star schema) e o modelo floco de neve (snow flake). Cada um com aplicabilidade diferente a depender da especificidade do problema. As dimensões do modelo estrela são desnormalizadas, ao contrário do floco de neve, que parcialmente possui normalização.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/modeloestrela.png" alt="Modelo estrela">
                </div>
                <br>
                <p class="Texto">O modelo estrela é a estrutura básica de um modelo multidimensional, este modelo é constituído por uma tabela de fatos cercada por tabelas de dimensões, conforme a figura acima. As dimensões servem como ponto de entrada simetricamente iguais para a tabela de fatos, essa simetria permite um padrão previsível do modelo que resiste a mudanças não previstas no comportamento do usuário.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/flocodeNeve.png" alt="Modelo Floco de Neve">
                </div>
                <br>
                <p class="Texto">O modelo floco de neve exposto na Figura 8 é uma variação do modelo estrela, no qual todas as tabelas de dimensões podem ser normalizadas, reduzindo dessa maneira a redundância dos dados, mas aumentando a complexidade do modelo e, consequentemente, a compreensão por parte dos usuários, dificultando também a implementação de ferramentas de visualização dos dados.</p>


            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>