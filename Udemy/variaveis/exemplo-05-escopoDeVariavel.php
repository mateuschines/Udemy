<?php
//isto é escopo de variavel uma nao interfere na outra
$nome = "Mateus";

function teste(){
global $nome;//estou dizendo que do lado de fora e do lado de dentro é a mesma variavel

  echo $nome. "<br>";
}

function teste2(){
$nome = "jao";

echo $nome. " Agora no teste 2";
}

teste();
teste2();


 ?>
