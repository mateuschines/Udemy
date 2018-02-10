<?php
//para tirar duvidas site staqueoverflow?
//apartir de function até a outra function funciona o spl
function incluirClasses($nomeClasse){

  if (file_exists($nomeClasse.".php") === true){
    require_once($nomeClasse.".php");
  }

}
//spl busca class em pastas diferentes
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

  if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
    require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
  }
});

$carro = new DelRey();

$carro->acelerar(80);

//pesquisar as spl no site php para mais informacoes

 ?>
