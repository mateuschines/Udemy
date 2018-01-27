<?php

//DECLARACAO DE TIPOS ESCALARES

//TIPO DO RETORNO COLOCA DE FRENTE OS PARENTESES
function soma(float ...$valores):string{

//funcao que soma todos os valores
  return array_sum($valores);

}
//retornando uma string
echo var_dump (soma(2,2));//mostrar o tipo da vareavel
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);// resultado 4.7 no tipo float
echo "<br>";

//procurar no php new featers
//novos recusos php7 pesquisar


 ?>
