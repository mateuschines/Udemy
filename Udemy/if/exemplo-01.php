<?php
$suaIdade = 11;
$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeMelhor = 65;

if ($suaIdade < $idadeCrianca){
  echo "Crianca";

} else if ($suaIdade < $idadeAdulto){
  echo "Adolecente";

} else if ($suaIdade < $idadeMelhor){
  echo "Adulto";
} else {
  echo "Idoso";
}
//OPERADOR TERNARIO
echo "<br>";

echo ($suaIdade < $idadeAdulto)?"Menor de Idade":"Maior de Idade";
//se suaIdade menor ?entao menordeIdade else MaiordeIdade

 ?>
