<?php

$condicao = true;

//do while executa pelomenos uma vez
//enquanto tal situaçao for verdade ele ira executar
while ($condicao) {

  $numero = rand(1, 10);//sortear um numero de 1 a 10

  if ($numero === 3){
    echo "TRẼS!!!";
    $condicao = false;
  }

  echo $numero . " ";
}




 ?>
