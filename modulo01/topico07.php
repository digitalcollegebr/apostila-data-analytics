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
                <p class="Titulo">Data Modification Language - DML</p>
                <p class="Texto">O aplicativo a se modelar é um aplicativo semelhante ao Twitter, por exemplo, no qual temos usuários e esses podem enviar mensagens curtas, seguir outros usuários e, em seguida, podem ver o que esses enviaram. Começando com algo simples, tem-se:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>CREATE TABLE</strong></span> tweet.users (
    userid <span class="code-color"><strong>BIGSERIAL PRIMARY KEY</strong></span>,
    uname <span class="code-color"><strong>TEXT NOT NULL</strong></span>,
    nickname <span class="code-color"><strong>TEXT</strong></span>,
    bio <span class="code-color"><strong>TEXT</strong></span>,
    picture <span class="code-color"><strong>TEXT</strong></span>,
    <span class="code-color"><strong>UNIQUE</strong></span>(uname)
);

<span class="code-color"><strong>CREATE TABLE</strong></span> tweet.follower (
    follower <span class="code-color"><strong>BIGINT NOT NULL REFERENCES</strong></span> tweet.users(userid),
    following <span class="code-color"><strong>BIGINT NOT NULL REFERENCES</strong></span> tweet.users(userid),
    <span class="code-color"><strong>PRIMARY KEY</strong></span>(follower, following)
);

<span class="code-color"><strong>CREATE TABLE</strong></span> tweet.message (
    messageid <span class="code-color"><strong>BIGSERIAL PRIMARY KEY</strong></span>,
    userid <span class="code-color"><strong>BIGINT NOT NULL REFERENCES</strong></span> tweet.users(userid),
    datetime <span class="code-color"><strong>TIMESTAMPTZ NOT NULL DEFAULT NOW()</strong></span>,
    message <span class="code-color"><strong>TEXT NOT NULL</strong></span>,
    favs <span class="code-color"><strong>BIGINT</strong></span>,
    rts <span class="code-color"><strong>BIGINT</strong></span>,
    location <span class="code-color"><strong>POINT</strong></span>,
    lang <span class="code-color"><strong>TEXT</strong></span>,
    url <span class="code-color"><strong>TEXT</strong></span>
);
                </code></pre>
            </div>
            <br>
            <ul class="Texto">
                <li>Insert Into</li>
            </ul>
            <p class="Texto">Dado o modelo anterior de tweets, o primeiro elemento de que se precisa são os usuários. Veja como criar os primeiros usuários:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color">INSERT INTO</span> tweet.users (uname, bio)
