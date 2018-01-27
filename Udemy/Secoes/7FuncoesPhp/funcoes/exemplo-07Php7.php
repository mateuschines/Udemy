<?php

//DECLARACAO DE TIPOS ESCALARES

//ira pegar todos os valores de uma so vez e forcar a ser inteiro
function soma(int ...$valores){

//funcao que soma todos os valores
  return array_sum($valores);

}

echo soma(2,2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);// resultado 4
echo "<br>";
//meu

echo soma(2,2,2);
echo "<br>";
 ?>
