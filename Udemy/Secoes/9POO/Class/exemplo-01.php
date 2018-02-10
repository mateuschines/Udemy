<?php

class Pessoa {

  public $nome;//Criando uma atributo

  public function falar(){//esse é o metodo
    return "O meu nome é ".$this->nome;
  }


}


$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

 ?>
