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
                <p class="Titulo">Passo a Passo para Modelagem Dimensional</p>
                <p class="Subtopico"><strong>objetivo</strong></p>
                <p class="Texto">O enfoque principal é propor um roteiro que especifique as etapas necessárias no desenvolvimento de um projeto de Data Warehouse visando prover o conhecimento mínimo necessário àqueles profissionais que não têm referência alguma sobre esse assunto.</p>
                <br>
                <p class="Subtopico"><strong>desenvolvimento</strong></p>
                <p class="Texto">As etapas para a construção do roteiro estão em uma ordem sequencial, algumas delas podem ser realizadas paralelamente a outras ou a ordem pode ser alterada, de acordo com a necessidade; isso será definido pela equipe que está elaborando o projeto. Sugere-se essa sequência, pois facilita o entendimento do objetivo do projeto e descreve etapas interligadas e fundamentais para o sucesso dele.</p>
                <br>
                <p class="Subtopico"><strong>Fatores críticos de sucesso</strong></p>
                <p class="Texto">Primeiramente, é de extrema importância elencar os principais itens que determinarão o sucesso do projeto. A seguir estão alguns itens importantes:</p>
                <ul class="Texto">
                    <li>É fundamental planejar o projeto;</li>
                    <li>É importante ter o orçamento aprovado para desenvolver o projeto de acordo com o plano de investimento da empresa;</li>
                    <li>É importante que a empresa esteja disposta a modernizar-se para garantir o crescimento e a competitividade;</li>
                    <li>É importante ter o apoio e o empenho dos usuários responsáveis e suas respectivas gerências por intermédio de atitudes participativas e cooperativas</li>
                    <li>É fundamental ressaltar a importância das informações para a empresa e, em especial, o compartilhamento delas, evitando duplicidade de dados e informações proprietárias;</li>
                    <li>É necessário negociar um acordo com a alta administração referente à proposta de implementação do projeto;</li>
                    <li>É importante primeiro analisar as áreas de atuação mais lucrativas da empresa;</li>
                    <li>É importante analisar a contenção de custos;</li>
                    <li>É imprescindível que as informações sejam precisas, consistentes e rápidas de se obter;</li>
                    <li>É importante ter a capacidade de adaptação às necessidades de negócio;</li>
                    <li>É necessário apresentar resultados entre as etapas do desenvolvimento do projeto.</li>
                </ul>
                <p class="Texto">Após estarem definidos os fatores críticos de sucesso do projeto, deve-se iniciar a análise de qual técnica de desenvolvimento de sistemas mais se integra à construção de um projeto de Data Warehouse.</p>
                <br>
                <p class="Subtopico"><strong>Definição da técnica para desenvolvimento de sistemas a ser utilizada</strong></p>
                <p class="Texto">É de extrema importância utilizar uma técnica para desenvolvimento de sistemas para auxiliar no projeto do Data Warehouse. Indica-se a técnica da Engenharia da Informação em virtude de os dados serem o enfoque principal desta técnica, e em um Data Warehouse o objetivo principal é a transformação dos dados em informações. Ao utilizar a técnica da Engenharia da Informação, torna-se mais fácil a forma de visualização dos relacionamentos entre os requisitos básicos que estruturam o negócio objeto de análise. Como produto principal desta técnica, temos o Modelo de Entidades e Relacionamentos (MER). Um MER é válido e confiável quando consegue responder às perguntas dos processos que serão por ele atendidos. Portanto, é um modelo obrigatório em qualquer desenvolvimento de sistemas, até porque é requisito básico para a implementação física das bases de dados. Tendo definida e assimilada a técnica de desenvolvimento de sistemas a ser utilizada no projeto, é importante entender quais são as necessidades do usuário, diferenciando-as entre o ambiente analítico e o operacional.</p>
                <br>
                <p class="Subtopico"><strong>Visualizar as necessidades do usuário</strong></p>
                <p class="Texto">O usuário é o fator chave para o sucesso do projeto. Sua participação efetiva durante todo o projeto é o requisito mais importante, pois ele é quem domina a área a ser analisada e irá dirimir as dúvidas do analista da informação que implementará o projeto. Há, ainda, a necessidade de entender a diferença entre os sistemas de processamento operacional e analítico.</p>
                <p class="Texto">Sistemas de processamento operacional são sistemas que suportam as operações do dia a dia da empresa. São sistemas de processamento on-line atualizados ao longo do dia.</p>
                <p class="Texto">Sistemas de processamento analítico disponibilizam informações usadas para analisar um problema ou uma situação. É feito por meio de comparações ou da análise de padrões ou tendências. As informações refletem um instante específico no tempo.</p>
                <p class="Texto">Tendo definidas e assimiladas quais são as necessidades do usuário, é importante entender a mudança de enfoque em um projeto de Data Warehouse no que se refere às informações para a tomada de decisões. Durante este processo, é fundamental a participação do usuário e o pleno entendimento dele nesse novo processo de análise da informação.</p>
                <br>
                <p class="Subtopico"><strong>Nova visão da informação para a tomada de decisões</strong></p>
                <p class="Texto">O que buscamos quando estamos modelando sistemas de informação é o entendimento operacional do negócio que está sendo modelado, sem pensar na aplicação em si, sem pensar na tecnologia envolvida, mas com a visão relacional de dados. Quando vamos executar uma modelagem multidimensional, estamos desenhando soluções de gestão de negócios, buscando entender como os executivos e gestores de uma organização avaliam as informações para adoção de estratégias e avaliação de desempenho. A análise multidimensional requer um modelo de dados que permita que os dados sejam facilmente visualizados de acordo com diversas perspectivas.</p>
                <br>
                <p class="Subtopico"><strong>Análise do negócio a ser modelado</strong></p>
                <p class="Texto">Primeiramente, é preciso definir os objetivos do projeto, que podem ser resumidamente descritos nos dois itens abaixo:</p>
                <p class="Texto"><span class="code-color"><strong>1. </strong></span>Disponibilizar as bases de dados do ambiente operacional (OLTP) para um ambiente analítico (OLAP);</p>
                <p class="Texto"><span class="code-color"><strong>2. </strong></span>Permitir aos usuários a extração dos dados por meio de análise exploratória no ambiente OLAP.</p>
                <p class="Texto">Definir o escopo do projeto, observando:</p>
                <ul class="Texto">
                    <li>Caracterizar o problema: o dado deve ser representado como informação para que a empresa possa tomar decisões;</li>
                    <li>Definir quais processos são mais críticos para o negócio e quais precisam de decisões sobre ele;</li>
                    <li>Assimilar o conhecimento e a definição da área de atuação (negócio) do cliente específico e uma tomada de decisão. É importante representar este conhecimento em um modelo de entidades e relacionamentos, pois será muito útil na modelagem dimensional;</li>
                    <li>Definir o grupo gestor da informação que irá participar durante todo o processo de desenvolvimento do projeto. O grupo gestor pode ser considerado como os usuários que dominam a área de negócio e que tomam decisões, juntamente com o pessoal de informática.</li>
                </ul>
                <p class="Texto">É extremamente importante a definição do escopo do projeto, pois é a base dele. No escopo deve ser descrito se a implementação será em um Data Warehouse (base corporativa que atenderá toda a organização) ou em um ou vários "data marts" (base de informação por linha de negócio que contém um subconjunto dos dados corporativos da organização). Recomenda-se iniciar com "data marts" integrando-os a um Data Warehouse ao longo do tempo. Isso se justifica pelos seguintes aspectos:</p>
                <ul class="Texto">
                    <li>O custo é bem inferior a implantar um Data Warehouse de toda a empresa;</li>
                    <li>O tempo de implementação é reduzido;</li>
                    <li>É mais fácil assimilar a atuação de uma área de negócio específica a entender todo o processo da empresa.</li>
                </ul>
                <p class="Texto">Optando-se por implementar em "data marts", deve-se ter o cuidado de não esquecer a integração entre os eles, caso contrário o projeto é inviabilizado.</p>
                <p class="Texto">Tendo definida a área de negócio da empresa a ser implementada no projeto, deve-se analisar onde estão as informações que alimentarão o "data warehouse"/"data mart(s)".</p>
                <br>
                <p class="Subtopico"><strong>Análise do ambiente de origem</strong></p>
                <p class="Texto">Partindo das necessidades de informação por área de negócio já estarem definidas, nesta análise deve-se agir da seguinte maneira:</p>
                <ul class="Texto">
                    <li>Analisar o ambiente computacional da empresa como, por exemplo: "mainframe" IBM, ambiente DOS, ambiente "windows", ambiente UNIX etc;</li>
                    <li>Constatar se as informações necessárias estão armazenadas nos aplicativos operacionais ou, caso contrário, manter os aplicativos operacionais para que obtenham os dados que faltam. É preciso também verificar a viabilidade deste tipo de manutenção para gerar a informação que falta no sistema analítico;</li>
                    <li>Definir como integrar as várias fontes de informação, se houver.</li>
                </ul>
                <p class="Texto">Um fator importante é como analisar as fontes de informação do ambiente de origem como: tipos de bancos de dados (relacionais, em rede, hierárquicos), arquivos sequenciais, planilhas etc. Também é importante verificar os modelos de dados, dicionários de dados dos sistemas do ambiente operacional, relatórios gerenciais dos aplicativos, entre outros. Estas informações auxiliam muito na construção do modelo dimensional.</p>
                <br>
                <p class="Subtopico"><strong>Modelagem dimensional dos dados</strong></p>
                <p class="Texto">Sugere-se utilizar, como técnica principal para a modelagem de dados dimensional, o "star schema" que é a técnica mais indicada para projetos de Data Warehouse. A modelagem dimensional compõe-se de Tabelas Dimensões e Fatos:</p>
                <p class="Texto"><span class="code-color"><strong>Dimensões:</strong></span></p>
                <p class="Texto">Representam as possíveis formas de visualizar os dados. São as entradas para as consultas (tempo, região, cliente etc). A base para entendimento de qualquer negócio é responder às quatro perguntas fundamentais abaixo:</p>
                <ul class="Texto">
                    <li><span class="code-color"><strong>QUANDO?</strong></span> - período de tempo a que se refere a análise;</li>
                    <li><span class="code-color"><strong>O QUÊ?</strong></span> - o principal objeto de análise;</li>
                    <li><span class="code-color"><strong>ONDE?</strong></span> - localização física ou geográfica para análise;</li>
                    <li><span class="code-color"><strong>QUEM?</strong></span> - um objeto específico e detalhado para análise: opcional.</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>