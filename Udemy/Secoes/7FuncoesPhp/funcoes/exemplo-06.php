<?php

$pessoa = array(
  'nome'=>'João',
  'idade'=>20
);
//array pessoas passa os valores
//se colocar & comercial em value ele altera o valor do array tbm para 30
foreach ($pessoa as $value) {//ex: &$value
//se pegar o tipo for = a inteiro valor soma 10
  if (gettype($value) === 'integer') $value += 10;
  //mostrar os dados do array
  echo $value. '<br>';//joao 30
}
//mostrar o array
print_r($pessoa);
//R: Array ( [nome] => João [idade] => 20 )
 ?>
