<?php
if ($_POST) {
  print_r($_POST);
  exit;
}

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
            <a class="nav-link" href="lista-filmes.php">Lista de Filmes</a>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <div class="container-sm">
    <div class="row">
      <h1 id="titulo">Cadastro de Cliente</h1>
      <h4 id="subtitulo">Informações pessoais</h4>
      <br />
    </div>

    <div class="row">
      <form action="exibir-dados.php" method="POST">
        <div class="mb-3">
          <div class="campo">
            <label for="nome" class="form-label"> <strong>Nome</strong></label>
            <input class="form-control" type="text" name="nome" id="nome" required />
          </div>
        </div>

        <div class="campo">
          <label class="form-label" for="sobrenome"><strong>Sobrenome</strong> </label>
          <input class="form-control" type="text" name="sobrenome" id="sobrenome" required />
        </div>

        <div class="campo">
          <label class="form-label" for="nascimento"><strong>Ano de nascimento</strong> </label>
          <input class="form-control" type="number" name="nascimento" maxlength="4" id="nascimento" required />
        </div>

        <div class="campo">
          <label class="form-label" for="email"><strong>E-mail</strong> </label>
          <input class="form-control" type="email" name="email" id="email" required />
        </div>

        <br />
        <input class="btn btn-primary mb-3" type="submit" />
      </form>
    </div>

    <br /> <br /> <br />


  </div>


</body>

</html>