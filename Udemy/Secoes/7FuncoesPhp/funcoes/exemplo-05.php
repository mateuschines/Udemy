<?php
//passagem de parametros por valor
$a = 10;

function trocaValor($b){

  $b += 50;

  return $b;
}

echo trocaValor($a);//aqui vale 60
//aqui acima ele fez a funcao e ficou na funcao
echo "<br>";

echo "$a";//aqui vale 10 pq pegou o valor da variavel
echo "<br>";
 ?>
<strong>passagem de parametros por REFERENCIA</strong>
<?php
echo "<br>";
//passagem de parametros por valor
$a = 10;
//quando se a um &comercial passagem de parametro por referencia
function trocaValor2(&$b){

  $b += 50;

  return $b;
}

echo trocaValor2($a);//aqui vale 60
//aqui acima ele fez a funcao E ALTEROU O VALOR DA VARIAVEL
echo "<br>";

echo trocaValor2($a);//AGORA VALE 110 PQ ELE 60 MAIS 50 DA FUNCAO
echo "<br>";
echo "$a";//aqui vale 110 pq pegou o valor da variavel QUE FOI ALTERADA

 ?>
