<?php

$total = 150;
$desconto = 0.9;

do {
  $total *= $desconto;

} while ($total > 100);

echo "$total";


 /*
Questao

Pergunta 1:
Supondo que temos duas variáveis:

<?php
    $valorProduto = 14500.00;
    $desconto = 5; // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100.
?>
Como podemos fazer para aplicar 5% de desconto somente para os produtos cujo valor sejam acima de 10000?

Resposta
if($valorProduto > 10000){
  echo $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
}






 */

 ?>
