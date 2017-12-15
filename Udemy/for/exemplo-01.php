<?php
//$i+=5 ele ira contar de 5 em 5
for ($i = 0; $i < 1000; $i+=5) {
//para a apenas do 200 ao 800 e depois continua
  if ($i > 200 && $i < 800)continue;

  if ($i === 900)break;//break para a execuçao
  echo $i . "<br>";
}

echo "<br>";

echo "For com Looping";

for ($i=0; $i < 10; $i--) {
  echo $i;
}

 ?>
