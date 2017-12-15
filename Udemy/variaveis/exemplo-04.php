<?php
//ARRAYS SUPER GLOBAIS
$nome = (int)$_GET["a"];//para pegar os dados por get

//var_dump($nome);

//para pegar o ip do usuario
$ip = $_SERVER["REMOTE_ADDR"];//para local que user esta acessando SCRIPT_NAME


echo $ip;

 ?>
