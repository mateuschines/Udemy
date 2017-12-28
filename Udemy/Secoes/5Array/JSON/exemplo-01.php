<?php

//Json é a comunicaçao entre arrays de vares liguagens de programaçao

$pessoas = array();

array_push($pessoas, array(
  'nome'=>'João',
  'idade'=>20
));

array_push($pessoas, array(
  'nome'=>'Glaucio',
  'idade'=>25
));
//tenho um array e tranformo ele em json para ser enviado
echo json_encode($pessoas);


 ?>
