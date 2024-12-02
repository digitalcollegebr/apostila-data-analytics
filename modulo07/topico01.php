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
                <p class="Titulo">Extração, Transformação e Carga - ETL</p>
                <p class="Subtopico"><strong>1. Introdução</strong></p>
                <p class="Texto">
                    O <em>Pentaho Data Integration (PDI)</em> é o componente da suíte <span class="code-color"><strong>Pentaho</strong></span> usado para
                    criar processos de extração, transformação e carga (do inglês <span class="code-color"><strong>ETL</strong></span> – <em><strong>Extract,
                    Transform and Load</strong></em>) que alimentam um outro banco de dados, como, por
                    exemplo, um <em>Data Warehouse</em>. Com o <em>Pentaho Data Integration</em> é possível fazer
                    inúmeras operações de Integração de Dados, como:
                </p>
                <ul>
                    <li><p class="Texto">Migração de dados;</p></li>
                    <li><p class="Texto">Movimentação de grandes volumes de dados;</p></li>
                    <li><p class="Texto">Transformação de dados;</p></li>
                    <li><p class="Texto">Limpeza de dados;</p></li>
                    <li><p class="Texto">Conformidade de dados.</p></li>
                </ul>
                <p class="Texto">
                    O PDI é formado por duas categorias de artefatos, <strong>Transformações</strong> e <strong>Jobs</strong> , e
                    estes são construídos por meio de sua interface gráfica, o <em>Spoon</em>. O <span class="code-color">Spoon</span>  tem
                    como objetivo facilitar a concepção de rotinas e a lógica ETL.
                </p>
                <p class="Subsubtopico"><strong><span class="code-color">Transformações</span></strong></p>
                <p class="Texto">
                    Uma transformação registra o passo a passo de como a extração ou leitura de
                    uma fonte de informação é realizada. É a transformação que opera sobre os
                    dados. Ela pode conter:
                </p>
                <ul>
                    <li><p class="Texto">Leitura de dados de uma tabela, de um banco de dados;</p></li>
                    <li><p class="Texto">Seleção de campos específicos de uma tabela;</p></li>
                    <li><p class="Texto">Concatenação de valores de dois campos distintos de uma tabela;</p></li>
                    <li><p class="Texto">Divisão de valores contidos em um único campo, gerando dois ou mais novos campos ou linhas;</p></li>
                    <li><p class="Texto"><em>Merge</em> de dados de tabelas contidas em bancos de dados diferentes;</p></li>
                    <li><p class="Texto"><em>Merge</em> de dados originados em tabelas, arquivos XML, TXT ou CSV, dentre outras fontes de dados;</p></li>
                    <li><p class="Texto">Aplicação de expressões regulares em texto para limpeza.</p></li>
                </ul>
                <p class="Texto">
                    O aspecto mais importante em uma transformação é que ela opera todas as
                    etapas simultaneamente – uma transformação não tem início ou fim, ela apenas
                    processa linhas que chegam.
                </p>
                <p class="Subsubtopico"><strong><span class="code-color">Jobs</span></strong></p>
                <p class="Texto">
                    Um <strong>Job</strong> é uma sequência de operações. Ao contrário de uma transformação, que
                    opera sobre as linhas de dados em paralelo, um <strong>Job</strong> realiza operações completas,
                    uma por uma. Ele permite, por exemplo, combinar transformações em uma
                    sequência específica e, com isto, automatizar uma determinada tarefa. Por sua
                    natureza, ele não fornece muitos recursos técnicos para manusear os dados em
                    si, deixando isto a cargo das transformações.
                </p>
                <p class="Texto">Abaixo, as principais características de <strong>JOBs</strong> e <strong>Transformações</strong>.</p>
                <table>
                    <thead>
                        <tr>
                            <th>JOB (*.kjb)</th>
                            <th>Transformação (*.ktr)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Passos são executados sequencialmente.</td>
                            <td>Passos são executados simultaneamente.</td>
                        </tr>
                        <tr>
                            <td>Opera sobre o fluxo de ações</td>
                            <td>Opera sobre as linhas de dados</td>
                        </tr>
                        <tr>
                            <td>Organização</td>
                            <td>Transformação</td>
                        </tr>
                        <tr>
                            <td>Mover arquivos<br>Criar/apagar tabelas<br>Testar condições</td>
                            <td>Cálculos<br>Carga de Dados<br>Aplicação de regras de negócio</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="Texto">
                    O Spoon, porém, é só a interface gráfica para criar os processos de integração de
                    dados. Ele não serve para executá-los em produção, ou seja, no ambiente sem
                    supervisão humana. Para isso usamos outros programas, que operam em linha
                    de comando, sem interface gráfica. O Pan é o programa que executa
                    transformações. Vale a pena mencionar que tanto jobs quanto transformações
                    podem ser arquivos em um sistema de arquivos normal, ou em um repositório
                    em banco de dados. O Pan pode executar uma transformação a partir de
                    qualquer uma dessas origens.
                </p>
                <img src="../assets\img\1b934236-eb67-4eb3-a203-657d20be3d56.webp" alt="" class="example-images">
                <p class="Texto">
                    Em geral, as transformações executadas pelo Pan são agendadas em modo <span class="code-color"><em>batch</em></span>,
                    para que possam ser executadas automaticamente em intervalos regulares por
                    alguma ferramenta de gerenciamento de tarefas como o <span class="code-color"><em>crontab</em></span> por exemplo.
                </p>
                <p class="Texto">
                    Enquanto o Pan executa transformações, o Kitchen executa jobs. Tal qual ocorre
                    com o Pan, o Kitchen pode executar jobs a partir de um sistema de arquivos ou
                    de um repositório em banco de dados.
                </p>
                <p class="Texto">
                    Novamente, tal qual o Pan, jobs são executados em modo <span class="code-color"><em>batch</em></span> por meio do
                    agendamento no modo <span class="code-color"><em>batch</em></span> para serem executados automaticamente em
                    intervalos regulares por alguma ferramenta de gerenciamento de tarefas, como o
                    <span class="code-color"><em>crontab</em></span>, por exemplo.
                </p>
                <p class="Texto">
                    A tríade Spoon, Pan e Kitchen são os responsáveis pela criação e a execução de
                    artefatos criados para solucionar um problema de extração, transformação e
                    carga de dados em um projeto de ETL com o <strong>Pentaho Data Integration</strong>.
                </p>
                
                <img src="../assets\img\Captura de tela 2024-10-22 135235.png" alt="" class="example-images">
                <a href="topico02.php" class="button-prox-atv"><img src="../assets/img/arrow-right.png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
                
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>