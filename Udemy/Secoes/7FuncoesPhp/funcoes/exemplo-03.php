<?php
//parametros que sao passados por funcoes
//parametros que nao tenha um valor padrao coloque sempre a esquerda

//se ele nao tiver valor padrao vc é obrigado a informar ele

//um valor padrao ele sempre que nao tiver valor ele mostra o padrao
function ola($texto = "mundo", $parametro = "Bom dia"){
  return "Ola $texto! $parametro! <br>";

}

echo ola();
echo ola("", "Boa noite");//para não escrever nada passe vazio
echo ola("Glaucio", "Boa tarde");
echo ola("Joao", "");


 ?>