<span class="code-color">VALUES</span> ('Egeus', 'father to #Hermia.'),
                                    ('Lysander', 'in love with #Hermia.'),
                                    ('Demetrius', 'in love with #Hermia.'),
                                    ('Philostrate', 'master of the revels to Theseus.'),
                                    ('Peter Quince', 'a carpenter.'),
                                    ('Snug', 'a joiner.'),
                                    ('Nick Bottom', 'a weaver.'),
                                    ('Francis Flute', 'a bellows-mender.'),
                                    ('Tom Snout', 'a tinker.'),
                                    ('Robin Starveling', 'a tailor.'),
                                    ('Hippolyta', 'queen of the Amazons, betrothed to Theseus.'),
                                    ('Hermia', 'daughter to Egeus, in love with Lysander.'),
                                    ('Helena', 'in love with Demetrius.'),
                                    ('Oberon', 'king of the fairies.'),
                                    ('Titania', 'queen of the fairies.'),
                                    ('Puck', 'or Robin Goodfellow.'),
                                    ('Peaseblossom', 'Team #Fairies'),
                                    ('Cobweb', 'Team #Fairies'),
                                    ('Moth', 'Team #Fairies'),
                                    ('Mustardseed', 'Team #Fairies'),
                                    ('All', 'Everyone speaking at the same time'),
                                    ('Fairy', 'One of them #Fairies'),
                                    ('Prologue', 'a play within a play'),
                                    ('Wall', 'a play within a play'),
                                    ('Pyramus', 'a play within a play'),
                                    ('Thisbe', 'a play within a play'),
                                    ('Lion', 'a play within a play'),
                                    ('Moonshine', 'a play within a play');
                </code></pre>
            </div>
            <br>
            <ul class="Texto">
                <li>Insert Into...Select</li>
            </ul>
            <p class="Texto">A instrução de inserção também pode usar uma consulta como fonte de dados. Pode-se, por exemplo, preencher a tabela tweet.follower com pessoas que são conhecidas por se amarem de seu campo bio.</p>
            <p class="Texto">Primeiro, precisa-se tirar esses dados dos campos previamente inseridos, que é a fonte de dados nesse caso.</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>SELECT</strong></span> users.userid <span class="code-color"><strong>AS</strong></span> follower,
                users.uname,
                f.userid <span class="code-color"><strong>AS</strong></span> following,
                f.uname
            <span class="code-color"><strong>FROM</strong></span> tweet.users
            <span class="code-color"><strong>JOIN</strong></span> tweet.users f
            <span class="code-color"><strong>ON</strong></span> f.uname = <span class="code-color"><strong>SUBSTRING</strong></span>(users.bio <span class="code-color"><strong>FROM</strong></span> 'in love with #?(.*).')
            <span class="code-color"><strong>WHERE</strong></span> users.bio ~ 'in love with';
                </code></pre>
            </div>
            <br>
            <p class="Texto">A substring aqui retorna apenas o grupo de correspondência de expressão regular, que passa a ser o nome de quem o usuário criado anteriormente ama. A consulta, então, resulta no seguinte:</p>
            <br>
            <table border="1" cellpadding="10" class="table">
                <thead>
                    <tr>
                        <th>Follower</th>
                        <th>Uname</th>
                        <th>Following</th>
                        <th>Uname</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Lysander</td>
                        <td>13</td>
                        <td>Hermia</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Demetrius</td>
                        <td>13</td>
                        <td>Hermia</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Hermia</td>
                        <td>3</td>
                        <td>Lysander</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Helena</td>
                        <td>4</td>
                        <td>Demetrius</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p class="Texto">Agora, tem-se que inserir o seguidor e seguir os dados na tabela tweet.follower, é claro. Como o inserção no comando sabe ler sua entrada a partir do resultado de uma instrução selecionada, é muito fácil de fazer. Veja:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
                    <span class="code-color"><strong>INSERT INTO</strong></span> tweet.follower
                    <span class="code-color"><strong>SELECT</strong></span> users.userid <span class="code-color"><strong>AS</strong></span> follower,
                        f.userid <span class="code-color"><strong>AS</strong></span> following
                    <span class="code-color"><strong>FROM</strong></span> tweet.users
                    <span class="code-color"><strong>JOIN</strong></span> tweet.users f
                    <span class="code-color"><strong>ON</strong></span> f.uname = <span class="code-color"><strong>SUBSTRING</strong></span>(users.bio <span class="code-color"><strong>FROM</strong></span> 'in love with #?(.*).')
                    <span class="code-color"><strong>WHERE</strong></span> users.bio ~ 'in love with';
                </code></pre>
            </div>
            <br>
            <p class="Texto">Agora, sobre essas fadas seguindo sua rainha e rei:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>WITH</strong></span> fairies <span class="code-color"><strong>AS</strong></span>
    (
        <span class="code-color"><strong>SELECT</strong></span> userid
        <span class="code-color"><strong>FROM</strong></span> tweet.users
        <span class="code-color"><strong>WHERE</strong></span> bio ~ '#Fairies'
    )
        <span class="code-color"><strong>INSERT INTO</strong></span> tweet.follower(follower, following)
        <span class="code-color"><strong>SELECT</strong></span> fairies.userid <span class="code-color"><strong>AS</strong></span> follower,
            users.userid <span class="code-color"><strong>AS</strong></span> following
        <span class="code-color"><strong>FROM</strong></span> fairies <span class="code-color"><strong>CROSS JOIN</strong></span> tweet.users
        <span class="code-color"><strong>WHERE</strong></span> users.bio ~ 'of the fairies';
                </code></pre>
            </div>
            <br>
            <p class="Texto">Desta vez, até se tem a oportunidade de usar um cross join, já que se quer produzir todas as diferentes combinações de uma fada com seus súditos reais.</p>
            <p class="Texto">Aqui está o que se tem configurado em termos de seguidores agora:</p>
            <br>
            <div class="typewriter-small" id="copycode">
    <button class="copy-btn" onclick="copyCode()">
        <i class="fas fa-copy"></i> Copiar
    </button>
    <pre><code class="Texto">
        <span class="code-color"><strong>SELECT</strong></span> follower.uname <span class="code-color"><strong>AS</strong></span> follower,
            follower.bio <span class="code-color"><strong>AS</strong></span> "follower's bio",
            following.uname <span class="code-color"><strong>AS</strong></span> following
        <span class="code-color"><strong>FROM</strong></span> tweet.follower <span class="code-color"><strong>AS</strong></span> follows
        <span class="code-color"><strong>JOIN</strong></span> tweet.users <span class="code-color"><strong>AS</strong></span> follower
        <span class="code-color"><strong>ON</strong></span> follows.follower = follower.userid
        <span class="code-color"><strong>JOIN</strong></span> tweet.users <span class="code-color"><strong>AS</strong></span> following
        <span class="code-color"><strong>ON</strong></span> follows.following = following.userid;
                </code></pre>
            </div>
            <br>
            <p class="Texto">E aqui está o que já foi configurado:</p>
            <br>
            <table border="1" cellpadding="10" class="table">
                <thead>
                    <tr>
                        <th>Follower</th>
                        <th>Follower's Bio</th>
                        <th>Following</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hermia</td>
                        <td>daughter to Egeus, in love with Lysander.</td>
                        <td>Lysander</td>
                    </tr>
                    <tr>
                        <td>Helena</td>
                        <td>in love with Demetrius.</td>
                        <td>Demetrius</td>
                    </tr>
                    <tr>
                        <td>Demetrius</td>
                        <td>in love with #Hermia</td>
                        <td>Hermia</td>
                    </tr>
                    <tr>
                        <td>Lysander</td>
                        <td>in love with #Hermia</td>
                        <td>Hermia</td>
                    </tr>
                    <tr>
                        <td>Peaseblossom</td>
                        <td>Team #Fairies</td>
                        <td>Oberon</td>
                    </tr>
                    <tr>
                        <td>Cobweb</td>
                        <td>Team #Fairies</td>
                        <td>Oberon</td>
                    </tr>
                    <tr>
                        <td>Moth</td>
                        <td>Team #Fairies</td>
                        <td>Oberon</td>
                    </tr>
                    <tr>
                        <td>Mustardseed</td>
                        <td>Team #Fairies</td>
                        <td>Oberon</td>
                    </tr>
                    <tr>
                        <td>Peaseblossom</td>
                        <td>Team #Fairies</td>
                        <td>Titania</td>
                    </tr>
                    <tr>
                        <td>Cobweb</td>
                        <td>Team #Fairies</td>
                        <td>Titania</td>
                    </tr>
                    <tr>
                        <td>Moth</td>
                        <td>Team #Fairies</td>
                        <td>Titania</td>
                    </tr>
                    <tr>
                        <td>Mustardseed</td>
                        <td>Team #Fairies</td>
                        <td>Titania</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <ul class="Texto">
                <li>Update</li>
            </ul>
            <p class="Texto">A instrução Update é usada para substituir os valores existentes no banco de dados. Seu aspecto mais importante está em seu comportamento de concorrência, pois permite substituir os valores existentes enquanto outros usuários estão trabalhando simultaneamente com o banco de dados.</p>
            <p class="Texto">No PostgreSQL, todos os recursos de concorrência são baseados no MVCC, e no caso da declaração de <span class="code-color"><strong>Update</strong></span> significa que internamente o PostgreSQL está fazendo tanto uma inserção dos novos dados quanto uma exclusão dos antigos. As colunas do sistema PostgreSQL xmin e xmax permitem o rastreamento de visibilidade das linhas para que a instrução simultânea tenha um instantâneo consistente do conjunto de dados do servidor o tempo todo.</p>
            <p class="Texto">Como o bloqueio de linha é feito por tupla no PostgreSQL, uma declaração de atualização só bloqueia outra atualização, exclui ou seleciona para instrução de atualização que visa à(s) mesma(s) linha(s).</p>
            <p class="Texto">Anteriormente, foram criados alguns usuários sem um apelido, e talvez seja hora de remediar isso, atribuindo-lhes seu nome como apelido por enquanto.</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>BEGIN</strong>;</span>
