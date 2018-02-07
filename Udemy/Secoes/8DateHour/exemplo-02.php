<?php
//String to Time
$ts = strtotime("1997-04-10");//pega os segundos de qualquer data desejada

echo date("l, d/m/Y", $ts);//l ira mostrar o dia e var ts mostra a data do dia

echo "<br>";
echo "<br>";
echo "Outro exemplo";
//use o now para agora ou +1 day para amanha mas sempre em ingles
$ts = strtotime("now");

echo "<br>";
echo "<br>";

echo date("l, d/m/Y", $ts);


 ?>
