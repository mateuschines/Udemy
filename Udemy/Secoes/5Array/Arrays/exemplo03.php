<?php
//Arrays TriDimencional

$pessoas = array();

array_push($pessoas, array(
  'nome'=>'João',
  'idade'=>20
));

array_push($pessoas, array(
  'nome'=>'Glaucio',
  'idade'=>25
));

//ira mostrar o array 0 na posicao nome
//Resultado na Web: Joao
print_r($pessoas[0]['nome']);


 ?>