<span class="code-color"><strong>UPDATE</strong></span> tweet.users
<span class="code-color"><strong>SET</strong></span> nickname = <span class="code-color">'Robin Goodfellow'</span>
<span class="code-color"><strong>WHERE</strong></span> userid = 17 
    <span class="code-color"><strong>AND</strong></span> uname = <span class="code-color">'Puck'</span>
<span class="code-color"><strong>RETURNING</strong></span> users.*;
<span class="code-color"><strong>COMMIT</strong>;</span>
                </code></pre>
            </div>
            <br>
            <p class="Texto">Aqui escolhe-se o id 17 da tabela de uma forma manual. A ideia é mostrar como atualizar campos em uma única tupla de uma chave primária. Em muitos casos, o código deste aplicativo obteve o id anteriormente e o injetou na consulta de atualização.</p>
            <p class="Texto">E graças à cláusula de retorno, pode-se ver o que foi feito:</p>
            <br>
            <table border="1" cellpadding="10" class="table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Nickname</th>
                        <th>Bio</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>17</td>
                        <td>Puck</td>
                        <td>RobinGoodfellow or Robin Goodfellow</td>
                        <td>¤</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p class="Texto">Como você pode ver, na consulta anterior não só foi usado o campo-chave principal, mas também, como é uma chave, foi adicionado o valor real, que é o objeto de interesse. Se as informações tivessem sido coladas erroneamente, a atualização não encontraria linhas correspondentes e isso afetaria zero tuplas.</p>
            <p class="Texto">Agora há outro caso de uso para essa dupla verificação: a concorrência. Sabe-se que o apelido robin goodfellow se aplica a Puck. E se alguém atualizou o nome do Puck enquanto a declaração de atualização estava sendo executada? Com essa verificação dupla, sabe-se exatamente que um dos seguintes é verdadeiro:</p>
            <p class="Texto"><span class="code-color"><strong>1. </strong></span>Ou a outra declaração veio em primeiro lugar e o nome não é Puck e nenhuma linha foi atualizada.</p>
            <p class="Texto"><span class="code-color"><strong>2. </strong></span>A outra declaração virá mais tarde e apenas uma linha foi atualizada (que sabe-se que é user id 17, e chamado Puck).</p>
            <p class="Texto">Pense nesse truque ao lidar com a concorrência no código do seu aplicativo, e ainda mais quando você estiver corrigindo alguns dados do console para uma correção única. Em seguida, use sempre um bloco de transações explícito para que você possa verificar o que aconteceu e emitir uma reversão; quando não é o que você pensou.</p>
            <p class="Texto">Também se pode atualizar várias linhas ao mesmo tempo. Suponha-se que se quer adicionar um apelido padrão a todos esses personagens:</p>
            <br>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Userid</th>
                        <th>Uname</th>
                        <th>Nickname</th>
                        <th>Bio</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>17</td>
                        <td>Puck</td>
                        <td>RobinGoodfellow</td>
                        <td>or Robin Goodfellow</td>
                        <td>¤</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p class="Texto">E agora todos recebem um apelido adequado, computado a partir de seu nome de usuário com o truque fácil e prático que você pode ver na consulta. A principal informação a ser lembrada nessa consulta é que você pode usar os dados existentes em sua instrução UPDATE.</p>
            <p class="Texto">Agora, quem são os usuários do Twitter?</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> uname, nickname, bio
    <span class="code-color"><strong>FROM</strong></span> tweet.users
