<?php

$anoNascimento = 1990;

$nomeCompleto = "";

$nome1 = "Joao";

$sobreNome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobreNome;

echo $nomeCompleto;

exit;//ira para a execuçao aqui

echo $nome1;

unset($nome1); //para limpar a variavel

if (isset($nome1)) {//so ira executar se ela existir
  echo $nome1;
}



 ?>
