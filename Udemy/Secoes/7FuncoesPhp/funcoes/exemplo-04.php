<?php

function ola(){

  $argumentos = func_get_args();//codigo abstrato

  return $argumentos;
}

//se recebe um ele é uma coisa se recebe 2 pode ser outra coisa

//vira um array e recebe varios argumentos
var_dump(ola("Bom dia", "boa tarde", 10));

//pode ser adaptado a muitas informaçoes

 ?>