<span class="code-color"><strong>ORDER BY</strong></span> userid;
                </code></pre>
            </div>
            <br>
            <table border="1" cellpadding="10" class="table">
                <thead>
                    <tr>
                        <th>Uname</th>
                        <th>Nickname</th>
                        <th>Bio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Theseus</td>
                        <td>Duke</td>
                        <td>Theseus Duke of Athens.</td>
                    </tr>
                    <tr>
                        <td>Egeus</td>
                        <td>Egeus</td>
                        <td>father to #Hermia.</td>
                    </tr>
                    <tr>
                        <td>Lysander</td>
                        <td>Lysander</td>
                        <td>in love with #Hermia.</td>
                    </tr>
                    <tr>
                        <td>Demetrius</td>
                        <td>Demetrius</td>
                        <td>in love with #Hermia.</td>
                    </tr>
                    <tr>
                        <td>Philostrate</td>
                        <td>Philostrate</td>
                        <td>master of the revels to Theseus.</td>
                    </tr>
                    <tr>
                        <td>Peter Quince</td>
                        <td>Quince</td>
                        <td>a carpenter.</td>
                    </tr>
                    <tr>
                        <td>Snug</td>
                        <td>Snug</td>
                        <td>a joiner.</td>
                    </tr>
                    <tr>
                        <td>Nick Bottom</td>
                        <td>Bottom</td>
                        <td>a weaver.</td>
                    </tr>
                    <tr>
                        <td>Francis Flute</td>
                        <td>Flute</td>
                        <td>a bellows-mender.</td>
                    </tr>
                    <tr>
                        <td>Tom Snout</td>
                        <td>Snout</td>
                        <td>a tinker.</td>
                    </tr>
                    <tr>
                        <td>Robin Starveling</td>
                        <td>Starveling</td>
                        <td>a tailor.</td>
                    </tr>
                    <tr>
                        <td>Hippolyta</td>
                        <td>Hippolyta</td>
                        <td>queen of the Amazons, betrothed to Theseus.</td>
                    </tr>
                    <tr>
                        <td>Hermia</td>
                        <td>Hermia</td>
                        <td>daughter to Egeus, in love with Lysander.</td>
                    </tr>
                    <tr>
                        <td>Helena</td>
                        <td>Helena</td>
                        <td>in love with Demetrius.</td>
                    </tr>
                    <tr>
                        <td>Oberon</td>
                        <td>Oberon</td>
                        <td>king of the fairies.</td>
                    </tr>
                    <tr>
                        <td>Titania</td>
                        <td>Titania</td>
                        <td>queen of the fairies.</td>
                    </tr>
                    <tr>
                        <td>Puck</td>
                        <td>Robin Goodfellow</td>
                        <td>or Robin Goodfellow.</td>
                    </tr>
                    <tr>
                        <td>Peaseblossom</td>
                        <td>Peaseblossom</td>
                        <td>Team #Fairies.</td>
                    </tr>
                    <tr>
                        <td>Cobweb</td>
                        <td>Cobweb</td>
                        <td>Team #Fairies.</td>
                    </tr>
                    <tr>
                        <td>Moth</td>
                        <td>Moth</td>
                        <td>Team #Fairies.</td>
                    </tr>
                    <tr>
                        <td>Mustardseed</td>
                        <td>Mustardseed</td>
                        <td>Team #Fairies.</td>
                    </tr>
                    <tr>
                        <td>All</td>
                        <td>All</td>
                        <td>Everyone speaking at the same time.</td>
                    </tr>
                    <tr>
                        <td>Fairy</td>
                        <td>Fairy</td>
                        <td>One of them #Fairies.</td>
                    </tr>
                    <tr>
                        <td>Prologue</td>
                        <td>Prologue</td>
                        <td>a play within a play.</td>
                    </tr>
                    <tr>
                        <td>Wall</td>
                        <td>Wall</td>
                        <td>a play within a play.</td>
                    </tr>
                    <tr>
                        <td>Pyramus</td>
                        <td>Pyramus</td>
                        <td>a play within a play.</td>
                    </tr>
                    <tr>
                        <td>Thisbe</td>
                        <td>Thisbe</td>
                        <td>a play within a play.</td>
                    </tr>
                    <tr>
                        <td>Lion</td>
                        <td>Lion</td>
                        <td>a play within a play.</td>
                    </tr>
                    <tr>
                        <td>Moonshine</td>
                        <td>Moonshine</td>
                        <td>a play within a play.</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p class="Texto">Inserindo alguns Tweets</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color">&lt;PLAYSUBT&gt;</span>A MIDSUMMER NIGHT'S DREAM<span class="code-color">&lt;/PLAYSUBT&gt;</span>
            <span class="code-color">&lt;ACT&gt;</span>
                <span class="code-color">&lt;TITLE&gt;</span>ACT I<span class="code-color">&lt;/TITLE&gt;</span>
                <span class="code-color">&lt;SCENE&gt;</span>
                    <span class="code-color">&lt;TITLE&gt;</span>SCENE I. Athens. The palace of THESEUS.<span class="code-color">&lt;/TITLE&gt;</span>
                    <span class="code-color">&lt;STAGEDIR&gt;</span>
                        Enter THESEUS, HIPPOLYTA, PHILOSTRATE, and Attendants
                    <span class="code-color">&lt;/STAGEDIR&gt;</span>
                    <span class="code-color">&lt;SPEECH&gt;</span>
                        <span class="code-color">&lt;SPEAKER&gt;</span>THESEUS<span class="code-color">&lt;/SPEAKER&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Now, fair Hippolyta, our nuptial hour<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Draws on apace; four happy days bring in<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Another moon: but, O, methinks, how slow<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>This old moon wanes! she lingers my desires,<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Like to a step-dame or a dowager<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Long withering out a young man revenue.<span class="code-color">&lt;/LINE&gt;</span>
                    <span class="code-color">&lt;/SPEECH&gt;</span>
                    <span class="code-color">&lt;SPEECH&gt;</span>
                        <span class="code-color">&lt;SPEAKER&gt;</span>HIPPOLYTA<span class="code-color">&lt;/SPEAKER&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Four days will quickly steep themselves in night;<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Four nights will quickly dream away the time;<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>And then the moon, like to a silver bow<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>New-bent in heaven, shall behold the night<span class="code-color">&lt;/LINE&gt;</span>
                        <span class="code-color">&lt;LINE&gt;</span>Of our solemnities.<span class="code-color">&lt;/LINE&gt;</span>
                    <span class="code-color">&lt;/SPEECH&gt;</span>
                <span class="code-color">&lt;/SCENE&gt;</span>
            <span class="code-color">&lt;/ACT&gt;</span>
                </code></pre>
            </div>
            <br>
            <p class="Texto">Para que os personagens da reprodução twittem suas linhas, é necessário escrever um simples analisador XML para o formato e usar o comando de inserção SQL. Extraído do código usado para inserir os dados, aqui está a consulta de inserção:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>INSERT INTO</strong></span> tweet.message(userid, message)
