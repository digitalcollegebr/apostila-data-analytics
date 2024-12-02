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
                <a href="topico07.php" class="button-left">
                        <img src="../assets/img/arrow-left.png" alt="" class="left">
                </a>
                <p class="Titulo">8. Outros Steps</p>
                <p class="Subtopico"><strong>8.1. Database lookup</strong></p>
                <p class="Texto">
                    O <span class="code-color">Database lookup</span> é uma etapa (step) do<span class="code-color">Pentaho Data Integration (PDI)</span> que
                    permite consultar informações em um banco de dados e inserir essas
                    informações em um fluxo de dados.
                </p>
                <p class="Texto">
                    O <span class="code-color">Database lookup</span> é especialmente útil quando você deseja combinar
                    informações de diferentes fontes de dados e consolidá-las em uma única tabela.
                    Por exemplo, você pode usar um Database lookup para pesquisar informações
                    do cliente em um banco de dados e adicioná-las a um arquivo de vendas.
                </p>
                <p class="Texto">
                    Para usar o <span class="code-color">Database lookup</span> no <span class="code-color">Pentaho</span> Data Integration, é necessário
                    configurar a conexão com o banco de dados de origem e especificar as tabelas e
                    colunas que você deseja consultar. Você também pode definir condições de filtro
                    para limitar os resultados da consulta.
                </p>
                <p class="Texto">
                    Um exemplo de uso do <span class="code-color">Database lookup</span> é a combinação de dados de duas
                    tabelas em um único arquivo. Suponha que você tenha um arquivo com
                    informações de vendas e outro arquivo com informações de clientes. Você pode
                    usar o Database lookup para pesquisar o ID do cliente em um banco de dados e
                    adicionar as informações do cliente ao arquivo de vendas. Dessa forma, você
                    pode ter um arquivo com todas as informações necessárias para analisar as
                    vendas e os clientes juntos.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 150043.png" alt="" class="example-images">
                <p class="Subtopico"><strong>8.2. HTTP Client</strong></p>
                <p class="Texto">
                    O <span class="code-color">HTTP Client</span> é um componente do <span class="code-color">Pentaho Data Integration (PDI)</span> que permite
                    enviar solicitações HTTP para um servidor web e receber respostas. Com o HTTP
                    Client é possível realizar diversas operações, como fazer download de arquivos,
                    enviar dados para APIs, consultar informações em serviços web, dentre outras.
                </p>
                <p class="Texto">
                    Para usar o <span class="code-color">HTTP Client</span> no PDI, é necessário configurar a URL do servidor e as
                    opções de autenticação, caso necessário. Também é possível definir os
                    cabeçalhos HTTP, os parâmetros de consulta e o corpo da solicitação,
                    dependendo da operação que você deseja realizar.
                </p>
                <p class="Texto">
                    Um exemplo de uso do <span class="code-color">HTTP Client</span> é o envio de dados para uma API RESTful.
                    Suponha que você tenha um arquivo CSV com informações de clientes e deseja
                    enviar esses dados para uma API que armazena essas informações em um banco
                    de dados. Você pode usar o HTTP Client para enviar uma solicitação POST para a
                    URL da API, com o corpo da solicitação contendo os dados do arquivo CSV. A API
                    receberá a solicitação, processará os dados e retornará uma resposta indicando
                    se a operação foi bem sucedida ou não.
                </p>
                <p class="Texto">
                    Outro exemplo de uso do <span class="code-color">HTTP Client</span> é o download de arquivos de um servidor
                    web. Suponha que você precise fazer download de um arquivo CSV com
                    informações de vendas de um servidor web. Você pode usar o HTTP Client para
                    enviar uma solicitação GET para a URL do arquivo CSV e receber a resposta
                    contendo o arquivo. Em seguida, você pode usar outras etapas do PDI, como o
                    Text file input, para processar as informações do arquivo CSV.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 151858.png" alt="" class="example-images">
                <img src="../assets\img\Captura de tela 2024-10-24 151910.png" alt="" class="example-images">
                <p class="Subtopico"><strong>8.3. Rest Client</strong></p>
                <p class="Texto">
                O <span class="code-color">Rest Client</span> é um componente do <span class="code-color">Pentaho Data Integration (PDI)</span></span> que permite
interagir com <span class="code-color">APIs RESTful</span>, que são serviços web que seguem o protocolo <span class="code-color">REST
(Representational State Transfer)</span> REST
(Representational State Transfer). Com o Rest Client é possível realizar operações
como obter informações, enviar dados e executar ações em serviços web.
                </p>
                <p class="Texto">
                Para usar o <span class="code-color">Rest Client</span> no PDI, é necessário configurar a URL do serviço e as
opções de autenticação, caso necessário. Também é possível definir os
parâmetros da solicitação, como cabeçalhos HTTP, dados do corpo da solicitação
e parâmetros de consulta.
                </p>
                <p class="Texto">
                Um exemplo de uso do <span class="code-color">Rest Client</span> é a obtenção de informações de um serviço
web. Suponha que você precise obter informações de um serviço web que
fornece dados de previsão do tempo. Você pode usar o Rest Client para enviar
uma solicitação GET para a URL do serviço web, especificando o local e o período
para os quais você deseja obter informações. O serviço web retornará uma
resposta contendo os dados de previsão do tempo para o período e o local
especificados.
                </p>
                <p class="Texto">
                Outro exemplo de uso do <span class="code-color">Rest Client</span> é o envio de dados para um serviço web.
