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

  <title>Cadastro</title>
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
  </header>
  <div class="container-sm">
    <div class="row">
      <h1 id="titulo">Lista de Cliente</h1>
      <h4 id="subtitulo">Lista em ordem crescente</h4>
      <br />
    </div>


    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Primeiro</th>
            <th scope="col">Último</th>
            <th scope="col">Nascimento</th>
            <th scope="col">E-mail</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < count($dados); $i = $i + 1) { ?>
            <tr>
              <th scope="row">1</th>
              <td>
                <?php echo $dados[$i]['nome'] ?>
              </td>
              <td>
                <?php echo $dados[$i]['sobrenome'] ?>
              </td>
              <td>
                <?php echo $dados[$i]['nascimento'] ?>
              </td>
              <td>
                <?php echo $dados[$i]['email'] ?>
              </td>
            <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>

    <br><br>
    <h4 id="subtitulo">Lista em ordem decrescente</h4> <br><br>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Primeiro</th>
            <th scope="col">Último</th>
            <th scope="col">Nascimento</th>
            <th scope="col">E-mail</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = (count($dados) - 1); $i >= 0; $i = $i - 1) { ?>
            <tr>
              <th scope="row">1</th>
              <td>
                <?php echo $dados[$i]['nome'] ?>
              </td>
              <td>
                <?php echo $dados[$i]['sobrenome'] ?>
              </td>
              <td>
                <?php echo $dados[$i]['nascimento'] ?>
              </td>
              <td>
                <?php echo $dados[$i]['email'] ?>
              </td>
            <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  </div>


</body>

</html>