<span class="code-color"><strong>SELECT</strong></span> userid, $2
<span class="code-color"><strong>FROM</strong></span> tweet.users
<span class="code-color"><strong>WHERE</strong></span> users.uname = $1 <span class="code-color"><strong>OR</strong></span> users.nickname = $1;
                </code></pre>
            </div>
            <br>
            <p class="Texto">Como o texto da peça usa nomes como <span class="code-color"><strong>&lt;SPEAKER&gt;</strong></span>QUINCE<span class="code-color"><strong>&lt;/SPEAKER&gt;</strong></span> e foram inseridos nomes reais no banco de dados, deve-se combinar o conteúdo XML do jogo com o uname ou o campo de apelidos.</p>
            <p class="Texto">Agora que os dados estão carregados, pode-se dar uma olhada no início da peça em SQL.</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> uname, message
<span class="code-color"><strong>FROM</strong></span> tweet.message
<span class="code-color"><strong>LEFT JOIN</strong></span> tweet.users <span class="code-color"><strong>USING</strong></span>(userid)
<span class="code-color"><strong>ORDER BY</strong></span> messageid <span class="code-color"><strong>LIMIT</strong></span> 4;
                </code></pre>
            </div>
            <br>
            <p class="Texto">E sim, agora pode-se ver, por exemplo, Shakespeare tuitando:</p>
            <br>
            <table border="1" cellpadding="10" class="table">
                <thead>
                    <tr>
                        <th>Uname</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Theseus</td>
                        <td>
                            Now, fair Hippolyta, our nuptial hour<br>
                            Draws on apace; four happy days bring in<br>
                            Another moon: but, O, methinks, how slow<br>
                            This old moon wanes! she lingers my desires,<br>
                            Like to a step-dame or a dowager<br>
                            Long withering out a young man revenue.
                        </td>
                    </tr>
                    <tr>
                        <td>Hippolyta</td>
                        <td>
                            Four days will quickly steep themselves in night;<br>
                            Four nights will quickly dream away the time;<br>
                            And then the moon, like to a silver bow<br>
                            New-bent in heaven, shall behold the night<br>
                            Of our solemnities.
                        </td>
                    </tr>
                    <tr>
                        <td>Theseus</td>
                        <td>
                            Go, Philostrate,<br>
                            Stir up the Athenian youth to merriments;<br>
                            Awake the pert and nimble spirit of mirth;<br>
                            Turn melancholy forth to funerals;<br>
                            The pale companion is not for our pomp.<br>
                            Hippolyta, I woo'd thee with my sword,<br>
                            And won thy love, doing thee injuries;<br>
                            But I will wed thee in another key,<br>
                            With pomp, with triumph and with revelling.
                        </td>
                    </tr>
                    <tr>
                        <td>Egeus</td>
                        <td>Happy be Theseus, our renowned duke!</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <ul class="Texto">
                <li>Delete</li>
            </ul>
            <p class="Texto">A instrução de exclusão permite marcar tuplas para remoção. Dada a implementação do MVCC pelo PostgreSQL, não seria sábio remover a tupla do disco no momento da exclusão:</p>
            <p class="Texto"><span class="code-color"><strong>1. </strong></span>Primeiro, a transação pode reverter e ainda não se sabe;</p>
            <p class="Texto"><span class="code-color"><strong>2. </strong></span>Em segundo lugar, outras transações simultâneas só podem ver a exclusão após o commit, não assim que a declaração for feita.</p>
            <p class="Texto">Assim como na declaração de atualização, a parte mais importante da declaração de exclusão tem a ver com a concorrência. Mais uma vez, a principal razão pela qual se usa um RDBMS é para que não se tenha que resolver os problemas de concorrência no código do aplicativo feito, em vez disso, pode- se concentrar-se em oferecer uma melhor experiência ao usuário.</p>
            <p class="Texto">Diga-se que, por engano, foram adicionados personagens de outra peça, e não se quer ter que lidar com eles. Primeiro, inserindo-os:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
            <span class="code-color"><strong>INSERT</strong> <span class="code-color"><strong>INTO</strong></span> tweet.users <span class="code-color"><strong>(uname, bio)</strong></span></span>
            <span class="code-color"><strong>VALUES</strong></span> ('CLAUDIUS', 'king of Denmark.'),
                    ('HAMLET', 'son to the late, and nephew to the present king'),
                    ('POLONIUS', 'lord chamberlain.'),
                    ('HORATIO', 'friend to Hamlet'),
                    ('LAERTES', 'son to Polonius'),
                    ('LUCIANUS', 'nephew to the king');
                </code></pre>
            </div>
            <br>
            <p class="Texto">A sintaxe de exclusão é bastante simples:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>BEGIN</strong>;</span>
