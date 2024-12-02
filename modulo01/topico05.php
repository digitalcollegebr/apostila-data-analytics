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
                <p class="Titulo">Instalando e configurando o PostgreSQL</p>
                <p class="Texto">O PostgreSQL é um sistema de gerenciamento de banco de dados relacional e objeto-relacional de código aberto, conhecido por sua robustez, segurança e flexibilidade. Criado inicialmente como um projeto acadêmico na Universidade da Califórnia, Berkeley, ele evoluiu ao longo das décadas para se tornar um dos bancos de dados mais avançados e amplamente utilizados no mercado.</p>
                <p class="Texto">Para fazer sua instalação siga os seguintes passos:</p>
                <p class="Texto"><span class="code-color"><strong>Passo 1: </strong></span> Clique no link <a href="https://www.postgresql.org/download/">https://www.postgresql.org/download/ e selecione o seu sistema operacional</a></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre1.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 2:</strong></span>Clique no link "Download the installer"</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre2.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 3: </strong></span> Clique na versão desejada</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre3.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 4: </strong></span>Iniciando a instalação</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre4.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 5: </strong></span>Escolha o diretório de instalação</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre5.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 6: </strong></span>Desmarque a opção "Stack Builder"</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre6.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 7: </strong></span>Local onde serão gravados os arquivos</p>
                <div class="image-content">
                    <img src="../assets/img/postgre7.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 8: </strong></span>Cadastre uma senha</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre8.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 9: </strong></span>Porta padrão do PostgreSQL</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre9.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 10: </strong></span>Pré-instalação</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre10.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 11: </strong></span>Clique em Next</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre11.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 12: </strong></span>Instalação em andamento</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre12.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 13: </strong></span>Instalação concluída</p>
                <div class="image-content">
                    <img src="../assets/img/postgre13.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 14: </strong></span>Abra o pgAdmin e coloque a senha cadastrada na instalação</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre14.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Subtopico"><strong>Conhecendo o PgAdmin</strong></p>
                <p class="Texto">O pgAdmin 4 suporta todos os recursos do PostgreSQL, desde a escrita de consultas SQL simples até o desenvolvimento de bancos de dados complexos. Ele é projetado para consultar um banco de dados ativo (em tempo real), permitindo que você fique atualizado com as modificações e implementações. Os recursos do pgAdmin 4 incluem:</p>
                <ul class="Texto">
                    <li>Detecção automática e suporte para objetos descobertos em tempo de execução;</li>
                    <li>Uma ferramenta de consulta SQL so vivo com edição direta de daods;</li>
                    <li>Suporte para consultas administrativas;</li>
                    <li>Um editor SQL de realce de sintaxe;</li>
                    <li>Interfaces gráficas redesenhadas;</li>
                    <li>Poderosas caixas de diálogo e ferramentas de gerenciamento para tarefas comuns;</li>
                    <li>Comportamento responsivo e sensível ao contexto;</li>
                    <li>Mensagens de erro de suporte;</li>
                    <li>Dicas úteis;</li>
                    <li>Ajuda on-line e informações sobre como usar as caixas de diálogo e ferramentas do pgAdmin.</li>
                </ul>
                <p class="Texto">Quando o pgAdmin é aberto, a interface apresenta uma barra de menus e uma janela dividida em dois painéis: o controle de árvore do navegador no painel esquerdo e um navegador com guias no painel direito.</p>
                <br>
                <p class="Texto"><span class="code-color"><strong>Passo 15:</strong></span>Tela inicial do pgAdmin</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre15.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><strong>Selecione um ícone no painel Links rápidos na guia Painel para:</strong></p>
                <ul class="Texto">
                    <li>Clique no botão Adicionar novo servidor para abrir a caixa de diálogo Criar - Servidor para adicionar uma nova definição de servidor.</li>
                    <li>Clique no botão Configurar pgAdmin para abrir a caixa de diálogo Preferências para personalizar seu cliente pgAdmin.</li>
                </ul>
                <p class="Texto"><strong>Links no painel Introdução abrem uma nova guia do navegador que fornece informações úteis para usuários do PostgreSQL:</strong></p>
                <ul class="Texto">
                    <li>Clique no link Documentação do PostgreSQL para navegar até a página Documentação do projeto de código aberto do PostgreSQL; uma vez no site do projeto, você pode revisar os manuais das versões atualmente suportadas do servidor PostgreSQL.</li>
                    <li>Clique no link do site pgAdmin para navegar até o site do projeto pgAdmin. O site pgAdmin apresenta notícias sobre lançamentos recentes do pgAdmin e outras informações do projeto.</li>
                    <li>Clique no link Planet PostgreSQL para navegar até o agregador de blogs para blogs relacionados ao PostgreSQL.</li>
                    <li>Clique no link Community Support para navegar até a página Community no site do projeto de código aberto PostgreSQL; esta página fornece informações sobre como obter suporte para recursos do PostgreSQL.</li>
                </ul>
                <p class="Texto"><span class="code-color"><strong>1. Barra de menu: </strong></span>A barra de menu pgAdmin fornece menus suspensos para acesso a opções, comandos e utilitários. A barra de menus exibe as seguintes seleções: File, Object, Tools* e Help. As seleções podem estar esmaecidas, o que indica que estão desabilitadas para o objeto atualmente selecionado no controle de árvore pgAdmin.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre16.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Use o menu Arquivo para acessar as seguintes opções:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Opção</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Preferências</td>
                            <td>Clique para abrir a caixa de diálogo Preferências para personalizar as configurações do pgAdmin.</td>
                        </tr>
                        <tr>
                            <td>Redefinir Layout</td>
                            <td>Se você modificou a área de trabalho, clique para restaurar o layout padrão.</td>
                        </tr>
                        <tr>
                            <td>Esquema de Bloqueio</td>
                            <td>Carregue para abrir um submenu para selecionar o nível para bloquear a disposição da interface do utilizador. Isto também pode ser alterado a partir das preferências de visualização do navegador.</td>
                        </tr>
                        <tr>
                            <td>Tempo de Execução</td>
                            <td>Clique para abrir um submenu para configurar, visualizar log e configurar zoom. Visível apenas quando o pgAdmin 4 é executado no modo desktop.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong>2. Menu object</strong></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre17.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"> O menu Objeto é sensível ao contexto. Use o menu Objeto para acessar as seguintes opções (em ordem alfabética):</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Opção</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mudar senha</td>
                            <td>Clique para abrir a caixa de diálogo Alterar senha… para alterar sua senha.</td>
                        </tr>
                        <tr>
                            <td>Limpar senha salva</td>
                            <td>Se você salvou a senha do servidor do banco de dados, clique para limpar a senha salva. Ative somente quando a senha já estiver salva.</td>
                        </tr>
                        <tr>
                            <td>Limpar senha do túnel SSH</td>
                            <td>Se você salvou a senha do túnel ssh, clique para limpar a senha salva. Ative somente quando a senha já estiver salva.</td>
                        </tr>
                        <tr>
                            <td>Conectar Servidor</td>
                            <td>Clique para abrir a caixa de diálogo Conectar ao Servidor para estabelecer uma conexão com um servidor.</td>
                        </tr>
                        <tr>
                            <td>Criar</td>
                            <td>Clique em Criar para acessar um menu de contexto que fornece seleções sensíveis ao contexto. Sua seleção abre uma caixa de diálogo Criar para criar um novo objeto.</td>
                        </tr>
                        <tr>
                            <td>Excluir/Remover</td>
                            <td>Clique para excluir o objeto atualmente selecionado do servidor.</td>
                        </tr>
                        <tr>
                            <td>Desconectar do Servidor</td>
                            <td>Clique para se desconectar do servidor atualmente selecionado.</td>
                        </tr>
                        <tr>
                            <td>Soltar cascata</td>
                            <td>Clique para excluir o objeto selecionado no momento e todos os objetos dependentes do servidor.</td>
                        </tr>
                        <tr>
                            <td>Propriedades</td>
                            <td>Clique para revisar ou modificar as propriedades do objeto selecionado no momento.</td>
                        </tr>
                        <tr>
                            <td>Atualizar</td>
                            <td>Clique para atualizar o objeto atualmente selecionado.</td>
                        </tr>
                        <tr>
                            <td>Remover Servidor</td>
                            <td>Clique para remover o servidor atualmente selecionado.</td>
                        </tr>
                        <tr>
                            <td>Scripts</td>
                            <td>Clique para abrir a ferramenta de consulta para editar ou visualizar o script selecionado no menu suspenso.</td>
                        </tr>
                        <tr>
                            <td>Gatilho(s)</td>
                            <td>Clique para Desativar ou Ativar gatilho(s) para a tabela selecionada no momento. As opções são exibidas no menu suspenso.</td>
                        </tr>
                        <tr>
                            <td>Truncar</td>
                            <td>Clique para remover todas as linhas de uma tabela (Truncate), para remover todas as linhas de uma tabela e suas tabelas filhas (Truncate Cascade) ou para remover todas as linhas de uma tabela e reiniciar automaticamente as sequências pertencentes às colunas (Truncate Restart Identity). As opções são exibidas no menu suspenso.</td>
                        </tr>
                        <tr>
                            <td>Ver dados</td>
                            <td>Clique para acessar um menu de contexto que oferece várias opções para visualização de dados (veja abaixo).</td>
                        </tr>
                        <tr>
                            <td>Gerar ERD</td>
                            <td>Clique para abrir a ferramenta ERD com diagrama gerado automaticamente para o banco de dados selecionado. Esta opção está disponível apenas quando um banco de dados é selecionado. As opções são exibidas no menu suspenso.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong>3. Menu ferramenta</strong></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre18.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Use o menu Ferramentas para acessar as seguintes opções (em ordem alfabética):</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Opção</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ferramenta ERD</td>
                            <td>Clique para abrir a ferramenta ERD e começar a projetar seu banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Assistente de concessão...</td>
                            <td>Clique para acessar a ferramenta Assistente de concessão.</td>
                        </tr>
                        <tr>
                            <td>Ferramenta PSQL</td>
                            <td>Clique para abrir a Ferramenta PSQL e iniciar o PSQL no contexto atual do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Ferramenta de Consulta</td>
                            <td>Clique para abrir a Ferramenta de consulta para o objeto selecionado no momento.</td>
                        </tr>
                        <tr>
                            <td>Diferença de Esquema</td>
                            <td>Clique para abrir o Schema Diff e comece a comparar dois bancos de dados ou dois esquemas.</td>
                        </tr>
                        <tr>
                            <td>Backup Globals...</td>
                            <td>Clique para abrir a caixa de diálogo Backup Globals… para fazer backup de objetos de cluster.</td>
                        </tr>
                        <tr>
                            <td>Servidor de backup…</td>
                            <td>Clique para abrir a caixa de diálogo Backup Server… para fazer backup de um servidor.</td>
                        </tr>
                        <tr>
                            <td>Cópia de segurança…</td>
                            <td>Clique para abrir a caixa de diálogo Backup… para fazer backup dos objetos do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Restaurar…</td>
                            <td>Clique para acessar a caixa de diálogo Restaurar para restaurar arquivos de banco de dados de um backup.</td>
                        </tr>
                        <tr>
                            <td>Importar/Exportar dados…</td>
                            <td>Clique para abrir a caixa de diálogo Importar/Exportar dados… para importar ou exportar dados de uma tabela.</td>
                        </tr>
                        <tr>
                            <td>Manutenção…</td>
                            <td>Clique para abrir a caixa de diálogo Manutenção… para VACUUM, ANALYZE, REINDEX ou CLUSTER.</td>
                        </tr>
                        <tr>
                            <td>Pesquisar objetos…</td>
                            <td>Clique para abrir os Objetos de Pesquisa… e comece a pesquisar qualquer tipo de objeto em um banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Adicionar ponto de restauração nomeado</td>
                            <td>Clique para abrir a caixa de diálogo Adicionar ponto de restauração nomeado… para obter um instantâneo pontual do estado atual do servidor.</td>
                        </tr>
                        <tr>
                            <td>Pausar repetição de WAL</td>
                            <td>Clique para pausar a reprodução do log WAL.</td>
                        </tr>
                        <tr>
                            <td>Retomar a reprodução do WAL</td>
                            <td>Clique para retomar a reprodução do log WAL.</td>
                        </tr>
                        <tr>
                            <td>Recarregar configuração…</td>
                            <td>Clique para atualizar os arquivos de configuração sem reiniciar o servidor.</td>
                        </tr>
                        <tr>
                            <td>Gerente de armazenamento</td>
                            <td>Clique para abrir o Storage Manager para carregar, excluir ou baixar os arquivos de backup.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong> 4. O menu ajuda</strong></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre19.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Use as opções do menu Ajuda para acessar os documentos de ajuda on-line ou para revisar as informações sobre a instalação do pgAdmin (em ordem alfabética):</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Ação</th>
                            <th>Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pesquisa Rápida</td>
                            <td>Digite suas palavras-chave no campo Pesquisa Rápida. Digitar pelo menos três caracteres exibirá todas as possibilidades de correspondência em itens de menu e os documentos relevantes em artigos de ajuda. Clique nas opções em itens de menu para executar a ação de uma funcionalidade ou objeto específico. Clique em qualquer um dos artigos da ajuda para abrir a ajuda desse tópico com o texto destacado em uma janela separada. Nota: se alguma das opções nos itens do menu estiver desativada, esse tópico fornecerá informações por meio do ícone de informações.</td>
                        </tr>
                        <tr>
                            <td>Sobre pgAdmin 4</td>
                            <td>Clique para abrir uma janela na qual você encontrará informações sobre o pgAdmin; isso inclui a versão atual e o usuário atual.</td>
                        </tr>
                        <tr>
                            <td>Ajuda on-line</td>
                            <td>Clique para abrir o suporte de documentação para usar os utilitários, ferramentas e diálogos do pgAdmin. Navegue (na guia recém-aberta) documentos de ajuda no painel esquerdo do navegador ou use a barra de pesquisa para especificar um tópico.</td>
                        </tr>
                        <tr>
                            <td>Site pgAdmin</td>
                            <td>Clique para abrir o site pgAdmin.org em uma janela do navegador.</td>
                        </tr>
                        <tr>
                            <td>Site PostgreSQL</td>
                            <td>Clique para acessar a documentação principal do PostgreSQL hospedada no site do PostgreSQL. O site também oferece guias, tutoriais e recursos.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong>5. Barras de ferramentas</strong></span></p>
                <p class="Texto">A barra de ferramentas do pgAdmin fornece botões de atalho para recursos usados com frequência, como Exibir dados e a Ferramenta de consulta, que são usados com mais frequência no programa. Esta barra de ferramentas é visível no painel do navegador. Os botões são ativados/desativados com base no nó do navegador selecionado.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre20.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Barra de Ferramentas</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Opção</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ferramenta ERD</td>
                            <td>Clique para abrir a ferramenta ERD e começar a projetar seu banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Assistente de concessão...</td>
                            <td>Clique para acessar a ferramenta Assistente de concessão.</td>
                        </tr>
                        <tr>
                            <td>Ferramenta PSQL</td>
                            <td>Clique para abrir a Ferramenta PSQL e iniciar o PSQL no contexto atual do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Ferramenta de Consulta</td>
                            <td>Clique para abrir a Ferramenta de consulta para o objeto selecionado no momento.</td>
                        </tr>
                        <tr>
                            <td>Diferença de Esquema</td>
                            <td>Clique para abrir o Schema Diff e comece a comparar dois bancos de dados ou dois esquemas.</td>
                        </tr>
                        <tr>
                            <td>Backup Globals...</td>
                            <td>Clique para abrir a caixa de diálogo Backup Globals... para fazer backup de objetos de cluster.</td>
                        </tr>
                        <tr>
                            <td>Servidor de Backup...</td>
                            <td>Clique para abrir a caixa de diálogo Backup Server... para fazer backup de um servidor.</td>
                        </tr>
                        <tr>
                            <td>Cópia de segurança...</td>
                            <td>Clique para abrir a caixa de diálogo Backup... para fazer backup dos objetos do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Restaurar...</td>
                            <td>Clique para acessar a caixa de diálogo Restaurar para restaurar arquivos de banco de dados de um backup.</td>
                        </tr>
                        <tr>
                            <td>Importar/Exportar dados...</td>
                            <td>Clique para abrir a caixa de diálogo Importar/Exportar dados... para importar ou exportar dados de uma tabela.</td>
                        </tr>
                        <tr>
                            <td>Manutenção...</td>
                            <td>Clique para abrir a caixa de diálogo Manutenção... para VACUUM, ANALYZE, REINDEX ou CLUSTER.</td>
                        </tr>
                        <tr>
                            <td>Pesquisar objetos...</td>
                            <td>Clique para abrir os Objetos de Pesquisa... e comece a pesquisar qualquer tipo de objeto em um banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Adicionar ponto de restauração nomeado</td>
                            <td>Clique para abrir a caixa de diálogo Adicionar ponto de restauração nomeado... para obter um instantâneo pontual do estado atual do servidor.</td>
                        </tr>
                        <tr>
                            <td>Pausar repetição de WAL</td>
                            <td>Clique para pausar a reprodução do log WAL.</td>
                        </tr>
                        <tr>
                            <td>Retomar a reprodução do WAL</td>
                            <td>Clique para retomar a reprodução do log WAL.</td>
                        </tr>
                        <tr>
                            <td>Recarregar configuração...</td>
                            <td>Clique para atualizar os arquivos de configuração sem reiniciar o servidor.</td>
                        </tr>
                        <tr>
                            <td>Gerente de armazenamento</td>
                            <td>Clique para abrir o Storage Manager para carregar, excluir ou baixar os arquivos de backup.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong>O menu ajuda</strong></span></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre21.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Use as opções do menu Ajuda para acessar os documentos de ajuda on-line ou para revisar as informações sobre a instalação do pgAdmin (em ordem alfabética):</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Ação</th>
                            <th>Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Digite suas palavras-chave no campo Pesquisa Rápida. Digitar pelo menos três caracteres exibirá todas as possibilidades de correspondência em itens de menu e os documentos relevantes em artigos de ajuda. Clique nas opções em itens de menu para executar a ação de uma funcionalidade ou objeto específico. Clique em qualquer um dos artigos da ajuda para abrir a ajuda desse tópico com o texto destacado em uma janela separada. Nota: se alguma das opções nos itens do menu estiver desativada, esse tópico fornecerá informações por meio do ícone de informações.</td>
                            <td>Pesquisa Rápida</td>
                        </tr>
                        <tr>
                            <td>Clique para abrir uma janela na qual você encontrará informações sobre o pgAdmin; isso inclui a versão atual e o usuário atual.</td>
                            <td>Sobre pgAdmin 4</td>
                        </tr>
                        <tr>
                            <td>Clique para abrir o suporte de documentação para usar os utilitários, ferramentas e diálogos do pgAdmin. Navegue (na guia recém-aberta) documentos de ajuda no painel esquerdo do navegador ou use a barra de pesquisa para especificar um tópico.</td>
                            <td>Ajuda on-line</td>
                        </tr>
                        <tr>
                            <td>Clique para abrir o site pgAdmin.org em uma janela do navegador.</td>
                            <td>Site pgAdmin</td>
                        </tr>
                        <tr>
                            <td>Clique para acessar a documentação principal do PostgreSQL hospedada no site do PostgreSQL. O site também oferece guias, tutoriais e recursos.</td>
                            <td>Site PostgreSQL</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong>Barra de ferramentas</strong></span></p>
                <p class="Texto">A barra de ferramentas do pgAdmin fornece botões de atalho para recursos usados com frequência, como Exibir dados e a Ferramenta de consulta, que são usados com mais frequência no programa. Esta barra de ferramentas é visível no painel do navegador. Os botões são ativados/desativados com base no nó do navegador selecionado.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre22.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <ul class="Texto">
                    <li>Use o botão Ferramenta de Consulta para abrir a Ferramenta de Consulta no contexto atual do
                    banco de dados.</li>
                    <li>Use o botão Visualizar dados para visualizar/editar os dados armazenados em uma tabela
                    selecionada.</li>
                    <li>Use o botão Linhas Filtradas para acessar o pop-up Filtro de Dados para aplicar um filtro a um
                    conjunto de dados para visualização/edição.</li>
                    <li>Use o botão Pesquisar objetos para acessar a caixa de diálogo de objetos de pesquisa. Ele ajuda
                    você a pesquisar qualquer objeto de banco de dados.</li>
                    <li>Use o botão PSQL Tool para abrir o PSQL no contexto atual do banco de dados.</li>
                </ul>
                <p class="Texto"><span class="code-color"><strong>Navegador com abas</strong></span></p>
                <p class="Texto">O painel direito da janela pgAdmin apresenta uma coleção de guias que exibem informações sobre o objeto atualmente selecionado no controle de árvore pgAdmin na janela esquerda. Selecione uma guia para acessar informações sobre o objeto realçado no controle de árvore.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre23.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Os gráficos na guia Dashboard fornecem uma análise ativa das estatísticas de uso do servidor ou do banco de dados selecionado</p>
                <ul class="Texto">
                    <li>O gráfico Sessões do servidor ou Sessões do banco de dados exibe as interações com o servidor ou
                    banco de dados.</li>
                    <li>O gráfico Transações por segundo exibe as confirmações, reversões e o total de transações por
                    segundo que estão ocorrendo no servidor ou no banco de dados.</li>
                    <li>O gráfico Tuplas no gráfico exibe o número de tuplas inseridas, atualizadas e excluídas no servidor
                    ou no banco de dados.</li>
                    <li>O gráfico de saída de tuplas exibe o número de tuplas buscadas e retornadas do servidor ou no
                    banco de dados.</li>
                    <li>O gráfico Block I/O exibe o número de blocos lidos do sistema de arquivos ou buscados no cache de buffer (mas não no cache do sistema de arquivos do sistema operacional) para o servidor ou banco de dados.</li>
                </ul>
                <p class="Texto">O painel Atividade do servidor exibe informações sobre sessões, bloqueios, transações preparadas e configuração do servidor (se aplicável). As informações são apresentadas em tabelas sensíveis ao contexto. Use os controles localizados acima da tabela para:</p>
                <ul class="Texto">
                    <li>Clique no botão Atualizar para atualizar as informações exibidas em cada tabela.</li>
                    <li>Insira um valor na caixa Pesquisar para restringir o conteúdo da tabela a uma ou mais sessões que satisfaçam os critérios de pesquisa. Por exemplo, você pode inserir um ID de processo para localizar uma sessão específica ou um estado de sessão (como ocioso) para localizar todas as sessões que estão em estado ocioso.</li>
                </ul>
                <p class="Texto">Você pode usar ícones na tabela Sessões para revisar ou controlar o estado de uma sessão:</p>
                <ul class="Texto">
                    <li>Use o ícone Terminar (localizado na primeira coluna) para interromper uma sessão e removê-la da
                    tabela. Antes que o servidor encerre a sessão, será solicitado que você confirme a sua seleção.</li>
                    <li>Use o ícone Cancelar (localizado na segunda coluna) para encerrar uma consulta ativa sem fechar a sessão. Antes de cancelar a consulta, o servidor solicitará que você confirme sua seleção. Ao cancelar uma consulta, o valor exibido na coluna State da tabela será atualizado de Active para Idle. A sessão permanecerá na tabela até que seja encerrada.</li>
                    <li>Use o ícone Detalhes (localizado na terceira coluna) para abrir a guia Detalhes. Essa guia exibe
                    informações sobre a sessão selecionada.</li>
                </ul>
                <div class="image-content">
                    <img src="../assets/img/postgre24.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>A guia Propriedades exibe informações sobre o objeto selecionado.</em></p>
                <ul class="Texto">
                    <li>Clique no ícone Excluir na barra de ferramentas na guia do navegador para excluir os objetos
                    selecionados no painel Propriedades.</li>
                    <li>Clique no ícone Soltar Cascata na barra de ferramentas na guia do navegador para excluir os objetos
                    selecionados e todos os objetos dependentes no painel Propriedades.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre25.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Clique no ícone Editar na barra de ferramentas nas guias do navegador para iniciar a caixa de diálogo Propriedades do objeto selecionado</em></p>
                <br>
                <p class="Texto">Para preservar quaisquer alterações na caixa de diálogo Propriedades, clique no ícone Salvar; suas modificações serão exibidas na guia Propriedades atualizadas.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre26.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Os detalhes sobre o objeto destacado no controle de árvore são exibidos em um ou mais painéis recolhiveis. Você pode usar a seta à esquerda de cada rótulo de painel para abrir ou fechar um painel.</em></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre27.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>A guia SQL exibe o script SQL que criou o objeto realçado e, quando aplicável, uma instrução SQL (comentada) que DROP o objeto selecionado. Você pode copiar as instruções SQL para o editor de sua escolha usando atalhos de recortar e colar.</em></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre28.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Estátisticas</em></p>
                <br>
                <p class="Texto">A guia Estatísticas exibe as estatísticas coletadas para cada objeto no controle de árvore; as estatísticas exibidas na tabela variam de acordo com o tipo de objeto selecionado. Clique em um cabeçalho de coluna para classificar a tabela pelos dados exibidos na coluna; clique novamente para inverter a ordem de classificação. A tabela a seguir lista algumas das estatísticas disponíveis:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Painel</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PID</td>
                            <td>O ID do processo associado à linha.</td>
                        </tr>
                        <tr>
                            <td>Do utilizador</td>
                            <td>O nome do usuário que possui o objeto.</td>
                        </tr>
                        <tr>
                            <td>Base de dados</td>
                            <td>Exibe o nome do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Back-Ends</td>
                            <td>Exibe o número de conexões atuais com o banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Início do back-end</td>
                            <td>A hora de início do processo de back-end.</td>
                        </tr>
                        <tr>
                            <td>Xact Comprometido</td>
                            <td>Exibe o número de transações confirmadas no banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Xact revertido</td>
                            <td>Exibe o número de transações revertidas na última semana.</td>
                        </tr>
                        <tr>
                            <td>Blocos lidos</td>
                            <td>Exibe o número de blocos lidos da memória (em megabytes) na última semana.</td>
                        </tr>
                        <tr>
                            <td>Blocos atingidos</td>
                            <td>Exibe o número de blocos atingidos no cache (em megabytes) na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Devolvidas</td>
                            <td>Exibe o número de tuplas retornadas na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Buscadas</td>
                            <td>Exibe o número de tuplas buscadas na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas inseridas</td>
                            <td>Exibe o número de tuplas inseridas no banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas atualizadas</td>
                            <td>Exibe o número de tuplas atualizadas no banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas excluídas</td>
                            <td>Exibe o número de tuplas excluídas do banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Última redefinição de estatísticas</td>
                            <td>Exibe a hora da última redefinição de estatísticas para o banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Conflitos de tablespace</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com tablespaces descartados no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Bloquear conflitos</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com bloqueios no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Conflitos de instantâneo</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com instantâneos antigos no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Conflitos de buffer</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com buffers fixados no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Arquivos temporários</td>
                            <td>Exibe o número total de arquivos temporários, incluindo aqueles usados pelo coletor de estatísticas.</td>
                        </tr>
                        <tr>
                            <td>Tamanho dos arquivos temporários</td>
                            <td>Exibe o tamanho dos arquivos temporários.</td>
                        </tr>
                        <tr>
                            <td>Impasses</td>
                            <td>Exibe o número de consultas canceladas devido a um conflito de recuperação com deadlocks no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Bloquear o tempo de leitura</td>
                            <td>Exibe o número de milissegundos necessários para ler os blocos lidos.</td>
                        </tr>
                        <tr>
                            <td>Bloquear tempo de gravação</td>
                            <td>Exibe o número de milissegundos necessários para escrever os blocos lidos.</td>
                        </tr>
                        <tr>
                            <td>Tamanho</td>
                            <td>Exibe o tamanho (em megabytes) do banco de dados selecionado.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre29.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Dependências</em></p>
                <br>
                <p class="Texto">A guia Dependências exibe os objetos dos quais o objeto selecionado atualmente depende. Se uma dependência for eliminada, o objeto atualmente selecionado no controle de árvore pgAdmin será afetado. Para garantir a integridade de toda a estrutura do banco de dados, o servidor de banco de dados garante que você não descarte acidentalmente objetos dos quais outros objetos dependem; você deve usar o comando <span class="code-color"><strong>DROP CASCADE</strong></span> para remover um objeto com uma dependência.</p>
                <p class="Texto">A tabela Dependências exibe as seguintes informações:</p>
                <ul class="Texto">
                    <li>O campo Tipo especifica o tipo de objeto pai;</li>
                    <li>O campo Nome especifica o nome de identificação do objeto pai;</li>
                    <li>O campo Restrição descreve a relação de dependência entre o objeto atualmente selecionado e o
                    pai: se o campo for auto, o objeto selecionado pode ser descartado separadamente do objeto pai e será descartado se o objeto pai for descartado; se o campo for internal, o objeto selecionado foi criado durante a criação do objeto pai e será descartado se o objeto pai for descartado; se o campo for normal, o objeto selecionado pode ser descartado sem descartar o objeto pai; se o campo estiver em branco, o objeto selecionado é exigido pelo sistema e não pode ser descartado.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre30.png" alt="Instalação do PostgreSQL">
                </div>
                <p class="Texto"><em>Dependentes</em></p>
                <br>

                
                <ul class="Texto">
                    <li>Use o botão Ferramenta de Consulta para abrir a Ferramenta de Consulta no contexto atual do banco de dados.</li>
                    <li>Use o botão Visualizar dados para visualizar/editar os dados armazenados em uma tabela selecionada.</li>
                    <li>Use o botão Linhas Filtradas para acessar o pop-up Filtro de Dados para aplicar um filtro a um conjunto de dados para visualização/edição.</li>
                    <li>Use o botão Pesquisar objetos para acessar a caixa de diálogo de objetos de pesquisa. Ele ajuda você a pesquisar qualquer objeto de banco de dados.</li>
                    <li>Use o botão PSQL Tool para abrir o PSQL no contexto atual do banco de dados.</li>
                </ul>
                <br>
                <p class="Texto"><span class="code-color"><strong>Navegador com abas</strong></span></p>
                <p class="Texto">O painel direito da janela pgAdmin apresenta uma coleção de guias que exibem informações sobre o objeto atualmente selecionado no controle de árvore pgAdmin na janela esquerda. Selecione uma guia para acessar informações sobre o objeto realçado no controle de árvore.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre21.png" alt="Instalação do PostgreSQL">
                </div>
                <p class="Texto">Os gráficos na guia Dashboard fornecem uma análise ativa das estatísticas de uso do servidor ou do banco de dados selecionado</p>
                <ul class="Texto">
                    <li>O gráfico Sessões do servidor ou Sessões do banco de dados exibe as interações com o servidor ou banco de dados.</li>
                    <li>O gráfico Transações por segundo exibe as confirmações, reversões e o total de transações por segundo que estão ocorrendo no servidor ou no banco de dados.</li>
                    <li>O gráfico Tuplas no gráfico exibe o número de tuplas inseridas, atualizadas e excluídas no servidor ou no banco de dados.</li>
                    <li>O gráfico de saída de tuplas exibe o número de tuplas buscadas e retornadas do servidor ou no banco de dados.</li>
                    <li>O gráfico Block I/O exibe o número de blocos lidos do sistema de arquivos ou buscados no cache de buffer (mas não no cache do sistema de arquivos do sistema operacional) para o servidor ou banco de dados.</li>
                </ul>
                <p class="Texto">O gráfico Block I/O exibe o número de blocos lidos do sistema de arquivos ou buscados no cache de buffer (mas não no cache do sistema de arquivos do sistema operacional) para o servidor ou banco de dados.</p>
                <ul class="Texto">
                    <li>O gráfico Block I/O exibe o número de blocos lidos do sistema de arquivos ou buscados no cache de buffer (mas não no cache do sistema de arquivos do sistema operacional) para o servidor ou banco de dados.</li>
                    <li>Insira um valor na caixa Pesquisar para restringir o conteúdo da tabela a uma ou mais sessões que satisfaçam os critérios de pesquisa. Por exemplo, você pode inserir um ID de processo para localizar uma sessão específica ou um estado de sessão (como ocioso) para localizar todas as sessões que estão em estado ocioso.</li>
                </ul>
                <p class="Texto">Você pode usar ícones na tabela Sessões para revisar ou controlar o estado de uma sessão:</p>
                <ul class="Texto">
                    <li>Use o ícone Terminar (localizado na primeira coluna) para interromper uma sessão e removê-la da tabela. Antes que o servidor encerre a sessão, será solicitado que você confirme a sua seleção.</li>
                    <li>Use o ícone Cancelar (localizado na segunda coluna) para encerrar uma consulta ativa sem fechar a sessão. Antes de cancelar a consulta, o servidor solicitará que você confirme sua seleção. Ao cancelar uma consulta, o valor exibido na coluna State da tabela será atualizado de Active para Idle. A sessão permanecerá na tabela até que seja encerrada.</li>
                    <li>Use o ícone Detalhes (localizado na terceira coluna) para abrir a guia Detalhes. Essa guia exibe informações sobre a sessão selecionada.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre22.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">A guia Propriedades exibe informações sobre o objeto selecionado</p>
                <ul class="Texto">
                    <li>Clique no ícone Excluir na barra de ferramentas na guia do navegador para excluir os objetos selecionados no painel Propriedades.</li>
                    <li>Clique no ícone Soltar Cascata na barra de ferramentas na guia do navegador para excluir os objetos selecionados e todos os objetos dependentes no painel Propriedades.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre23.png" alt="Instalação do PostgreSQL">
                </div>
                <ul class="Texto">
                    <li>Clique no ícone Soltar Cascata na barra de ferramentas na guia do navegador para excluir os objetos selecionados e todos os objetos dependentes no painel Propriedades.</li>
                    <li>Clique no ícone Soltar Cascata na barra de ferramentas na guia do navegador para excluir os objetos selecionados e todos os objetos dependentes no painel Propriedades.</li>
                </ul>
                <br>
                <ul class="Texto">
                    <li>Clique no ícone Soltar Cascata na barra de ferramentas na guia do navegador para excluir os objetos selecionados e todos os objetos dependentes no painel Propriedades.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre24.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <ul class="Texto">
                    <li>Clique no ícone Editar na barra de ferramentas nas guias do navegador para iniciar a caixa de diálogo Propriedades do objeto selecionado.</li>
                </ul>
                <p class="Texto">Para preservar quaisquer alterações na caixa de diálogo Propriedades, clique no ícone Salvar; suas modificações serão exibidas na guia Propriedades atualizadas.</p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre25.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Para preservar quaisquer alterações na caixa de diálogo Propriedades, clique no ícone Salvar; suas modificações serão exibidas na guia Propriedades atualizadas.</em></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre26.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>A guia SQL exibe o script SQL que criou o objeto realçado e, quando aplicável, uma instrução SQL (comentada) que DROP o objeto selecionado. Você pode copiar as instruções SQL para o editor de sua escolha usando atalhos de recortar e colar.</em></p>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre27.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Estatísticas</em></p>
                <p class="Texto">A guia Estatísticas exibe as estatísticas coletadas para cada objeto no controle de árvore; as estatísticas exibidas na tabela variam de acordo com o tipo de objeto selecionado. Clique em um cabeçalho de coluna para classificar a tabela pelos dados exibidos na coluna; clique novamente para inverter a ordem de classificação. A tabela a seguir lista algumas das estatísticas disponíveis:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Painel</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PID</td>
                            <td>O ID do processo associado à linha.</td>
                        </tr>
                        <tr>
                            <td>Do utilizador</td>
                            <td>O nome do usuário que possui o objeto.</td>
                        </tr>
                        <tr>
                            <td>Base de dados</td>
                            <td>Exibe o nome do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Back-Ends</td>
                            <td>Exibe o número de conexões atuais com o banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Início do back-end</td>
                            <td>A hora de início do processo de back-end.</td>
                        </tr>
                        <tr>
                            <td>Xact Comprometido</td>
                            <td>Exibe o número de transações confirmadas no banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Xact Revertido</td>
                            <td>Exibe o número de transações revertidas na última semana.</td>
                        </tr>
                        <tr>
                            <td>Blocos lidos</td>
                            <td>Exibe o número de blocos lidos da memória (em megabytes) na última semana.</td>
                        </tr>
                        <tr>
                            <td>Blocos atingidos</td>
                            <td>Exibe o número de blocos atingidos no cache (em megabytes) na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Devolvidas</td>
                            <td>Exibe o número de tuplas retornadas na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Buscadas</td>
                            <td>Exibe o número de tuplas buscadas na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Inseridas</td>
                            <td>Exibe o número de tuplas inseridas no banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Atualizadas</td>
                            <td>Exibe o número de tuplas atualizadas no banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Tuplas Excluídas</td>
                            <td>Exibe o número de tuplas excluídas do banco de dados na última semana.</td>
                        </tr>
                        <tr>
                            <td>Última redefinição de estatísticas</td>
                            <td>Exibe a hora da última redefinição de estatísticas para o banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Conflitos de tablespace</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com tablespaces descartados no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Bloquear Conflitos</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com bloqueios no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Conflitos de Instantâneo</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com instantâneos antigos no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Conflitos de Buffer</td>
                            <td>Exibe o número de consultas canceladas devido ao conflito de recuperação com buffers fixados no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Arquivos Temporários</td>
                            <td>Exibe o número total de arquivos temporários, incluindo aqueles usados pelo coletor de estatísticas.</td>
                        </tr>
                        <tr>
                            <td>Tamanho dos Arquivos Temporários</td>
                            <td>Exibe o tamanho dos arquivos temporários.</td>
                        </tr>
                        <tr>
                            <td>Impasses</td>
                            <td>Exibe o número de consultas canceladas devido a um conflito de recuperação com deadlocks no banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Bloquear o tempo de leitura</td>
                            <td>Exibe o número de milissegundos necessários para ler os blocos lidos.</td>
                        </tr>
                        <tr>
                            <td>Bloquear tempo de gravação</td>
                            <td>Exibe o número de milissegundos necessários para escrever os blocos lidos.</td>
                        </tr>
                        <tr>
                            <td>Tamanho</td>
                            <td>Exibe o tamanho (em megabytes) do banco de dados selecionado.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre28.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">A guia Dependências exibe os objetos dos quais o objeto selecionado atualmente depende. Se uma dependência for eliminada, o objeto atualmente selecionado no controle de árvore pgAdmin será afetado. Para garantir a integridade de toda a estrutura do banco de dados, o servidor de banco de dados garante que você não descarte acidentalmente objetos dos quais outros objetos dependem; você deve usar o comando DROP CASCADE para remover um objeto com uma dependência.</p>
                <p class="Texto">A tabela Dependências exibe as seguintes informações:</p>
                <ul class="Texto">
                    <li>O campo Tipo especifica o tipo de objeto pai;</li>
                    <li>O campo Nome especifica o nome de identificação do objeto pai;</li>
                    <li>O campo Restrição descreve a relação de dependência entre o objeto atualmente selecionado e o pai: se o campo for auto, o objeto selecionado pode ser descartado separadamente do objeto pai e será descartado se o objeto pai for descartado; se o campo for internal, o objeto selecionado foi criado durante a criação do objeto pai e será descartado se o objeto pai for descartado; se o campo for normal, o objeto selecionado pode ser descartado sem descartar o objeto pai; se o campo estiver em branco, o objeto selecionado é exigido pelo sistema e não pode ser descartado.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre29.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto"><em>Dependentes</em></p>
                <p class="Texto">A guia Dependentes exibe uma tabela de objetos que dependem do objeto atualmente selecionado no navegador pgAdmin. Um objeto dependente pode ser descartado sem afetar o objeto atualmente selecionado no controle de árvore pgAdmin.</p>
                <ul class="Texto">
                    <li>O campo Tipo especifica o tipo de objeto dependente;</li>
                    <li>O campo Nome especifica o nome de identificação do objeto dependente;</li>
                    <li>O campo Banco de dados especifica o banco de dados no qual o objeto reside.</li>
                </ul>
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre30.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Guias adicionais</p>
                <p class="Texto">Guias adicionais são abertas quando você acessa a funcionalidade estendida oferecida pelas ferramentas pgAdmin (como a ferramenta de consulta, o depurador ou o editor SQL). Use o ícone fechar (X) localizado no canto superior direito de cada guia para fechá-la quando terminar de usar a ferramenta. Assim como as guias permanentes, essas guias podem ser reposicionadas na janela do cliente pgAdmin.</p>
                <p class="Texto">Por padrão, cada vez que você abre uma ferramenta, o pgAdmin abre uma nova aba do navegador. Você pode controlar esse comportamento modificando o nó Exibir da caixa de diálogo Preferências para cada ferramenta. Para abrir a caixa de diálogo Preferências, selecione Preferências no menu Arquivo.</p>
                <br>
                <p class="Texto"><span class="code-color"><strong>4. Controle de árvore</strong></span></p>
                O painel esquerdo da janela principal exibe um controle de árvore (o controle de árvore pgAdmin) que fornece acesso aos objetos que residem em um servidor.
                <br>
                <div class="image-content">
                    <img src="../assets/img/postgre31.png" alt="Instalação do PostgreSQL">
                </div>
                <br>
                <p class="Texto">Você pode expandir os nós no controle de árvore para exibir os objetos de banco de dados que residem em um servidor selecionado. O controle de árvore se expande para uma exibição hierárquica:</p>
                <ul class="Texto">
                    <li>Use o sinal de mais (+) à esquerda de um nó para expandir um segmento do controle de árvore;</li>
                    <li>Clique no sinal de menos (-) à esquerda de um nó para fechá-lo.</li>
                </ul>
                <p class="Texto">Você também pode arrastar e soltar determinados objetos na Ferramenta de consulta, o que pode economizar tempo na digitação de nomes longos de objetos. O texto que contém o nome do objeto será totalmente qualificado com esquema. Aspas duplas serão adicionadas se necessário. Para funções e procedimentos, o nome da função junto com os nomes dos parâmetros será colado na Ferramenta de consulta.</p>
                <p class="Texto">Acesse menus sensíveis ao contexto clicando com o botão direito do mouse em um nó do controle de árvore para executar tarefas comuns. Os menus exibem opções que incluem uma ou mais das seguintes seleções (as opções aparecem em ordem alfabética):</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Opção</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Adicionar ponto de restauração nomeado</td>
                            <td>Clique para criar e inserir o nome de um ponto de restauração.</td>
                        </tr>
                        <tr>
                            <td>Cópia de segurança...</td>
                            <td>Clique para abrir a caixa de diálogo Backup... para fazer backup dos objetos do banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Backup globais...</td>
                            <td>Clique para abrir a caixa de diálogo Backup Globals... para fazer backup de objetos de cluster.</td>
                        </tr>
                        <tr>
                            <td>Conectar servidor...</td>
                            <td>Clique para abrir a caixa de diálogo Conectar ao Servidor para estabelecer uma conexão com um servidor.</td>
                        </tr>
                        <tr>
                            <td>Crio</td>
                            <td>Clique para acessar um menu de contexto que fornece seleções sensíveis ao contexto. Sua seleção abre uma caixa de diálogo Criar para criar um novo objeto.</td>
                        </tr>
                        <tr>
                            <td>CRIAR Script</td>
                            <td>Clique para abrir a Ferramenta de consulta para editar ou visualizar o script CREATE.</td>
                        </tr>
                        <tr>
                            <td>Depuração</td>
                            <td>Clique para abrir a ferramenta Debug ou para selecionar Set breakpoint para parar ou pausar a execução de um script.</td>
                        </tr>
                        <tr>
                            <td>Excluir/Remover</td>
                            <td>Clique para excluir o objeto atualmente selecionado do servidor.</td>
                        </tr>
                        <tr>
                            <td>Desconectar banco de dados...</td>
                            <td>Clique para encerrar uma conexão de banco de dados.</td>
                        </tr>
                        <tr>
                            <td>Soltar Cascata</td>
                            <td>Clique para excluir o objeto selecionado no momento e todos os objetos dependentes do servidor.</td>
                        </tr>
                        <tr>
                            <td>Depuração</td>
                            <td>Clique para acessar a ferramenta Depurador.</td>
                        </tr>
                        <tr>
                            <td>Assistente de concessão</td>
                            <td>Clique para acessar a ferramenta Assistente de concessão.</td>
                        </tr>
                        <tr>
                            <td>Manutenção...</td>
                            <td>Clique para abrir a caixa de diálogo Manutenção... para VACUUM, ANALYZE, REINDEX ou CLUSTER.</td>
                        </tr>
                        <tr>
                            <td>Propriedades...</td>
                            <td>Clique para revisar ou modificar as propriedades do objeto selecionado no momento.</td>
                        </tr>
                        <tr>
                            <td>Atualizar...</td>
                            <td>Clique para atualizar o objeto atualmente selecionado.</td>
                        </tr>
                        <tr>
                            <td>Recarregar configuração...</td>
                            <td>Clique para atualizar os arquivos de configuração sem reiniciar o servidor.</td>
                        </tr>
                        <tr>
                            <td>Restaurar...</td>
                            <td>Clique para acessar a caixa de diálogo Restaurar para restaurar arquivos de banco de dados de um backup.</td>
                        </tr>
                        <tr>
                            <td>Ver dados</td>
                            <td>Use a opção Exibir Dados para acessar os dados armazenados em uma tabela selecionada com a guia Saída de Dados da Ferramenta de Consulta.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto">Os menus sensíveis ao contexto associados a Tabelas e nós de Tabela aninhados fornecem opções de exibição adicionais (as opções aparecem em ordem alfabética):</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Opção</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Importar/Exportar dados...</td>
                            <td>Clique para abrir a caixa de diálogo Importar/Exportar... para importar ou exportar dados da tabela selecionada.</td>
                        </tr>
                        <tr>
                            <td>Limpar estatísticas</td>
                            <td>Clique para redefinir as estatísticas da tabela selecionada.</td>
                        </tr>
                        <tr>
                            <td>Scripts</td>
                            <td>Clique para abrir a ferramenta de consulta para editar ou visualizar o script selecionado no menu suspenso.</td>
                        </tr>
                        <tr>
                            <td>Truncar</td>
                            <td>Clique para remover todas as linhas de uma tabela.</td>
                        </tr>
                        <tr>
                            <td>Truncar Cascata</td>
                            <td>Clique para remover todas as linhas de uma tabela e suas tabelas filhas.</td>
                        </tr>
                        <tr>
                            <td>Ver as primeiras 100 linhas</td>
                            <td>Clique para acessar uma grade de dados que exibe as primeiras 100 linhas da tabela selecionada.</td>
                        </tr>
                        <tr>
                            <td>Ver últimas 100 linhas</td>
                            <td>Clique para acessar uma grade de dados que exibe as últimas 100 linhas da tabela selecionada.</td>
                        </tr>
                        <tr>
                            <td>Ver todas as linhas</td>
                            <td>Clique para acessar uma grade de dados que exibe todas as linhas da tabela selecionada.</td>
                        </tr>
                        <tr>
                            <td>Ver linhas filtradas...</td>
                            <td>Clique para acessar o pop-up Filtro de Dados para aplicar um filtro a um conjunto de dados.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto"><span class="code-color"><strong>5. Atalhos de teclado</strong></span></p>
                <p class="Texto">Atalhos de teclado são fornecidos no pgAdmin para permitir acesso fácil a funções específicas. Atalhos alternativos podem ser configurados em Arquivo > Preferências, se desejado.</p>
                <ul class="Texto">
                    <li><strong>Janela principal do navegador</strong></li>
                </ul>
                <p class="Texto">Ao usar a janela principal do navegador, os seguintes atalhos de teclado estão disponíveis:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho para todas as plataformas</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alt+Shift+F</td>
                            <td>Abra o menu Arquivo</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+O</td>
                            <td>Abra o menu Objeto</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+L</td>
                            <td>Abra o menu Ferramentas</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+H</td>
                            <td>Abra o menu Ajuda</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+B</td>
                            <td>Concentre a árvore do navegador</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+[</td>
                            <td>Mover o painel com guias para trás</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+]</td>
                            <td>Mover o painel com guias para frente</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+Q</td>
                            <td>Abra a Ferramenta de Consulta no banco de dados atual</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+V</td>
                            <td>Exibir dados na tabela/exibição selecionada</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+C</td>
                            <td>Abra o menu de contexto</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+N</td>
                            <td>Criar um objeto</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+E</td>
                            <td>Editar propriedades do objeto</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+D</td>
                            <td>Excluir o objeto</td>
                        </tr>
                        <tr>
                            <td>Alt+Shift+G</td>
                            <td>Depuração direta</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Abas de diálogo</strong></li>
                </ul>
                <p class="Texto">Use os atalhos abaixo para navegar pelas guias nas caixas de diálogo:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho para todas as plataformas</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Control+Shift+[</td>
                            <td>Guia de diálogo para trás</td>
                        </tr>
                        <tr>
                            <td>Control+Shift+]</td>
                            <td>Guia de diálogo para frente</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Controles de Grade de Propriedades</strong></li>
                </ul>
                <p class="Texto">Use os atalhos abaixo ao trabalhar com controles de grade de propriedades:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho para todas as plataformas</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Control+Shift+A</td>
                            <td>Adicionar linha na grade</td>
                        </tr>
                        <tr>
                            <td>Aba</td>
                            <td>Mover o foco para o próximo controle</td>
                        </tr>
                        <tr>
                            <td>Shift+Tab</td>
                            <td>Mover o foco para o controle anterior</td>
                        </tr>
                        <tr>
                            <td>Retornar</td>
                            <td>Escolha o item selecionado em uma caixa de combinação</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Editores SQL</strong></li>
                </ul>
                <p class="Texto">Ao usar os editores SQL de realce de sintaxe, os seguintes atalhos estão disponíveis:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho (Windows/Linux)</th>
                            <th>Atalho (MAC)</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alt + Esquerda</td>
                            <td>Opção + Esquerda</td>
                            <td>Mover para o início da linha</td>
                        </tr>
                        <tr>
                            <td>Alt + Direita</td>
                            <td>Opção + Direito</td>
                            <td>Mover para o fim da linha</td>
                        </tr>
                        <tr>
                            <td>Ctrl + Alt + Esquerda</td>
                            <td>Cmd + Opção + Esquerda</td>
                            <td>Mover uma palavra para a esquerda</td>
                        </tr>
                        <tr>
                            <td>Ctrl + Alt + Direita</td>
                            <td>Cmd + Opção + Direita</td>
                            <td>Mover uma palavra para a direita</td>
                        </tr>
                        <tr>
                            <td>Ctrl + /</td>
                            <td>Cmd + /</td>
                            <td>Comente o código selecionado (Inline)</td>
                        </tr>
                        <tr>
                            <td>Ctrl + .</td>
                            <td>Cmd + .</td>
                            <td>Descomente o código selecionado (Inline)</td>
                        </tr>
                        <tr>
                            <td>Ctrl + Shift + /</td>
                            <td>Cmd + Shift + /</td>
                            <td>Código de comentário/descomentário (Bloquear)</td>
                        </tr>
                        <tr>
                            <td>Ctrl + a</td>
                            <td>Cmd + a</td>
                            <td>Selecionar tudo</td>
                        </tr>
                        <tr>
                            <td>Ctrl + c</td>
                            <td>Cmd + c</td>
                            <td>Copiar o texto selecionado para a área de transferência</td>
                        </tr>
                        <tr>
                            <td>Ctrl + r</td>
                            <td>Cmd + r</td>
                            <td>Refazer a última edição desfeita</td>
                        </tr>
                        <tr>
                            <td>Ctrl + v</td>
                            <td>Cmd + v</td>
                            <td>Colar texto da área de transferência</td>
                        </tr>
                        <tr>
                            <td>Ctrl + z</td>
                            <td>Cmd + z</td>
                            <td>Desfazer última edição</td>
                        </tr>
                        <tr>
                            <td>Aba</td>
                            <td>Aba</td>
                            <td>Recuar texto selecionado</td>
                        </tr>
                        <tr>
                            <td>Shift + Tab</td>
                            <td>Shift + Tab</td>
                            <td>Remover recuo do texto selecionado</td>
                        </tr>
                        <tr>
                            <td>Alt + g</td>
                            <td>Opção + g</td>
                            <td>Saltar (para linha:coluna)</td>
                        </tr>
                        <tr>
                            <td>Ctrl + Espaço</td>
                            <td>Ctrl + Espaço</td>
                            <td>Autocompletar</td>
                        </tr>
                        <tr>
                            <td>Ctrl + f</td>
                            <td>Cmd + f</td>
                            <td>Achar</td>
                        </tr>
                        <tr>
                            <td>Ctrl + g</td>
                            <td>Cmd + g</td>
                            <td>Encontre o próximo</td>
                        </tr>
                        <tr>
                            <td>Ctrl + Shift + g</td>
                            <td>Cmd + Shift + g</td>
                            <td>Encontrar anterior</td>
                        </tr>
                        <tr>
                            <td>Ctrl + Shift + f</td>
                            <td>Cmd + Shift + f</td>
                            <td>Substituir</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Ferramenta de consulta</strong></li>
                </ul>
                <p class="Texto">Ao usar a Ferramenta de consulta, os seguintes atalhos estão disponíveis:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho (Windows/Linux)</th>
                            <th>Atalho (MAC)</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>F5</td>
                            <td>F5</td>
                            <td>Executar consulta</td>
                        </tr>
                        <tr>
                            <td>F6</td>
                            <td>F6</td>
                            <td>Salvar alterações de dados</td>
                        </tr>
                        <tr>
                            <td>F7</td>
                            <td>F7</td>
                            <td>EXPLICAR consulta</td>
                        </tr>
                        <tr>
                            <td>Shift + F7</td>
                            <td>Shift + F7</td>
                            <td>ANALISAR consulta</td>
                        </tr>
                        <tr>
                            <td>F8</td>
                            <td>F8</td>
                            <td>Executar consulta ao arquivo CSV</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + o</td>
                            <td>&lt;chave de acesso&gt; + o</td>
                            <td>Abrir arquivo</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + s</td>
                            <td>&lt;chave de acesso&gt; + s</td>
                            <td>Salvar</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + n</td>
                            <td>&lt;chave de acesso&gt; + n</td>
                            <td>Localizar opção suspensa</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + c</td>
                            <td>&lt;chave de acesso&gt; + c</td>
                            <td>Copiar linha(s)</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + p</td>
                            <td>&lt;chave de acesso&gt; + p</td>
                            <td>Colar linha(s)</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + d</td>
                            <td>&lt;chave de acesso&gt; + d</td>
                            <td>Excluir linha(s)</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + f</td>
                            <td>&lt;chave de acesso&gt; + f</td>
                            <td>Caixa de diálogo Filtrar</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + i</td>
                            <td>&lt;chave de acesso&gt; + i</td>
                            <td>Opções de filtro suspensas</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + r</td>
                            <td>&lt;chave de acesso&gt; + r</td>
                            <td>Limite de linha</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + q</td>
                            <td>&lt;chave de acesso&gt; + q</td>
                            <td>Cancelar consulta</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + l</td>
                            <td>&lt;chave de acesso&gt; + l</td>
                            <td>Limpar menu suspenso</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + x</td>
                            <td>&lt;chave de acesso&gt; + x</td>
                            <td>Executar opção suspensa</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + t</td>
                            <td>&lt;chave de acesso&gt; + t</td>
                            <td>Exibir status de conexão</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + y</td>
                            <td>&lt;chave de acesso&gt; + y</td>
                            <td>Copiar SQL no painel de histórico</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Depurador</strong></li>
                </ul>
                <p class="Texto">Ao usar o Depurador, os seguintes atalhos estão disponíveis:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho (Windows/Linux)</th>
                            <th>Atalho (MAC)</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&lt;chave de acesso&gt; + i</td>
                            <td>&lt;chave de acesso&gt; + i</td>
                            <td>Entrar</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + o</td>
                            <td>&lt;chave de acesso&gt; + o</td>
                            <td>Passar por cima</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + c</td>
                            <td>&lt;chave de acesso&gt; + c</td>
                            <td>Continuar/Reiniciar</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + t</td>
                            <td>&lt;chave de acesso&gt; + t</td>
                            <td>Alternar ponto de interrupção</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + x</td>
                            <td>&lt;chave de acesso&gt; + x</td>
                            <td>Limpar todos os pontos de interrupção</td>
                        </tr>
                        <tr>
                            <td>&lt;chave de acesso&gt; + s</td>
                            <td>&lt;chave de acesso&gt; + s</td>
                            <td>Pare</td>
                        </tr>
                        <tr>
                            <td>Alt + Shift + q</td>
                            <td>Opção + Shift + q</td>
                            <td>Insira ou edite valores na grade</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Navegação por aba interna e painel</strong></li>
                </ul>
                <p class="Texto">Ao usar a Ferramenta de consulta e o Depurador, os seguintes atalhos estão disponíveis para navegação no painel interno:</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho (Windows/Linux)</th>
                            <th>Atalho (MAC)</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alt + Shift + ]</td>
                            <td>Alt + Shift + ]</td>
                            <td>Mover para a próxima guia em um painel</td>
                        </tr>
                        <tr>
                            <td>Alt + Shift + [</td>
                            <td>Alt + Shift + [</td>
                            <td>Mover para a guia anterior em um painel</td>
                        </tr>
                        <tr>
                            <td>Alt + Shift + Tab</td>
                            <td>Alt + Shift + Tab</td>
                            <td>Mover entre os painéis internos</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="Texto">
                    <li><strong>Chave de acesso</strong></li>
                </ul>
                <p class="Texto">&lt;accesskey&gt; depende do navegador e da plataforma. A tabela a seguir lista as chaves de acesso padrão para navegadores compatíveis.</p>
                <br>
                <table border="1" cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Atalho (Windows/Linux)</th>
                            <th>Atalho (Mac)</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Internet Explorer: Alt + [chave de acesso]</td>
                            <td>Internet Explorer: Alt + [chave de acesso]</td>
                            <td>Ativa elementos da interface associados à chave de acesso configurada.</td>
                        </tr>
                        <tr>
                            <td>Safari: Alt + [chave de acesso]</td>
                            <td>Safari: Ctrl + Option + [chave de acesso]</td>
                            <td>Ativa elementos da interface associados à chave de acesso configurada.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>