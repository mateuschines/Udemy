<form>

<input type="text" name="nome" placeholder="Digite seu nome">
<input type="date" name="nascimento">
<input type="submit" name="OK">

</form>
<?php

if (isset($_GET) ){

  foreach ($_GET as $key => $value) {
    echo "Nome do campo: " . $key . "<br>";

    echo "Valor do campo: ". $value;

    echo "<hr>";
  }
}
 ?>