<span class="code-color"><strong>DELETE</strong></span>
<span class="code-color"><strong>FROM</strong></span> tweet.users
<span class="code-color"><strong>WHERE</strong></span> userid = 22 
<span class="code-color"><strong>AND</strong></span> uname = <span class="code-color">'CLAUDIUS'</span>
<span class="code-color"><strong>RETURNING</strong></span> *;
<span class="code-color"><strong>COMMIT</strong>;</span>
                </code></pre>
            </div>
            <br>
            <p class="Texto">E como de costume, graças à cláusula de retorno, sabe-se exatamente o que acabou-se de marcar para a exclusão:</p>
            <br>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Userid</th>
                        <th>Uname</th>
                        <th>Nickname</th>
                        <th>Bio</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>22</td>
                        <td>Claudius</td>
                        <td>¤</td>
                        <td>king of Denmark.</td>
                        <td>¤</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p class="Texto">Agora também se pode excluir mais de uma linha com o mesmo comando - tudo depende do que foi combinado. Como os novos caracteres inseridos por engano não tinham um papel na peça de onde foram inseridas as mensagens criadas, então pode-se usar uma anti-join para excluí-las com base nessas informações:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>BEGIN</strong>;</span>
<span class="code-color"><strong>WITH</strong> deleted_rows <span class="code-color"><strong>AS</strong></span></span>
(
    <span class="code-color"><strong>DELETE</strong></span>
    <span class="code-color"><strong>FROM</strong></span> tweet.users
    <span class="code-color"><strong>WHERE</strong></span> <span class="code-color"><strong>NOT EXISTS</strong></span>
    (
        <span class="code-color"><strong>SELECT</strong> 1</span>
        <span class="code-color"><strong>FROM</strong></span> tweet.message
        <span class="code-color"><strong>WHERE</strong></span> userid = users.userid
    )
    <span class="code-color"><strong>RETURNING</strong></span> *
)
<span class="code-color"><strong>SELECT</strong> <span class="code-color"><strong>MIN</strong></span>(userid), <span class="code-color"><strong>MAX</strong></span>(userid),
<span class="code-color"><strong>COUNT</strong>(*)</span>,
<span class="code-color"><strong>ARRAY_AGG</strong>(uname)</span>
<span class="code-color"><strong>FROM</strong></span> deleted_rows;
<span class="code-color"><strong>COMMIT</strong>;</span>
                </code></pre>
            </div>
            <br>
            <p class="Texto">E, como esperado, tem-se um bom resumo do que foi feito. Essa deve ser agora a sua sintaxe padrão para qualquer exclusão que você pretenda executar interativamente em qualquer banco de dados, certo?</p>
            <br>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Min</th>
                        <th>Max</th>
                        <th>Count</th>
                        <th>Array_Agg</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>41</td>
                        <td>45</td>
                        <td>5</td>
                        <td>{HAMLET, POLONIUS, HORATIO, LAERTES, LUCIANUS}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <ul class="Texto">
                <li>Excluindo todas as linhas: Truncate</li>
            </ul>
            <p class="Texto">PostgreSQL adiciona às instruções DML o comando truncate. Internamente, é considerado um DDL em vez de um DML. É uma maneira muito eficiente de limpar uma tabela de todo o seu conteúdo de uma só vez, pois não segue o sistema MVCC por tupla e simplesmente removerá os arquivos de dados em disco.</p>
            <p class="Texto">Observe que o comando truncate ainda está em conformidade com o MVCC:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>SELECT</strong></span> count(*) <span class="code-color"><strong>FROM</strong></span> foo;
