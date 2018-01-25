<?php
//secao são é como se fosse variaveis super globais
//uma sessao é criada quando vc acessa um site, e essas secoes geralmente tem tempo
//com o tempo ela desloga vc do site
//por exemplo em banco vc fk 2min sem meche ele te desloga
//isso é uma variavel de secao

//esta chamando start session do config.php
require_once("config.php");//apartir daqui ira ter uma sessao

$_SESSION["nome"] = "Hcode";//aqui estamos atribuindo valor
//veja o teste no exemplo-02


 ?>
