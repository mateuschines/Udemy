<?php
//agora se forcar a ser esta sesion ele mostra a variavel ate em uma aba anonima
session_id('6f0c56bc4041458cba69354aab567d78');//ele respeita a secao ativa

require_once("config.php");

session_regenerate_id();//ele sempre de dara um id diferente

echo session_id();

echo "<br>";

var_dump($_SESSION);//em uma aba anonima ele não iria mostrar a variavel

 ?>
