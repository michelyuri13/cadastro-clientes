<?php
if ($_POST) {
  print_r($_POST);
  exit;
}

?>
<style>

</style>

<?php

$dados[] = [
  'nome' => 'Michel 1',
  'sobrenome' => 'Costa',
  'nascimento' => 1995,
  'email' => 'yuridamasceno@hotmail.com'
];

$dados[] = ['nome' => 'Michel 2', 'sobrenome' => 'Costa', 'nascimento' => 1995, 'email' => 'yuridamasceno@hotmail.com'];
$dados[] = ['nome' => 'Michel 3', 'sobrenome' => 'Costa', 'nascimento' => 1995, 'email' => 'yuridamasceno@hotmail.com'];
$dados[] = ['nome' => 'Michel 4', 'sobrenome' => 'Costa', 'nascimento' => 1995, 'email' => 'yuridamasceno@hotmail.com'];
$dados[] = ['nome' => 'Michel 5', 'sobrenome' => 'Costa', 'nascimento' => 1995, 'email' => 'yuridamasceno@hotmail.com'];


//echo '<pre>';
//var_dump($dados);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="formulario.css" class="css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

  <title>Lista de filmes</title>


</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Cadastro de Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista-cliente.php">Lista de Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista-filmes.php">Cadastro de Filme</a>
          </li>

        </ul>
      </div>
    </nav>
    <style>
      .titulo {
        font-family: sans-serif;
        color: #380B61;
        margin-left: 7%;
        margin-bottom: 20px;
      }

      .filme {
        margin-left: 15px;
        margin-right: 200px;
      }

      .texto {
        font-family: calibri;
        font-size: 20px;
      }
    </style>

    <?php
    $filmes[] = ['nome' => 'GLADIADOR', 'ano' => '2000'];

    $filmes[] = ['nome' => 'TOP GUN: MAVERICK', 'ano' => '2022'];

    $filmes[] = ['nome' => 'AVATAR: O CAMINHO DA ÁGUA', 'ano' => '2022'];

    $filmes[] = ['nome' => 'CREED III', 'ano' => '2023'];

    $filmes[] = ['nome' => 'MINHA MÃE É UMA PEÇA - O FILME', 'ano' => '2013'];

    $filmes[] = ['nome' => 'FROZEN - UMA AVENTURA CONGELANTE', 'ano' => '2014'];

    $filmes[] = ['nome' => 'TITANIC', 'ano' => '1998'];

    $filmes[] = ['nome' => 'CINQUENTA TONS DE CINZA', 'ano' => '2015'];

    $filmes[] = ['nome' => 'DRAGON BALL Z: A BATALHA DOS DEUSES', 'ano' => '2013'];

    $filmes[] = ['nome' => 'O PODEROSO CHEFÃO', 'ano' => '1972'];

    $filmes[] = ['nome' => 'CAPITÃES DA AREIA', 'ano' => '2011'];

    ?>
  </header>


  <section id="destaques">
    <h1 class="titulo">Lista de filmes</h1> <br><br>

    <div class="filme">
      <img src="https://image.tmdb.org/t/p/original/eCtXglAv7awP4GlhekwaUfex4qW.jpg" alt="" width="150" height="200">
      <h3 class="nome">GLADIADOR</h3>
      <h5>Sinopse</h5>
      <p class="texto">Nos dias finais do reinado de Marcus Aurelius, o imperador desperta a ira de seu filho
        Commodus ao tornar pública sua predileção em deixar o trono para Maximus, o
        comandante do exército romano. Sedento pelo poder, Commodus mata seu pai, assume a coroa e ordena a morte de
        Maximus, que consegue fugir antes de ser pego e passa a se esconder sob a identidade de um escravo e gladiador
        do Império Romano.</p>
      <p><strong> Gênero:</strong> Ação <br>
      <p class="ano"> <strong>Data de lançamento - </strong> 19 de maio de 2000</p>
      </p><a href="https://www.adorocinema.com/filmes/filme-24944/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="https://www.avionslegendaires.net/wp-content/uploads/2020/04/Top-Gun-Maverick-couverture_IMDB.jpg"
        alt="" width="200" height="100">
      <h3 class="nome">TOP GUN: MAVERICK</h3>
      <h5>Sinopse</h5>
      <p class="texto">Na sequência de Top Gun: Ases Indomáveis, acompanhamos a história de Pete “Maverick” Mitchell, um
        piloto à moda antiga da Marinha que coleciona muitas condecorações, medalhas de combate e grande reconhecimento
        pela quantidade de aviões inimigos abatidos nos últimos 30 anos. Entretanto, nada disso foi suficiente para sua
        carreira decolar, visto que ele deixou de ser um capitão e tornou-se um instrutor. A explicação para esse
        declínio é simples: Ele continua sendo o mesmo piloto rebelde de sempre, que não hesita em romper os limites e
        desafiar a morte. Nesta nova aventura, Maverick precisa provar que o fator humano ainda é fundamental no mundo
        contemporâneo das guerras tecnológicas. Após 34 anos do clássico, acompanhem o filme do premiado produtor Jerry
        Bruckheimer e de Joseph Kosinski, mesmo diretor de Tron: O Legado (2010) e Oblivion (2013).</p>
      <p> <strong>Gênero: </strong> Ação </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 26 de maio de 2022</p>
      <a href="https://www.adorocinema.com/filmes/filme-186636/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="https://br.web.img2.acsta.net/pictures/22/11/03/09/13/1609536.jpg" alt="" width="150" height="200">
      <h3 class="nome">AVATAR: O CAMINHO DA ÁGUA</h3>
      <h5>Sinopse</h5>
      <p class="texto">Em Avatar: O Caminho da Água, sequência de Avatar (2009), após dez anos da primeira batalha de
        Pandora entre os
        Na'vi e os humanos, Jake Sully vive pacificamente com sua família e sua tribo. Ele e Ney'tiri
        formaram uma família e estão fazendo de tudo para ficarem juntos, devido a problemas conjugais e papéis que cada
        um tem que exercer dentro da tribo. No entanto, eles devem sair de casa e explorar as regiões de Pandora, indo
        para o mar e fazendo pactos com outros Na'vi da região. Quando uma antiga ameaça ressurge, Jake deve travar uma
        guerra difícil contra os humanos novamente. Mesmo com dificuldade, Jake acaba fazendo novos aliados - alguns dos
        quais já vivem entre os Na'vi e outros com novos avatares. Mesmo com uma guerra em curso, Jake e Ney'tiri terão
        que fazer de tudo para ficarem juntos e cuidar da família e de sua tribo.</p>
      <p> <strong>Gênero: </strong> Aventura, Fantasia, Ação </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 15 de dezembro de 2022</p>
      <a href="https://www.adorocinema.com/filmes/filme-178014/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img
        src="https://m.media-amazon.com/images/M/MV5BZDNlZmRkM2UtZTBiYy00YTlhLThkZmEtM2YwY2FkMTUwZjViXkEyXkFqcGdeQXVyMTMzNDE5NDM2._V1_FMjpg_UX1000_.jpg"
        alt="" width="150" height="200">
      <h3 class="nome">CREED III</h3>
      <h5>Sinopse</h5>
      <p class="texto">Em Creed III, continuação do longa de 2018, Michael B. Jordan volta a interpretar Adonis Creed.
        Depois de
        dominar o mundo do boxe, Adonis Creed vem prosperando tanto na carreira quanto na vida familiar. Quando um amigo
        de infância e ex-prodígio do boxe, Damian, ressurge depois de cumprir uma longa sentença na
        prisão, ele está ansioso para provar que merece sua chance no ringue. Damian pede a ajuda de Creed para que ele
        o ajude a voltar para os campeonatos de luta. Apesar de tudo, dezoito anos na prisão mudam a pessoa e Damian não
        está nada satisfeito que Creed "tomou seu lugar" no ringue de boxe. Dois velhos amigos então vão lutar para
        enfrentar seus passados juntos e enfrentar o futuro que os aguarda. Para acertar as contas, Adonis deve colocar
        seu futuro em risco para lutar contra Damian - um lutador que não tem nada a perder.</p>
      <p> <strong>Gênero: </strong> Drama </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 02 de março de 2023</p>
      <a href="https://www.adorocinema.com/filmes/filme-277129/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="" alt="https://limaomecanico.com.br/wp-content/uploads/2019/09/Minha-M%C3%A3e-%C3%A9-uma-Pe%C3%A7a.jpg"
        width="100" height="100">
      <h3 class="nome">MINHA MÃE É UMA PEÇA - O FILME</h3>
      <h5>Sinopse</h5>
      <p class="texto">Dona Hermínia é uma mulher de meia idade, divorciada do marido, que a trocou por
        uma mais jovem. Hiperativa, ela não larga o pé de seus filhos Marcelina e
        Juliano, sem se dar conta que eles já estão bem grandinhos. Um dia, após descobrir que eles
        consideram ela uma chata, resolve sair de casa sem avisar para ninguém, deixando todos, de alguma forma,
        preocupados com o que teria acontecido. Mal sabem eles que a mãe foi visitar a querida tia Zélia para desabafar
        com ela suas tristezas do presente e recordar os bons tempos do passado.</p>
      <p> <strong>Gênero: </strong> Comédia</p>
      <p class="ano"> <strong>Data de lançamento - </strong> 21 de junho de 2013</p>
      <a href="https://www.adorocinema.com/filmes/filme-215671/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="https://i.pinimg.com/originals/4f/57/20/4f5720285fd689359ec56c3150d8dc0a.jpg" alt="" width="150"
        height="200">
      <h3 class="nome">FROZEN - UMA AVENTURA CONGELANTE</h3>
      <h5>Sinopse</h5>
      <p class="texto">A caçula Anna adora sua irmã Elsa, mas um acidente
        envolvendo os poderes especiais da mais velha, durante a infância, fez com que os pais as mantivessem afastadas.
        Após a morte deles, as duas cresceram isoladas no castelo da família, até o dia em que Elsa deveria assumir o
        reinado de Arendell. Com o reencontro das duas, um novo acidente acontece e ela decide partir para sempre e se
        isolar do mundo, deixando todos para trás e provocando o congelamento do reino. É quando Anna decide se
        aventurar pelas montanhas de gelo para encontrar a irmã e acabar com o frio.</p>
      <p> <strong>Gênero: </strong> Animação, Aventura, Musical </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 03 de janeiro de 2014</p>
      <a href="https://www.adorocinema.com/filmes/filme-203691/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="https://i.pinimg.com/originals/75/1f/54/751f5482facac19cff49ca5e0a0861cf.jpg" alt="" width="150"
        height="200">
      <h3 class="nome">TITANIC</h3>
      <h5>Sinopse</h5>
      <p class="texto">Jack Dawson é um jovem aventureiro que, na mesa de jogo, ganha uma passagem para a primeira
        viagem do transatlântico Titanic. Trata-se de um luxuoso e imponente navio, anunciado na época como inafundável,
        que parte para os Estados Unidos. Nele está também Rose DeWitt Bukater, a jovem noiva de Caledon
        Hockley. Rose está descontente com sua vida, já que sente-se sufocada pelos costumes da elite e não
        ama Caledon. Entretanto, ela precisa se casar com ele para manter o bom nome da família, que está falida. Um
        dia, desesperada, Rose ameaça se atirar do Titanic, mas Jack consegue demovê-la da ideia. Pelo ato ele é
        convidado a jantar na primeira classe, onde começa a se tornar mais próximo de Rose. Logo eles se apaixonam,
        despertando a fúria de Caledon. A situação fica ainda mais complicada quando o Titanic se choca com um iceberg,
        provocando algo que ninguém imaginava ser possível: o naufrágio do navio.</p>
      <p> <strong>Gênero: </strong> Drama, Romance</p>
      <p class="ano"> <strong>Data de lançamento - </strong> 16 de janeiro de 1998</p>
      <a href="https://www.adorocinema.com/filmes/filme-5818/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img
        src="http://3.bp.blogspot.com/-w0L2ZasLPDA/VOurjt5-otI/AAAAAAAAAiI/lRc8R48Rx1Y/s1600/50-tons-de-cinza-poster-br-oficial.jpg"
        alt="" width="150" height="200">
      <h3 class="nome">CINQUENTA TONS DE CINZA</h3>
      <h5>Sinopse</h5>
      <p class="texto">Em Cinquenta Tons de Cinza, Dakota Johnson vive Anastasia Steele, uma estudante de literatura de
        21 anos,
        romântica e virgem. Um dia, ela precisa entrevistar para o jornal da faculdade o jovem bilionário Christian
        Grey. Nasce, então, uma complexa relação entre ambos: com a descoberta amorosa e sexual, Anastasia
        conhece os prazeres do sadomasoquismo, tornando-se o objeto de submissão do sádico Grey.</p>
      <p> <strong>Gênero: </strong> Drama, Romance, Suspense </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 12 de fevereiro de 2015</p>
      <a href="https://www.adorocinema.com/filmes/filme-205450/">Assista ao trailer</a>
    </div>

    <br>
    <br>
    <div class="filme">
      <img
        src="http://2.bp.blogspot.com/-Jc2jVtoCLHc/UUig5sYESMI/AAAAAAAABjs/uUNpEW55AHs/s1600/dragon-ball-z-battle-of-gods-poster-full.jpg"
        alt="" width="150" height="200">
      <h3 class="nome">DRAGON BALL Z: A BATALHA DOS DEUSES</h3>
      <h5>Sinopse</h5>
      <p class="texto">Após dormir por 15 anos, o deus da destruição Bills desperta e logo fica surpreso ao saber que
        Freeza havia
        sido derrotado por um jovem sayadin chamado Goku. Não demora muito para que ele e seu mestre partam para
        encontrá-lo, ainda mais após Bills lembrar de um sonho que teve envolvendo um duelo épico com um deus super
        sayadin que ninguém jamais ouviu falar. Ao encontrá-lo, Goku fica logo animado em enfrentá-lo num duelo, mas
        logo percebe que seus poderes são ínfimos perto do poderio de Bills.</p>
      <p> <strong>Gênero: </strong> Animação, Ação, Aventura </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 11 de outubro de 2013 </p>
      <a href="https://www.adorocinema.com/filmes/filme-211245/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="http://1.bp.blogspot.com/-o1P1wBaucC4/UGURDxZ45WI/AAAAAAAAAkg/3OkEH29WmPE/s1600/01.jpg" alt=""
        width="150" height="200">
      <h3 class="nome">O PODEROSO CHEFÃO</h3>
      <h5>Sinopse</h5>
      <p class="texto">Don Vito Corleone é o chefe de uma "família" de Nova York que está feliz, pois Connie, sua filha,
        se casou com
        Carlo. Porém, durante a festa, Bonasera é visto no escritório de Don Corleone pedindo "justiça", vingança na
        verdade contra membros de uma quadrilha, que
        espancaram barbaramente sua filha por ela ter se recusado a fazer sexo para preservar a honra. Vito discute, mas
        os argumentos de Bonasera o sensibilizam e ele promete que os homens, que maltrataram a filha de Bonasera não
        serão mortos, pois ela também não foi, mas serão severamente castigados. Vito porém deixa claro que ele pode
        chamar Bonasera algum dia para devolver o "favor". Do lado de fora, no meio da festa, está o terceiro filho de
        Vito, Michael, um capitão da marinha muito decorado que há pouco voltou da 2ª Guerra Mundial.
        Universitário educado, sensível e perceptivo, ele quase não é notado pela maioria dos presentes, com exceção de
        uma namorada da faculdade, Kay Adams, que não tem descendência italiana mas que ele ama. Em
        contrapartida há alguém que é bem notado, Johnny Fontane, um cantor de baladas românticas que
        provoca gritos entre as jovens que beiram a histeria. Don Corleone já o tinha ajudado, quando Johnny ainda
        estava em começo de carreira e estava preso por um contrato com o líder de uma grande banda, mas a carreira de
        Johnny deslanchou e ele queria fazer uma carreira solo. Por ser seu padrinho Vito foi procurar o líder da banda
        e ofereceu 10 mil dólares para deixar Johnny sair, mas teve o pedido recusado. Assim, no dia seguinte Vito
        voltou acompanhado por Luca Brasi, um capanga, e após uma hora ele assinou a liberação por
        apenas mil dólares, mas havia um detalhe: nas "negociações" Luca colocou uma arma na cabeça do líder da banda.
        Agora, no meio da alegria da festa, Johnny quer falar algo sério com Vito, pois precisa conseguir o principal
        papel em um filme para levantar sua carreira, mas o chefe do estúdio, Jack Woltz, nem pensa em
        contratá-lo. Nervoso, Johnny começa a chorar e Vito, irritado, o esbofeteia, mas promete que ele conseguirá o
        almejado papel. Enquanto a festa continua acontecendo, Don Corleone comunica a Tom Hagen, seu
        filho adotivo que atua como conselheiro, que Carlo terá um emprego mas nada muito importante, e que os
        "negócios" não devem ser discutidos na sua frente. Os verdadeiros problemas começam para Vito quando Sollozzo,
        um gângster que tem apoio de uma família rival, encabeçada por Phillip Tattaglia e seu filho Bruno. Sollozzo, em
        uma reunião com Vito, Sonny e outros, conta para a família que
        ele pretende estabelecer um grande esquema de vendas de narcóticos em Nova York, mas exige permissão e proteção
        política de Vito para agir. Don Corleone odeia esta idéia, pois está satisfeito em operar com jogo, mulheres e
        proteção, mas isto será apenas a ponta do iceberg de uma mortal luta entre as "famílias".</p>
      <p> <strong>Gênero: </strong> Máfia, Drama, Policial</p>
      <p class="ano"> <strong>Data de lançamento - </strong> 24 de março de 1972</p>
      <a href="https://www.adorocinema.com/filmes/filme-1628/">Assista ao trailer</a>
    </div>

    <br>
    <br>

    <div class="filme">
      <img src="https://pics.filmaffinity.com/capitaes_da_areia-849405395-large.jpg" alt="" width="150" height="200">
      <h3 class="nome">CAPITÃES DA AREIA</h3>
      <h5>Sinopse</h5>
      <p class="texto">Pedro Bala, Professor, Gato, Sem Pernas e Boa
        Vida são adolescentes abandonados por suas famílias, que crescem nas ruas de Salvador e vivem em
        comunidade no Trapiche junto com outros jovens de idade semelhante. Eles praticam uma série de assaltos, o que
        faz com que sejam constantemente perseguidos pela polícia. Um dia Professor conhece Dora e seu
        irmão Zé Fuinha, que também vivem nas ruas. Ele os leva até o Trapiche, o que desencadeia a
        excitação dos demais garotos, que não estão acostumados à presença de uma mulher no local. Pedro consegue
        acalmar a situação e permite que Dora e o irmão fiquem por algum tempo. Só que, aos poucos, nasce o afeto entre
        o líder dos Capitães da Areia e a jovem que acabou de integrar o bando.</p>
      <p> <strong>Gênero: </strong> Aventura, Drama </p>
      <p class="ano"> <strong>Data de lançamento - </strong> 07 de outubro de 2011 </p>
      <a href="https://www.adorocinema.com/filmes/filme-202644/">Assista ao trailer</a>
    </div>

    <br>
    <br>


  </section>
  <section id="generos">
    <h1>Gêneros</h1>
    <ul>
      <li>Ação</li>
      <li>Aventura</li>
      <li>Comédia</li>
      <li>Drama</li>
      <li>Animação</li>
      <li>Romance</li>
      <!-- Adicionar mais gêneros -->
    </ul>

  </section>

</body>

</html>