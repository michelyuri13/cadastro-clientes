<div>
<form action="teste.php" method="POST">
  <div class="campo">
    <label class="form-label" for="cerveja"><strong>Cerveja</strong> </label>
    <input class="form-control" type="text" name="cerveja" id="cerveja" required />
  </div>

  <div class="campo">
    <label class="form-label" for="carne"><strong>Carne</strong> </label>
    <input class="form-control" type="text" name="carne" id="carne" required />
  </div>

  <input class="botao btn btn-primary mb-3" type="submit" />
</form>
</div>
<?php
if ($_POST) {

  echo 'o valor total gasto foi: ' . $_POST['cerveja'] / $_POST['carne'];

}

?>