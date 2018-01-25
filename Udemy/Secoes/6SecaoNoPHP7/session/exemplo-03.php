<?php
//id session é uma identificacao de sessaon que ele sabe que é vc
//se vc atualizar a pagina continua sendo vc
//acaso vc entrar como guia anonima ele te dara outra id de sessao
require_once("config.php");

echo session_id();//mosta uma string de qual é sua session


 ?>
