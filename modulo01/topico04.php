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
                <p class="Titulo">Modelagem de dados</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">A modelagem de dados é uma etapa importante e essencial em qualquer projeto de desenvolvimento ou de manutenção de software. Assim, estar atualizado neste assunto é importante para qualquer profissional da área.</p>
                <p class="Subtopico"><strong>O que é a modelagem de dados?</strong></p>
                <p class="Texto">Modelagem de dados é o ato de explorar estruturas orientadas a dados. Como outros artefatos de modelagem, modelos de dados podem ser usados para uma variedade de propósitos, desde modelos conceituais de alto nível até modelos físicos de dados. Do ponto de vista de um desenvolvedor atuando no paradigma orientado a objetos, modelagem de dados é conceitualmente similar à modelagem de classes. Com a modelagem de dados, identifica-se tipos de entidades (da mesma forma que na modelagem de classes é possível identificar classes). Atributos de dados são associados a tipos de entidades, exatamente como associados atributos e operações às classes. Existem associações entre entidades similares às associações entre classes – relacionamento, herança, composição e agregação são todos os conceitos aplicáveis em modelagem de dados.</p>
                <p class="Texto">Modelagem de dados tradicional é diferente da modelagem de classes porque o foco daquela é totalmente nos dados – os modelos de classes permitem explorar os aspectos comportamentais e de dados em um domínio de aplicação, já com o modelo de dados, pode-se apenas explorar o aspecto dado. Por causa desse foco, projetistas de dados tendem a ser melhores em identificar os dados “corretos” em uma aplicação do que modeladores de objetos. No entanto, algumas pessoas modelam métodos de banco de dados <span class="code-color"><em>(stored procedures, stored functions e triggers)</em></span> quando estão realizando a modelagem física dos dados.</p> 
                <p class="Subtopico"><strong>Como modelos de dados são usados na prática?</strong></p>
                <p class="Texto">Embora as questões de metodologias sejam abordadas depois, precisa-se discutir como os modelos de dados podem ser usados na prática para melhor entender-lhes. Provavelmente, vai ser possível se deparar com três estilos básicos de modelos de dados:</p>
                <ul class="Texto">
                    <li><span class="code-color"><strong>Modelos de dados conceituais: </strong></span>esses modelos, algumas vezes chamados modelos de domínio, são tipicamente usados para explorar conceitos do domínio com os envolvidos no projeto. Em equipes ágeis, modelos conceituais de alto nível são normalmente criados como parte do esforço inicial do entendimento dos requisitos do sistema, pois eles são usados para explorar as estruturas e conceitos de negócio estáticos de alto nível. Em equipes tradicionais (não ágeis), modelos de dados conceituais são normalmente criados como precursores aos modelos lógicos de dados (MLD) ou suas alternativas.</li>
                    <li><span class="code-color"><strong>Modelos Lógico de Dados (MLDs):</strong></span> MLDs são usados para explorar os conceitos do domínio e seus relacionados. Isso pode ser feito para o escopo de um simples projeto ou para uma empresa inteira. MLDs descrevem os tipos de entidades lógicas (tipicamente referenciadas simplesmente como tipos de entidades), os atributos de dados que descrevem essas entidades, bem como os relacionamentos entre elas. MLDs são raramente usados em projetos ágeis, apesar de normalmente estarem presentes em projetos tradicionais (onde eles raramente adicionam muito valor à prática).</li>
                    <li><span class="code-color"><strong>Modelos Físicos de Dados (MFDs): </strong></span>MFDs são usados para projetar o esquema interno de um banco de dados, descrevendo as tabelas de dados, as colunas de dados das tabelas e o relacionamento entre as tabelas. MFDs normalmente são bastante úteis em projetos ágeis e tradicionais.</li>
                </ul>
                <p class="Texto">Embora MLDs e MFDs pareçam similares, e eles de fato são, o nível de detalhes que eles modelam pode ser significativamente diferente. Isso porque o objetivo de cada diagrama é diferente – podemos usar um MLD para explorar conceitos do domínio com os envolvidos no projeto e MFD para definir o projeto do banco de dados.</p>
                <p class="Texto">A seguir, a <span class="code-color"><strong>Figura 1</strong></span> apresenta um simples MLD e a <span class="code-color"><strong>Figura 2</strong></span> um simples MFD, ambos modelando o
                conceito de clientes e endereços, assim como o relacionamento entre eles. Ambos os diagramas
                seguem a notação de Barker, que será descrita mais adiante. Note como o MFD mostra mais
                detalhes, incluindo uma tabela associativa necessária para implementar a associação, assim como as
                chaves necessárias para manter os relacionamentos. Mais detalhes sobre esses conceitos serão
                descritos à frente.</p>
                <p class="Texto">MFDs devem também refletir os padrões de nomenclatura de banco de dados da organização. Nesse
                caso, uma abreviação do nome da entidade é colocada para cada nome de coluna e uma abreviação
                para “número” foi consistentemente introduzida. Um MFD deve também indicar os tipos de dados
                das colunas, tais como integer e char(5). Apesar de a <span class="code-color"><strong>Figura 2</strong></span> não mostrá-las, tabelas de referência
                como para o endereço é usado, assim como para estados e países estão implícitos pelos atributos
                END_USADO_CODIGO,END_ESTADO_CODIGO, END_PAIS_CODIGO.</p>
                <p class="Texto"><span class="code-color"><em>Figura 1 - Um simples modelo lógico de dados</em></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/modelologico.png" alt="Modelo lógico">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><em>Figura 2 - Um simples modelo físico de dados</em></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/modelofisico.png" alt="Modelo físico">
                </div>
                <br>
                <p class="Texto">Modelos de dados podem ser usados efetivamente tanto no nível da empresa como de projetos. Os
                arquitetos da empresa normalmente criarão um ou mais MLDs de alto nível que poderão descrever as estruturas de dados que apoiam toda a empresa – normalmente chamados de modelos de dados
                da empresa ou modelos de informação da empresa. Um modelo de dados da empresa é uma das várias visões que os arquitetos da empresa podem escolher para manter e apoiar – outras visões
                podem explorar a infraestrutura de rede/hardware, a estrutura da organização, infraestrutura de softwares, o processo de negócios, dentre outros. Esses modelos provêm informações que uma equipe de projeto pode usar como conjunto de restrições e como descrição da estrutura do sistema.</p>
                <br>
                <p class="Texto">Equipes de projeto tipicamente criarão MLDs como um dos principais artefatos de análise quando seu ambiente de implementação for predominantemente procedural por natureza (um exemplo seria quando usam COBOL estruturado como linguagem de implementação). MLDs são também boas escolhas quando um projeto é orientado a dados, como um data warehouse ou sistema de relatório. No entanto, MLDs são normalmente escolhas ruins quando uma equipe de projeto está usando tecnologias orientadas a objeto ou baseadas em componentes, porque é fato que os desenvolvedores trabalhariam melhor com diagramas UML ou quando o projeto não é orientado a dados. Como uma dica de modelagem, aplique os artefatos corretos para aquele trabalho a ser desenvolvido.</p>
                <p class="Texto">Quando um banco de dados relacional é usado para armazenar dados, equipes de projeto são aconselhadas a criar um MFD para modelar um esquema interno. MFD normalmente é apenas um dos artefatos de projeto críticos para projetos de desenvolvimento de aplicações de negócio.</p>
                <p class="Subtopico"><strong>O que dizer sobre os modelos conceituais?</strong></p>
                <p class="Texto">Muitos profissionais de dados preferem criar um ORM (Object-Role Model), como o apresentado no exemplo da <span class="code-color"><em>Figura 3</em></span>, em vez de um MLD para um modelo conceitual. A vantagem é que a notação é muito simples, algo que os envolvidos no projeto podem rapidamente interpretar, apesar da desvantagem que seria o fato de os modelos se tornarem grandes rapidamente. ORMs permitem primeiramente explorar os exemplos de dados reais em vez de simplesmente saltar para uma abstração potencialmente incorreta – por exemplo, a <span class="code-color"><em>Figura 3</em></span> examina o relacionamento entre clientes e um endereço em detalhe.</p>
                <p class="Texto"><span class="code-color"><em>Figura 3 - Um simples ORM (Object-Role Model)</em></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/ORM.png" alt="Object-Role Model">
                </div>
                <br>
                <p class="Texto">Normalmente os ORMs são usados para explorar o domínio da aplicação com os envolvidos no projeto, mas depois ele é substituído por um artefato mais tradicional, como um MLD, um <span class="code-color"><strong>diagrama de classes</strong></span> ou até um MFD.</p>
                <p class="Subtopico"><strong>Notações comuns de modelagem de dados</strong></p>
                <p class="Texto">A <span class="code-color"><em>Figura 4</em></span> apresenta um resumo da sintaxe das quatro notações mais comuns para modelagem de dados: <span class="code-color"><strong>Engenharia da Informação (EI)</strong></span>, <span class="code-color"><strong>Notação de Barker</strong></span>, <span class="code-color"><strong>IDEF1X</strong></span> e <span class="code-color"><strong>UML (Unified Modeling Language)</strong></span>. Este diagrama não tem a pretensão de ser altamente compreensivo, mas sim de prover uma visão geral básica sobre as notações. Além disso, para não se estender muito no texto, escolheu-se não descrever a abordagem altamente detalhada para nomenclatura de relacionamento como sugerido por Barker.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/notacoes.jpg" alt="Notações dos quatro tipos de modelos">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><em>Figura 4 - Comparando a sintaxe das notações comuns para modelagem de dados.</em></span></p>
                <p class="Subtopico"><strong>Como modelar dados?</strong></p>
                <p class="Texto">É crucial para um desenvolvedor de aplicação ter uma noção dos fundamentos de modelagem de dados não apenas para ler os modelos de dados, mas também para trabalhar efetivamente com os DBAs responsáveis pelos aspectos relacionados aos dados do projeto. O objetivo ao ler esta seção não é aprender como se tornar um modelador de dados, mas sim obter uma apreciação a respeito do que é envolvido nesta tarefa.</p>
                <p class="Texto">As seguintes tarefas são realizadas de forma iterativa:</p>
                <ul class="Texto">
                    <li>Identificar os tipos de entidade;</li>
                    <li>Identificar atributos;</li>
                    <li>Aplicar convenção de nomes;</li>
                    <li>Identificar relacionamentos;</li>
                    <li>Associar chaves;</li>
                    <li>Normalizar  para reduzir a redundância dos dados;</li>
                    <li>Diversificar para melhorar o desempenho.</li>
                </ul>
                <p class="Subtopico"><strong>Identificar os tipos de entidade</strong></p>
                <p class="Texto">Um <span class="code-color"><strong>tipo de entidade</strong></span>, ou simplesmente <span class="code-color"><strong>“entidade”</strong></span>, é conceitualmente similar ao conceito de orientação a objeto de uma classe – que representa uma coleção de objetos similares, podendo representar uma coleção de pessoas, lugares, coisas, eventos ou conceitos. Exemplos de entidades em um sistema de vendas incluiria: Cliente, Endereço, Venda, Item e Taxa. Se a necessidade fosse modelar classes, esperaria-se descobrir classes exatamente com esses nomes. No entanto, a diferença entre uma classe e um tipo de entidade é que classes possuem dados e comportamentos, enquanto tipos de entidade possuem apenas dados.</p>
                <p class="Texto">Idealmente, uma entidade deveria ser normal, descrevendo de forma coesa uma informação do mundo real. Uma entidade normalmente descreve um conceito, tal como uma classe coesa modela um conceito. Por exemplo, cliente e venda são claramente dois conceitos diferentes, portanto, faz sentido modelá-los como entidades diferentes.</p>
                <p class="Subtopico"><strong>Identificar atributos</strong></p>
                <p class="Texto">Cada tipo de entidade terá um ou mais atributos de dados. Por exemplo, na <span class="code-color"><em>Figura 1</em></span> podemos ver que a entidade Cliente possui atributos como Primeiro Nome e Sobrenome e na <span class="code-color">Figura 2</span> que a tabela TCLIENTE possui colunas de dados correspondentes CLI_PRIMEIRO_NOME e CLI_SOBRENOME (uma coluna é a implementação de um atributo de dados em um banco de dados relacional).</p>
                <p class="Texto">Atributos devem ser coesos do ponto de vista do domínio da aplicação. Na Figura 1, decidiu-se que se iria modelar o fato de pessoas possuírem primeiro nome e sobrenome em vez de apenas um nome (ex: “Cláudio” e “Dias” VS. “Cláudio Dias”). Usar o nível de detalhe correto pode ter um impacto significativo no esforço de desenvolvimento e manutenção. Refatorar uma simples coluna de dados em várias colunas pode ser difícil, o que pode resultar em construir o sistema com elementos desnecessários e, portanto, provocar um custo de desenvolvimento e de manutenção maior do que o realmente necessário.</p>
                <p class="Subtopico"><strong>Aplicar convenções de nome</strong></p>
                <p class="Texto">Sua organização deve dispor de normas e diretrizes aplicáveis à modelagem de dados, algo que você deve ser capaz de obter dos administradores da empresa (se não existir, você deve fazer algum lobby para incluí-la). Essas diretrizes devem incluir as convenções de nomenclatura para a modelagem lógica e física. As convenções de nomenclatura lógica devem ser focadas na capacidade de leitura de humanos, enquanto as convenções de nomenclatura física refletirão considerações técnicas. Você pode ver claramente que diferentes convenções de nomenclatura foram aplicadas nas Figuras 1 e 2.</p>
                <p class="Texto">A ideia básica é que analistas sigam um conjunto comum de padrões de modelagem em um projeto de software. Tal como é importante seguir convenções comuns de codificação, um código limpo que segue as diretrizes escolhidas é mais fácil de ser compreendido. Isso funciona da mesma forma para as convenções de modelagem de dados.</p>
                <p class="Subtopico"><strong>Identificar relacionamentos</strong></p>
                <p class="Texto">No mundo real, entidades possuem relacionamentos entre elas. Por exemplo, clientes FAZEM compras, clientes MORAM EM endereços e itens de venda SÃO PARTE DAS vendas. Todos esses termos destacados definem relacionamento s entre entidades. Os relacionamentos entre entidades são conceitualmente idênticos aos relacionamentos (associações) entre objetos. A <span class="code-color"><em>Figura 5</em></span>, a seguir, descreve um MLD parcial para um sistema de compra on-line.O primeiro elemento a se notar são os vários estilos aplicados aos nomes dos relacionamentos e papéis – diferentes relacionamentos requerem diferentes abordagens. Por exemplo, o relacionamento entre Cliente e Venda possui dois nomes (“compra” e “comprado por”, mesmo o relacionamento entre essas entidades sendo apenas um). Neste exemplo, tendo um segundo nome no relacionamento, a ideia seria especificar como ler o relacionamento em cada direção. O ideal seria colocar apenas um nome por relacionamento.</p>
                <p class="Texto"><span class="code-color"><em>Figure 5 - Um modelo lógico de dados (notações Engenharia da Informação)</em></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/MDL.png" alt="MDL">
                </div>
                <br>
                <p class="Texto">Precisa-se também identificar cardinalidade e opcionalmente de um relacionamento (a UML combina os conceitos de “cardinalidade” e “opcionalmente” de um relacionamento em um conceito único de multiplicidade). Cardinalidade representa o conceito de “quantos”, enquanto Opcionalmente representa o conceito de “se é obrigatória a existência da entidade”. Por exemplo, não é suficiente saber que clientes fazem vendas. Quantas vendas um cliente pode realizar? Nenhuma, uma ou várias? Além disso, os relacionamentos existem nos dois sentidos: não apenas clientes fazem vendas, mas vendas são realizadas por clientes. Isso nos leva a questões como: quantos clientes podem ser envolvidos em uma dada venda? É possível ter uma venda com nenhum cliente envolvido?</p>
                <p class="Texto">A Figura 5 mostra que clientes fazem nenhuma ou mais vendas e que qualquer venda é realizada por um e somente um cliente. Ela também mostra que um cliente possui um ou mais endereços e que qualquer endereço possui zero ou mais clientes associados a ele. Apesar de a UML distinguir entre diferentes tipos de relacionamentos – associações, hierarquia, agregação, composição e dependência – modeladores de dados normalmente não estão por dentro dessa questão. Subtipo, uma aplicação de hierarquia, é normalmente encontrada em modelos de dados. Agregação e composição são muito menos comuns, assim como dependências, que são tipicamente uma construção de software e, portanto, não aparecem no modelo de dados, a menos que tenhamos um modelo físico de dados bastante detalhado que mostre como views, triggers ou stored procedures dependem de outros aspectos do esquema do banco de dados.</p>
                <p class="Subtopico"><strong>Associar chaves</strong></p>
                <p class="Texto">Existem duas estratégias fundamentais para associar chaves às tabelas. Primeiro, podemos associar uma chave natural, que é um ou mais atributos de dados existentes, únicos para o conceito do negócio. Imagine uma tabela Cliente, por exemplo. Ela possui de imediato duas chaves candidatas, as colunas NumeroCliente e CPF. A segunda forma é introduzir uma nova coluna, chamada chave substituta, que é uma chave que não possui qualquer significado para o negócio. Um exemplo disso seria uma coluna idEndereco de uma tabela Endereco. Endereços não possuem uma chave natural “trivial” porque seria necessário usar todas as colunas da tabela Endereco para formar uma chave. Assim, introduzir uma chave substituta é uma opção muito melhor neste caso.</p>
                <p class="Texto">O debate entre "natural vs. substituta" é uma das grandes questões “religiosas” na comunidade de banco de dados. O fato é que não existe estratégia perfeita, e com o tempo percebemos que na prática, algumas vezes, faz sentido usar chaves naturais, e em outras situações é mais adequado o uso de chaves substitutas.</p>
                <p class="Subtopico"><strong>Normalizar para reduzir redundância de dados</strong></p>
                <p class="Texto">Normalização de dados é um processo no qual atributos de dados são organizados para aumentar a coesão dos tipos de entidade. Em outras palavras, o objetivo da normalização é reduzir e até eliminar redundância de dados, uma questão importante para desenvolvedores, pois é incrivelmente difícil armazenar objetos em um banco de dados relacional que mantém a informação em vários lugares. A Tabela 8, a seguir, resume as três principais regras de normalização, descrevendo como aumentar os níveis de normalização em tipos de entidade.</p>
                <p class="Texto">Com respeito à terminologia, um esquema de dados é considerado estar em um nível de normalização do seu tipo de entidade menos normalizado. Por exemplo, se todos os tipos de entidade estão na segunda forma normal (2NF) ou maior, então dizemos que o esquema de dados está na 2NF.</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Nível</th>
                            <th>Regra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Primeira Forma Normal (1NF)</td>
                            <td>Uma entidade está na 1NF quando ela não contém grupos de dados repetidos.</td>
                        </tr>
                        <tr>
                            <td>Segunda Forma Normal (2NF)</td>
                            <td>Uma entidade está na 2NF quando ela está na 1NF e quando todos seus atributos que não são chaves primárias são completamente dependentes de sua chave primária.</td>
                        </tr>
                        <tr>
                            <td>Terceira Forma Normal (3NF)</td>
                            <td>Uma entidade está na 3NF quando ela está na 2NF e quando todos seus atributos são diretamente dependentes da chave primária.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><em>Tabela 8 - Regras de normalização de dados.</em></span></p>
                <br>
                <p class="Texto">A Figura 6, exposta mais a frente, descreve um esquema de banco de dados na ONF, enquanto a Figura 7 descreve um esquema normalizado na 3NF. Por que normalização de dados? A vantagem de ter um esquema de dados altamente normalizado é que a informação é armazenada em um lugar apenas, reduzindo a possibilidade de dados inconsistentes. Além disso, esquemas de dados altamente normalizados em geral são conceitualmente mais próximos dos esquemas orientados a objeto, pois os objetivos da orientação a objetos de promover alta coesão e pouco acoplamento entre as classes resulta em soluções similares (ao menos do ponto de vista de dados). Isso geralmente torna mais simples mapear os objetos para o esquema de dados.</p>
                <p class="Texto">Infelizmente, a normalização normalmente traz um custo para o desempenho. Com o esquema de dados da Figura 6, todos os dados para uma venda estão armazenados em uma linha (assumindo que vendas poderão ter até dois itens), simplificando o acesso. Com o esquema de dados da <span class="code-color"><em>Figura 6</em></span>, pode-se rapidamente determinar a quantidade total de uma venda lendo uma única linha da tabela. Para fazer o mesmo com o esquema de dados da <span class="code-color"><em>Figura 7</em></span>, precisa-se ler dados a partir de uma linha na tabela Venda, dados a partir de linhas na tabela ItemVenda para aquela venda e dados a partir das linhas correspondentes na tabela Item. Para esta consulta, o esquema de dados da Figura 6 provavelmente obteve o melhor resultado.</p>
                <p class="Texto"><span class="code-color"><em>Figure 6 - Um esquema de dados inicial para Venda (notação UML).</em></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/UML.png" alt="Notação UML">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><em>Figure 7 - Um esquema normalizado em 3NF (notação UML).</em></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/3NF.png" alt="3NF - Notação UML">
                </div>
                <br>
                <p class="Texto">Esquemas de dados normalizados, quando colocados em produção, normalmente sofrem problemas de desempenho. Isso faz sentido, já que as regras de normalização focam em reduzir redundância de dados, não em melhorar o desempenho do acesso aos dados. Uma parte importante da modelagem de dados é diversificar porções do esquema de dados para melhorar o tempo de acesso a esses dados.</p>
                <p class="Texto">Observe que se o projeto inicial e normalizado dos dados atinge o desempenho necessário para a aplicação, nada precisa ser feito. A Diversificação deve ser aplicada apenas quando os testes de desempenho mostram que temos um problema com os objetos, revelando que precisamos melhorar o tempo de acesso aos dados.</p>
                <p class="Subtopico"><strong>Modelagem de dados evolucionária/ágil</strong></p>
                <p class="Texto">Modelagem de dados evolucionária é a modelagem de dados realizada de forma incremental. Modelagem de dados ágil é a modelagem de dados evolucionária feita de forma colaborativa. Apesar de nem todos pensarem assim, a modelagem de dados pode ser uma das mais desafiantes tarefas em que um DBA pode estar envolvido tendo em vista um projeto de desenvolvimento ágil.</p>
                <p class="Texto">Como você melhora suas habilidades de modelagem de dados? <span class="code-color"><strong>Prática</strong></span>, <span class="code-color"><strong>prática</strong></span>, <span class="code-color"><strong>prática</strong></span>.</p>
                <p class="Texto">Se você tiver a chance, você deve trabalhar próximo a DBAs, se oferecer para trabalhar na modelagem de dados e perguntar sobre o andamento do trabalho. Isso fará com que o seu conhecimento prático na área possibilite a sua evolução profissional, tanto na modelagem lógica como na modelagem física. Além disso, você pode ter a oportunidade de trabalhar com o arquiteto da empresa. Estes profissionais também possuem bastante conhecimento sobre o domínio das aplicações e como abstraí-los para a modelagem dos dados. Além de tudo isso, é preciso estar sempre atualizado lendo informações sobre a área.</p>

            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>