<?php

require_once("config.php");//esta chamando start session do config.php

session_unset($_SESSION['nome']);//ele ira apagar a variavel de sessao
//ele apaga apenas o nome sem expecificacao ele apaga todas as variaveis
//limpa variaveis de sessao mas nao sai do site

echo $_SESSION['nome'];//aqui apenas estamos usando o valor do exemplo-01

//como se vc esplodisse do site
session_destroy();//este apaga todas as variaveis igual ao unset
//*diferença, o unset é como se apasse sua variavel mas vc continuasse no site
//ja o destroy ele quebra todos os arquivos e se vc der um f5 é como se vc estivesse logando a primeira vez
 ?>
