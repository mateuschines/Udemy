<?php

$frase = "A repeticao é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);//busca qual é a posiçao que aonde está a palavra mãe

var_dump($q);

//apenas me entereça oq eu esta antes da mãe

$texto = substr($frase, 0, $q);
//vou buscar a frase apartir do 0 ate aonde $q"17"
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
//quero a frase apartir de $q nafrente de mãe então mais a $palavra strlen conta a palavra entao 3 casa a cima
//E ATE AONDE VAI A FRASE até a fase inteira

echo "<br>";

var_dump($texto2);



 ?>
