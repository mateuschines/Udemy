<?php
//autoload chama os arquivos de POO de outros arquivos
//podendo a sim usar funcoes de POO em outros arquivos
function __autoload($nomeClasse){
//  var_dump($nomeClasse);
  require_once("$nomeClasse.php");

}
//porem autoloda apenas enchega as calss no mesmo diretorio


$carro = new DelRey();

$carro->acelerar(80);

 ?>