Suponha que você tenha um arquivo CSV com informações de vendas e deseje
enviar esses dados para um serviço web que armazena essas informações em
um banco de dados. Você pode usar o Rest Client para enviar uma solicitação
POST para a URL do serviço web, com o corpo da solicitação contendo os dados
do arquivo CSV. O serviço web receberá a solicitação, processará os dados e
retornará uma resposta indicando se a operação foi bem sucedida ou não.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 152141.png" alt="" class="example-images">
                <p class="Subtopico"><strong>8.4. Join Rows</strong></p>
                <p class="Texto">
                O <span class="code-color">Join Rows</span> é uma etapa (step) do <span class="code-color">Pentaho Data Integration (PDI)</span>  que permite
combinar duas ou mais fontes de dados em uma única tabela, com base em uma
coluna em comum. O Join Rows é especialmente útil quando você precisa
consolidar dados de diferentes fontes em um único arquivo.
                </p>
                <p class="Texto">
                Existem vários tipos de <span class="code-color">Join Rows</span> disponíveis no PDI, incluindo Inner Join, Left
Outer Join, Right Outer Join e Full Outer Join. Cada tipo de junção tem uma função
diferente e é selecionado com base nas necessidades do seu projeto.
                </p>
                <p class="Texto">
                Para usar o <span class="code-color">Join Rows</span> no PDI, é necessário especificar as fontes de dados que
você deseja combinar e a coluna em comum que será usada como chave de
junção. Você também pode selecionar as colunas que deseja incluir na tabela
resultante e definir as opções de junção, como o tipo de junção e as condições de
filtro.
                </p>
                <p class="Texto">
                Um exemplo de uso do <span class="code-color">Join Rows</span> é a combinação de informações de clientes de
diferentes fontes em uma única tabela. Suponha que você tenha um arquivo CSV
com informações de clientes e um banco de dados com informações de pedidos
de clientes. Você pode usar o Join Rows para combinar as informações de clientes
do arquivo CSV com as informações de pedidos de clientes do banco de dados,
usando o ID do cliente como chave de junção. Dessa forma, você pode ter uma
única tabela com todas as informações necessárias para analisar os clientes e
seus pedidos juntos.
                </p>
                <p class="Texto">
                Outro exemplo de uso do <span class="code-color">Join Rows</span> é a combinação de informações de vendas
de diferentes regiões em uma única tabela. Suponha que você tenha arquivos
CSV com informações de vendas de diferentes regiões e deseje consolidar essas
informações em uma única tabela. Você pode usar o Join Rows para combinar os
arquivos CSV usando a região como chave de junção e ter uma única tabela com
as informações de vendas de todas as regiões.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 152319.png" alt="" class="example-images">
                <p class="Subtopico"><strong>8.5. Merge Join</strong></p>
                <p class="Texto">
                O<span class="code-color"> Merge Join</span> é uma etapa (step) do <span class="code-color">Pentaho Data Integration (PDI)</span> que permite
combinar duas ou mais fontes de dados em uma única tabela, com base em uma
coluna em comum. O Merge Join é semelhante ao Join Rows, mas é mais eficiente
quando as fontes de dados já estão ordenadas pela coluna de junção.
                </p>
                <p class="Texto">
                O <span class="code-color"> Merge Join</span> usa uma estratégia de fusão (merge) para combinar as fontes de
dados. Isso significa que o Merge Join compara as colunas de junção nas
diferentes fontes de dados e, quando as colunas são iguais, adiciona a linha à
tabela resultante. O Merge Join é uma operação de junção de alta performance e
pode ser usado para combinar grandes conjuntos de dados.
                </p>
                <p class="Texto">
                Para usar o <span class="code-color"> Merge Join</span> no <span class="code-color">PDI</span>, é necessário especificar as fontes de dados que
você deseja combinar e a coluna em comum que será usada como chave de
junção. Você também precisa garantir que as fontes de dados estejam ordenadas
pela coluna de junção. Você pode selecionar as colunas que deseja incluir na
tabela resultante e definir as opções de junção, como o tipo de junção e as
condições de filtro.
                </p>
                <p class="Texto">
                Um exemplo de uso do <span class="code-color"> Merge Join</span> é a combinação de informações de vendas de
diferentes lojas em uma única tabela. Suponha que você tenha arquivos CSV com
informações de vendas de diferentes lojas e queira consolidar essas informações
em uma única tabela. Você pode usar o Merge Join para combinar os arquivos
CSV, desde que cada arquivo esteja ordenado pelo ID da loja, que é a coluna de
junção. Dessa forma, o Merge Join combinará as informações de vendas das
diferentes lojas de forma eficiente, produzindo uma tabela resultante com todas
as informações necessárias para análise.
                </p>
                <p class="Texto">
                Outro exemplo de uso do <span class="code-color"> Merge Join</span> é a combinação de informações de clientes
de diferentes fontes em uma única tabela. Suponha que você tenha um arquivo
CSV com informações de clientes e um banco de dados com informações de
pedidos de clientes. Você pode usar o Merge Join para combinar as informações
de clientes do arquivo CSV com as informações de pedidos de clientes do banco
de dados, desde que cada fonte de dados esteja ordenada pelo ID do cliente, que
é a coluna de junção. O Merge Join produzirá uma tabela resultante com todas as
informações necessárias para análise dos clientes e seus pedidos.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-24 152520.png" alt="" class="example-images">
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>