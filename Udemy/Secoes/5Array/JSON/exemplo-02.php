<?php

$json =
'[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);
//eu tenho o json e tranformo ele em array
var_dump($data);





 ?>
