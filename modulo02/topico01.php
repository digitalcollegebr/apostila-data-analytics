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
                <p class="Titulo">Banco de dados dimensionais</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">De acordo com Heinrichs (2003), para competir no mercado global de hoje, as empresas precisam deter mais conhecimento do que antigamente e, ainda, para obter sucesso, elas precisam saber mais sobre seus clientes, mercados, tecnologias e processos, e precisam ter essas informações antes de seus concorrentes.</p>
                <p class="Texto">Para uma tomada de decisão, é necessário ter em mãos informações estratégicas e, tendo em vista esse princípio, as empresas começaram a extrair dados dos seus sistemas operacionais e a armazená-los, separando-os dos dados operacionais. Daí surgiram os Sistemas de Apoio à Decisão. Esses sistemas são soluções computacionais desenvolvidas para apoiar a tomada de decisões complexas durante a resolução de problemas. Ferramentas clássicas de Sistemas de Apoio à Decisão compreendem componentes para gerenciamento de banco de dados sofisticados com poderosas funções de modelagem e projetos de interface com o usuário, as quais permitem trabalhar interativamente com questões, relatórios e funções gráficas.</p>
                <p class="Texto">Segundo <strong>Bidgoli (1989)</strong>, as decisões são classificadas em:</p>
                <ul class="Texto">
                    <li>Decisão estruturada: apresenta procedimento operacional padrão, bem definido e claramente projetado. Este tipo de decisão conta com sistemas de informação relativamente fáceis de definir, programáveis, baseados em lógica clássica, fatos e resultados bem definidos, horizonte de tempo pequeno, rotinas repetitivas e voltadas para baixos níveis da organização;</li>
                    <li>Decisão semi-estruturada: não é totalmente bem definida, porém inclui aspectos de estruturação; pode, em grande parte, contar com apoio dos sistemas de informação;</li>
                    <li>Decisão não-estruturada: não apresenta qualquer padrão de procedimento operacional, não se repete. No tocante aos sistemas de informação, estes podem apenas apoiar o decisor, o qual precisa contar fortemente com sua intuição, experiência etc. É difícil de formalizar, envolve heurística, tentativa e erro, senso comum em adição à lógica, horizonte de tempo longo, raramente replica decisões prévias e voltadas para os níveis intermediários e alta gerência.</li>
                </ul>
                <p class="Texto">Um sistema de apoio à decisão possui como arquitetura básica: dados, modelo e usuário.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/estruturaSad.png" alt="Estrutura SAD">
                </div>
                <br>
                <ul class="Texto">
                    <li>Interface com usuário: é a única parte do sistema com a qual o usuário terá contato, exercendo uma importante função do sistema;</li>
                    <li>Base de Dados: é utilizada nas operações de gerenciamento de dados (armazenamento, atualização, recuperação e processamento). Nela estão contidos todos os dados e informações que irão alimentar o modelo;</li>
                    <li>Base de Modelos: atualmente existe uma grande diversidade de modelos e técnicas de modelagem, a definição destes depende sobretudo das necessidades do usuário, dos objetivos do sistema e, ainda, dos recursos financeiros e do tempo disponível.</li>
                </ul>
                <p class="Texto">O processo de tomada de decisão pode ser traduzido como uma sequência de tarefas que envolvem uma grande quantidade de informação com relacionamentos complexos entre si, os Sistemas de Apoio à Decisão têm ênfase na simulação e exploração de dados, com o objetivo de dar suporte às decisões de simulação e exploração de dados. De acordo com <strong>Alter (1980)</strong>, os Sistemas de Apoio à Decisão são classificados em:</p>
                <ul class="Texto">
                    <li>Sistemas de análise de informações: provêm acesso a uma série de dados orientados à decisão e a pequenos modelos para prover informação gerencial, possibilitando a análise por meio do uso de dados internos. Podem, ainda, a partir de dados do passado, gerar previsões para períodos futuros;</li>
                    <li>Modelos de contas: calculam a consequência de ações planejadas sobre a base de definições de contas. Em geral, geram estimativas baseadas em variações das entradas nas fórmulas das contas;</li>
                    <li>Modelos de representação: incluem modelos de simulação que estimam a consequência de ações sobre a base de modelos, tais comoprobabilidades de ocorrências;</li>
                    <li>Modelos de otimização: oferecem linhas de ação para uma solução ótima, considerando as restrições necessárias;</li>
                    <li>Modelos de sugestão: consideram uma sugestão específica para uma decisão, substituindo procedimentos menos eficientes.</li>
                </ul>
                <p class="Texto">Essas categorias possuem dois agrupamentos, dos quais os três primeiros itens pertencem aos sistemas orientados a dados e os demais itens pertencem aos sistemas orientados a modelos. Na medida em que os usuários começarem a aceitar os conceitos de um Sistema de Apoio à Decisão e a utilizar todos os recursos de sua organização para estimular o aprendizado acerca dos problemas e suas soluções, os Sistemas de Apoio à Decisão se tornarão mais efetivos e frequentes.</p>
                <br>
                <p class="Subtopico"><strong>Data Warehouse</strong></p>
                <p class="Texto">Como você utiliza o <span class="code-color"><strong>Data Warehouse</strong></span> hoje? Se essa tem sido uma lacuna na sua empresa, está em tempo de recuperar as oportunidades perdidas. O termo surgiu na década de 1980, quando o cientista da computação (INMON, 2007), tido como o pai do conceito, desenvolveu os primeiros processos operacionais em sistemas de suporte à decisão (DSSs). Desde então, muita coisa mudou. Hoje, eles são um ponto de apoio fundamental na formação de estratégias de negócios.</p>
                <p class="Texto">Podemos definir o <span class="code-color"><strong>Data Warehouse</strong></span> como um <strong>grande armazém de dados voltado para dar o suporte necessário nas decisões de usuários finais, geralmente gerentes e analistas de negócios</strong>. Os dados que compõem o Data Warehouse são derivados em sua grande maioria dos diversos bancos de dados operacionais e estão armazenados em locais diferentes dos referidos bancos.</p>
                <p class="Texto">Um Data Warehouse consiste em um banco de dados de diversas fontes, normalmente utilizado como base para análises avançadas. Na prática, para entender o que é um Data Warehouse e como ele funciona, é preciso antes enxergá-lo como uma solução voltada para empresas.</p>
                <p class="Texto">Ele pode ser compreendido como um suporte para orientar gestores de negócios de todas as áreas em seus processos decisórios. Ele pode servir como suporte desde empresas que atuam no varejo até instituições financeiras e de ensino que precisem de recursos que garantam segurança e transparência em suas operações. É o caso das companhias que se valem de sistemas <span class="code-color"><strong>Online Transaction Processing</strong></span>, ou <span class="code-color"><strong>Processamento de Transações em Tempo Real (OLTP)</strong></span>.</p>
                <p class="Texto">O Data Warehouse permite que sejam feitas consultas e análises eficazes, transformando em dados esparsos informações antes inacessíveis ou subaproveitadas ao reunir informações dispersas nos diversos bancos de dados operacionais de origem que poderiam estar em plataformas distintas. Essas informações podem ser convertidas em estratégias para o negócio.</p>
                <p class="Texto">Um dos grandes benefícios proporcionados pelo Data Warehouse é a diminuição do tempo que os gerentes levam para obter as informações necessárias aos seus processos decisórios com a eliminação de tarefas operacionais como pesquisa e identificação dos dados necessários. O Data Warehouse contém somente os dados necessários aos gerentes para realizarem as referidas tarefas.</p>
                <p class="Texto">O objetivo do Data Warehouse deve ser o de satisfazer as necessidades de análises de informações dos seus usuários, como, por exemplo, monitorar e comparar dados de transações atuais com as passadas e prever tendências futuras, permitindo tomar as medidas cabíveis ainda a tempo de eventuais correções ou aperfeiçoamentos. Utilizar os bancos de dados dos aplicativos operacionais para realizar uma análise ou uma consulta é muito mais trabalhoso, o que ainda pode interferir na performance do aplicativo. Outros problemas também podem ocorrer com esta prática, como enfrentar problemas oriundos da redundância de dados dispersos pelos diversos aplicativos, ou encontrar dados que não estão no formato adequado para se realizar as análises necessárias.</p>
                <p class="Texto"><span class="code-color"><em>“A grande vantagem de um Data Warehouse é permitir a tomada de decisões baseadas em fatos”</em></span>. O Data Warehouse deve se tornar uma ferramenta imprescindível para os gerentes conseguirem administrar seus negócios nas próximas décadas. Como o ambiente de negócios está se tornando cada vez mais dinâmico, é extremamente necessário que as regras de negócios sejam incorporadas às aplicações, que as estruturas dos sistemas se ajustem aos negócios, e que o tempo de resposta dos sistemas seja cada vez menor.</p>
                <p class="Texto">Um Data Warehouse se caracteriza por ser um sistema ativo de prospecção e tratamento de dados para atender a finalidades específicas. É diferente, portanto, dos Data Lakes, que são repositórios de dados não estruturados de baixo custo e sem uma aplicação em especial.</p>
                <p class="Texto">Entre as suas principais características, destacamos:</p>
                <ul class="Texto">
                    <li>Em um DW, são compilados dados relacionais de sistemas transacionais, aplicativos voltados a negócios e bancos de dados operacionais;</li>
                    <li>Os dados precisam ser de qualidade e estarem organizados;</li>
                    <li>Permite consultas mais ágeis, graças à tecnologia de armazenamento local;</li>
                    <li>Pode gerar relatórios em lote, conforme o conceito de Business Intelligence (BI);</li>
                    <li>Os usuários finais geralmente são cientistas de dados, analistas de negócios ou desenvolvedores de dados;</li>
                    <li>A arquitetura elementar de um armazenamento de dados (DW) tem como base as diferentes fontes de dados on-line ou em rede;</li>
                    <li>A partir delas, é implementada uma solução chamada “área de datastage”, na qual as informações são coletadas e filtradas - e também onde redundâncias são eliminadas;</li>
                    <li>Essa área é interligada a um data mart, cuja função é realizar uma nova filtragem de dados para enviá-los às ferramentas utilizadas pelo usuário final.</li>
                </ul>
                <p class="Texto">A crescente utilização do Data Warehouse por parte das empresas se deve à necessidade de um maior domínio das informações estratégicas para garantir uma ação mais rápida e eficaz, assegurando, assim, uma maior competitividade no mercado. Dentre os principais fatores que contribuíram para essa maior demanda da tecnologia de Data Warehousing, podemos destacar as mudanças organizacionais e estruturais nos negócios e abertura de mercado e a globalização da economia.</p>
                <p class="Texto">Para a adoção da tecnologia de Data Warehousing em uma organização, a empresa necessita ter, pelo menos:</p>
                <ul class="Texto">
                    <li>Várias plataformas de hardware e de software;</li>
                    <li>Constantes alterações nos sistemas transacionais corporativos;</li>
                    <li>Dificuldade acentuada na recuperação de dados históricos em períodos superiores ao ano atual de operações;</li>
                    <li>Existência de sistemas “pacotes” de fornecedores diferentes;</li>
                    <li>Falta de padronização e integração dos dados existentes nos diversos sistemas;</li>
                    <li>Carência de documentação e segurança no armazenamento de dados;</li>
                    <li>Dificuldade de aplicação de sistemas devido a dependências múltiplas de sistemas corporativos.</li>
                </ul>
                <p class="Texto">Segundo <strong>Inmon (2007)</strong>, o Data Warehouse possui as seguintes características:</p>
                <ul class="Texto">
                    <li>Baseado em assuntos - armazena informações agrupadas por assunto de acordo com a necessidade da empresa, fornecendo dessa forma informações estratégicas para o negócio. Os projetistas de Data Warehouse devem focar apenas nos dados relevantes para as tomadas de decisão que sejam de interesse do negócio;</li>
                    <li>Integrado - durante o projeto do modelo de dados, deve-se ter o cuidado de evitar dados que provoquem ambiguidade. As convenções de nomes, os valores de variáveis, tais como sexo masculino e feminino, e outros atributos físicos de dados como data types são formalmente unificados e integrados;</li>
                    <li>Não é volátil - um princípio do Data Warehouse é que depois que o dado é inserido jamais deve ser alterado; ele possui somente duas operações básicas: a carga (inicial e incremental) e a consulta em modo de leitura;</li>
                    <li>Variável em relação ao tempo - as informações contidas no Data Warehouse são como um snapshot, um conjunto estático de registros, acumulando diversos dados sobre diversos períodos de tempo, fornecendo dessa maneira subsídios para análises do negócio em tempos diferentes.</li>
                </ul>
                <br>
                <p class="Subtopico"><strong>Quais são os principais benefícios em usar Data Warehouse nas empresas?</strong></p>
                <p class="Texto">Agora que você entendeu o que é o Data Warehouse e conheceu os seus tipos, vamos apontar as principais vantagens em contar com um armazenamento de dados nas empresas. Veja quais são: Agilidade nas consultas: sistemas de data warehouse não são apenas capazes de armazenar dados, mas também são uma solução completa para companhias que lidam frequentemente com a informação.</p>
                <p class="Texto">Maior capacidade de processamento de dados: com a expansão da cloud computing, a capacidade de armazenamento e processamento dos sistemas de data warehouse vem aumentando bastante. Acesso a dados históricos: quando é necessário ter uma referência histórica para efetuar uma operação on-line, os armazenamentos de dados se revelam ainda mais valiosos, já que trabalham com sistemas OLTP.</p>
                <p class="Texto">Centralização de dados: outra importante vantagem é que eles operam a partir de dados centralizados e compilados em um único repositório.</p>
                <br>
                <p class="Subtopico"><strong>Entenda as principais desvantagens do Data Warehouse</strong></p>
                <p class="Texto">Estruturar um Data Warehouse tem seus pontos de atenção. Conheça alguns desafios que podem surgir no dia a dia:</p>
                <ul class="Texto">
                    <li>Dificuldade em integrá-lo com sistemas e softwares legados;</li>
                    <li>Problemas no controle de acesso aos dados;</li>
                    <li>Complicações ao estruturar dados e ao agregar valor a eles;</li>
                    <li>Sua estruturação pode ser trabalhosa demais;</li>
                    <li>Rápida obsolescência;</li>
                    <li>Dificuldade em estabelecer regras para as distintas fases de operação;</li>
                    <li>Imprevisibilidade em relação aos problemas.</li>
                </ul>
                <br>
                <p class="Subtopico"><strong>Como o Data Warehouse é usado em Business Intelligence?</strong></p>
                <p class="Texto">Na prática, um Data Warehouse serve como a base na qual middlewares em ambientes de Business Intelligence fornecem aos usuários finais diferentes resultados. Ou seja, é a partir desse sistema que ferramentas de BI são operacionalizáveis. Logo, em processos de Business Intelligence, os DW funcionam como a espinha dorsal do armazenamento de dados. Isso porque a inteligência de negócios depende de consultas complexas e da comparação de vários conjuntos de dados para balizar desde decisões diárias a mudanças mais radicais ou que contemplem toda a empresa. Para facilitar isso, o BI se estrutura em três atividades abrangentes: organização de dados, armazenamento de dados e análise de dados.</p>
                <p class="Texto">A transformação de dados geralmente é viabilizada por tecnologias de extração, transformação e carregamento (ETL), enquanto a análise é feita usando ferramentas de inteligência de negócios.</p>
                <br>
                <p class="Subtopico"><strong>Qual a diferença entre Data Warehouse e Database?</strong></p>
                <p class="Texto">Por tudo que vimos até aqui, podemos dizer que o Data Warehouse é um sistema de informação que armazena dados históricos e relacionais de fontes únicas ou múltiplas.</p>
                <p class="Texto">Ele é projetado para analisar, relatar e integrar dados de transações de diferentes fontes. O DW facilita o trabalho de análise e formação de relatórios de uma companhia e é também a fonte principal para orientar no processo de tomada de decisão e previsão.</p>
                <p class="Texto">Já o Database é uma coleção de dados relacionados que representam alguns aspectos do mundo real, sendo projetado para a gravação de tais elementos. Sendo assim, podemos apontar para algumas diferenças entre esses dois recursos:</p>
                <ul class="Texto">
                    <li>O Database é projetado para registrar dados, enquanto o data warehouse é projetado para analisá- los;</li>
                    <li>O Database é uma coleção de dados orientada para aplicações, enquanto o armazenamento de dados é a coleção de dados orientada para o assunto;</li>
                    <li>O primeiro usa o Online Transaction Processing (OLTP), enquanto o DW usa o Online Analytical Processing (OLAP);</li>
                    <li>O Database é projetado utilizando técnicas de modelagem Entity Relationship Diagram (ERD), enquanto o armazém de dados usa técnicas de modelagem de dados para projetar.</li>
                </ul>
                <br>
                <p class="Subtopico"><strong>Data Warehouse: caso real</strong></p>
                <p class="Texto">Um caso real de empresa que utilizou Data Warehouse para melhorar o tratamento dos seus dados é o da Universidade Cornell, nos Estados Unidos. A instituição usava o Cognos Data Manager para transformar e mesclar dados em um DW da Oracle. Em um certo momento, a IBM decidiu encerrar o suporte para o produto. O motivo foi assim descrito pelo então gerente de DW da universidade, <strong>Jeff Christen</strong>:</p>
                <p class="Texto"><span class="code-color"><em>“Infelizmente, tínhamos milhões de linhas de código escritas no Data Manager, então, tivemos que procurar por uma substituição.”</em></span></p>
                <p class="Texto">Ele viu nesse acontecimento uma oportunidade para adicionar novas funcionalidades para que seu Data Warehouse funcionasse com mais eficiência. O gestor começou a procurar ferramentas de ETL a fim de adicionar as otimizações desejadas. Para isso, ele se concentrou em áreas-chave ao avaliar os fornecedores: documentação, custos de licenciamento, melhoria do desempenho e capacidade de trabalhar dentro das limitações de pessoal existentes.</p>
                <p class="Texto">A saída encontrada foi o WhereScape, uma solução em automação de dados que, segundo <strong>Christen</strong>, <span class="code-color"><em>“é uma ferramenta robusta, mas também intuitiva o suficiente para ser dominada em poucas semanas”</em></span>.</p>
                <br>
                <p class="Subtopico"><strong>O que esperar do Data Warehouse?</strong></p>
                <p class="Texto">Cada vez mais integrados a soluções e recursos de BI, machine learning e inteligência artificial, a tendência para o futuro dos Data Warehouses é de se tornarem mais intuitivos.</p>
                <p class="Texto">É o que se espera a partir do novo conceito de Data Warehouse 2.0, no qual a arquitetura mais avançada trata os dados como em um ciclo de vida. Outra tendência muito forte é o uso cada vez mais intenso da cloud computing.</p>
                <p class="Texto">Afinal, as empresas estão mudando para tecnologias de armazenamento de dados em nuvem por motivos de desempenho, segurança, agilidade e simplificação operacional. Para o futuro, os DWs tendem a ser também verdadeiros ecossistemas de análise completos.</p>
                <p class="Texto">Isso porque processos e projetos analíticos dependem de dados de diversos tipos (dados transacionais, dados de eventos e dados de referência) que vêm de sistemas e bancos de dados corporativos, bem como de fontes de big data.</p>
                <p class="Texto">Sendo assim, daqui por diante, os dados existentes nos DWs deverão se integrar ao ecossistema de análise, trabalhando em conjunto com um data lake para fornecer toda a gama de dados necessários para que possam ser analisados.</p>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>