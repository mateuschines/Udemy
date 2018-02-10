<?php
//tudo que for na pasta raiz é algo generico ja o que esta nas sub pastas é algo expecifico
//por isso o uso do namespace
require_once("config.php");
//para usar o namespace
use Cliente\Cadastro;
//quando eu uso o use e a pasta e arquivo indicado meu diretorio new mudou o arquivo

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalmahcode@htmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();



 ?>