<span class="code-color"><strong>BEGIN</strong>;</span>
<span class="code-color"><strong>TRUNCATE</strong></span> foo;
<span class="code-color"><strong>ROLLBACK</strong></span>;
<span class="code-color"><strong>SELECT</strong></span> count(*) <span class="code-color"><strong>FROM</strong></span> foo;
                </code></pre>
            </div>
            <br>
            <p class="Texto">Supondo que não haja atividade simultânea em seu sistema ao executar os comandos, ambas as consultas de contagem retornam naturalmente ao mesmo número.</p>
            <ul class="Texto">
                <li>Excluir, mas manter algumas linhas</li>
            </ul>
            <p class="Texto">Ao limpar um conjunto de dados, pode acontecer que você queira remover a maior parte do conteúdo de uma tabela. Pode ser uma tabela de registros, uma trilha de auditoria que expirou ou algo assim. Como foi visto anteriormente ao usar postgreSqL, marque as tuplas como não sendo mais visíveis e, em seguida, o Vacuum faz o levantamento pesado no fundo. É, então, mais eficiente criar uma tabela contendo apenas as novas linhas e trocá-la com a tabela antiga:</p>
            <br>
            <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i> Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>BEGIN</strong>;</span>
<span class="code-color"><strong>CREATE</strong></span> table new_name (like name including all);
<span class="code-color"><strong>INSERT</strong></span> into new_name
<span class="code-color"><strong>SELECT</strong></span> &lt;column list&gt;
<span class="code-color"><strong>FROM</strong></span> name
<span class="code-color"><strong>WHERE</strong></span> &lt;restrictions&gt;;
<span class="code-color"><strong>DROP</strong></span> table name;
<span class="code-color"><strong>ALTER</strong></span> table new_name <span class="code-color"><strong>RENAME</strong></span> to name;
<span class="code-color"><strong>COMMIT</strong>;</span>
                </code></pre>
            </div>
            <br>
            <p class="Texto">No caso geral, assim que você remover a maioria das entradas da sua tabela, esse método será mais eficiente. O problema com ele é o nível de bloqueio necessário para executar a tabela de queda e as declarações de tabela de alteração.</p>
            <p class="Texto">Esses DDL requerem um bloqueio exclusivo de acesso e bloquearão qualquer tráfego de leitura e gravação para ambas as tabelas enquanto elas são executadas. Se você não tem horas lentas ou mesmo fora do horário de expediente, então pode não ser viável para você usar este truque.</p>
            <p class="Texto">A parte boa sobre excluir e aspirar é que essas funções podem correr no meio de qualquer tráfego simultâneo, é claro.</p>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>