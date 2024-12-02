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
                <p class="Titulo">5. Conceitos do Pentaho Server</p>
                <p class="Texto">
                    Neste ponto do conteúdo, serão criados 5 fluxos de dados utilizando JOBs no
                    Pentaho Data Integration, bem como será explicada a teoria dos Steps
                    relacionados a cada fluxo. A parte prática será exposta em sala de aula.
                </p>
                <img src="../assets\img\Captura de tela 2024-10-29 163704.png" alt="" class="example-images">
                <p class="Texto">
                    O Pentaho Server é uma plataforma de BI (Business Intelligence) que oferece
                    recursos para gerenciamento de dados, geração de relatórios, análise e
                    visualização de dados. Alguns dos principais conceitos do Pentaho Server
                    incluem:
                </p>
                <ul>
                    <li><p class="Texto"><span class="code-color"><strong>1.Repositório:</strong></span> o repositório é onde todos os dados, relatórios e dashboards são armazenados. Ele é usado para gerenciar o acesso aos dados e garantir a integridade dos dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>2.Data Source:</strong></span> um conjunto de dados que é usado para criar relatórios e análises. O Pentaho Server suporta várias fontes de dados, incluindo bancos de dados relacionais, arquivos CSV e Excel, dentre outros;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>3.ETL (Extract, Transform, Load):</strong></span> o Pentaho Server inclui o Pentaho Data Integration, uma ferramenta de ETL que permite extrair, transformar e carregar dados em diferentes fontes de dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>4.Relatórios:</strong></span> o Pentaho Server permite criar relatórios a partir de várias fontes de dados. Os relatórios podem ser personalizados para incluir tabelas, gráficos e outros elementos visuais;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>5.Dashboards:</strong></span> o Pentaho Server inclui recursos para criar dashboards personalizados que permitem visualizar informações importantes de várias fontes de dados em um único lugar;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>6.Segurança:</strong></span> o Pentaho Server oferece recursos de segurança para proteger o acesso aos dados. Os usuários podem ser autenticados e autorizados com base em suas permissões;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>7.Agendamento:</strong></span>  o Pentaho Server permite agendar a execução de relatórios e outros processos em um horário específico. Isso permite automatizar tarefas e garantir que os relatórios sejam gerados regularmente.</p></li>
                </ul>
                <p class="Texto">
                    Esses são apenas alguns dos principais conceitos do Pentaho Server. Ele é uma
                    plataforma rica em recursos e oferece muitas outras funcionalidades para
                    gerenciamento de dados, geração de relatórios e análise de dados.
                </p>
                <p class="Subtopico"><strong>5.1. Arquitetura do Pentaho Server</strong></p>
                <p class="Texto">
                    A arquitetura do Pentaho Server é composta por vários componentes que
                    trabalham juntos para fornecer recursos de BI (Business Intelligence) e
                    gerenciamento de dados. Aqui estão os principais componentes da arquitetura
                    do Pentaho Server:
                </p>
                <ul>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho User Console (PUC):</strong></span>  o PUC é a interface web do Pentaho Server. É aqui que os usuários podem acessar e interagir com relatórios, dashboards e outros recursos;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho Metadata Editor (PME):</strong></span> o PME é usado para criar e gerenciar metadados, que descrevem os dados em diferentes fontes de dados. Os metadados permitem que os usuários acessem e manipulem dados de várias fontes de dados sem ter que entender as complexidades subjacentes dos dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho Data Integration (PDI):</strong></span> o PDI é uma ferramenta de ETL (Extract, Transform, Load) que permite extrair, transformar e carregar dados em diferentes fontes de dados. Ele é usado para criar pipelines de dados que movem dados de uma fonte para outra;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho Reporting:</strong></span> o Pentaho Reporting é usado para criar e gerar relatórios a partir de várias fontes de dados. Ele oferece recursos para criar relatórios personalizados com tabelas, gráficos e outros elementos visuais;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho Analysis Services (Mondrian):</strong></span> o Mondrian é uma ferramenta de OLAP (Online Analytical Processing) que permite aos usuários analisar dados multidimensionais. Ele oferece recursos para criar cubos de dados e visualizá- los em diferentes perspectivas;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho Dashboards:</strong></span> o Pentaho Dashboards permite criar e compartilhar dashboards personalizados que permitem visualizar informações importantes de várias fontes de dados em um único lugar;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Pentaho Security:</strong></span> o Pentaho Security permite controlar o acesso aos recursos do Pentaho Server. Ele oferece recursos para autenticação de usuários, gerenciamento de permissões e outras funcionalidades de segurança.</p></li>
                </ul>
                <p class="Texto">
                    Esses são apenas alguns dos principais componentes da arquitetura do Pentaho
                    Server. A plataforma é altamente modular e escalável, permitindo que os usuários
                    adicionem e personalizem recursos de acordo com suas necessidades
                    específicas.
                </p>
                <p class="Subtopico"><strong>5.2. Instalação e Configuração do Pentaho Server</strong></p>
                <p class="Texto">A instalação e a configuração do Pentaho Server envolvem as seguintes etapas:</p>
                <ol>
                    <li><p class="Texto"><span class="code-color"><strong>Requisitos de sistema:</strong></span> antes de começar a instalação, certifique-se de que seu sistema atende aos requisitos mínimos de hardware e software. Verifique se a versão do Java instalada é compatível com o Pentaho Server;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Baixe o arquivo de instalação:</strong></span> faça o download do arquivo de instalação do Pentaho Server a partir do site oficial da Pentaho. Escolha a versão adequada para o seu sistema operacional;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Descompacte o arquivo:</strong></span> depois de baixar o arquivo, descompacte-o em um diretório no seu sistema;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Inicie o Pentaho Server:</strong></span> para iniciar o Pentaho Server, navegue até o diretório onde você descompactou o arquivo de instalação e execute o arquivo start-pentaho.bat ou start-pentaho.sh, dependendo do sistema operacional;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Acesse o Pentaho User Console:</strong></span> depois que o Pentaho Server for iniciado, você poderá acessar o Pentaho User Console (PUC) em um navegador da web. Digite o endereço http://localhost:8080/pentaho no seu navegador para acessar o PUC;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações do servidor:</strong></span> a partir do PUC, você pode acessar as configurações do servidor e personalizar as opções de segurança, idioma e outros recursos. É recomendável revisar e configurar essas opções de acordo com suas necessidades;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações do usuário:</strong></span> crie usuários e configure as permissões para acessar os recursos do Pentaho Server. Você pode criar usuários locais ou integrar o Pentaho Server com seu diretório de autenticação existente, como Active Directory ou LDAP;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações de fonte de dados:</strong></span> configure as fontes de dados que o Pentaho Server usará para acessar os dados. Você pode configurar fontes de dados para bancos de dados relacionais, arquivos CSV, Excel e outras fontes de dados;</p></li>
                    <li><p class="Texto"><span class="code-color"><strong>Configurações de segurança:</strong></span> configure as opções de segurança para proteger o acesso aos recursos do Pentaho Server. Você pode definir permissões para usuários individuais ou grupos de usuários e limitar o acesso a recursos específicos.</p></li>
                </ol>
                <p class="Texto">
                    Essas são as etapas básicas para instalar e configurar o Pentaho Server. Lembre-
                    se de seguir as instruções específicas para a versão que você está instalando e
                    revise a documentação oficial para obter mais informações e suporte.
                </p>
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php') ?>
</body>