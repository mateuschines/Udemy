<?php

//ESSE É PARA SER EXEMPLO 06
//usando Class dateTime agora é uma clss nao uma function

$dt = new DateTime();

$periodo = new DateInterval("P15D");
//mostra a hora do mesmo jeito com uma class
echo $dt->format("d/m/Y H:i:s");
//este adiciona o periodo no dt
$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");





 ?>
