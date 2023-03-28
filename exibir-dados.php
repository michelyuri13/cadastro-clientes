<?php $ano_atual = date('Y') ?>
<h1>Olá,
  <?php echo $_POST['nome'] . ' ' . $_POST['sobrenome'] ?>
  ,
  <?php echo $ano_atual - $_POST['nascimento'] ?>anos!
</h1>
<h2>Obrigado por se cadastrar no nosso site! ❤️</h2>
<h2> seu e-mail '
  <?php echo $_POST['email'] ?>' foi enviado para o nosso banco de dados!
</h2>