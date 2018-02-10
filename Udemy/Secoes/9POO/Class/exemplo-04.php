<?php
//Metodos Magicos oou  Construtores

class Endereco {

  private $logradouro;
  private $numero;
  private $cidade;
//Metodo Contrutor que inicia sozinho
  public function __construct($a, $b, $c){

    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  }
//para destruir uma variavel serve para log ou tal coisa a sim
  public function __destruct(){
  //  var_dump("DESTRUIR");
  }
//retorna um campo em string quando ele nao sabe o que fazer
  public function __toString(){
    return $this->logradouro.", ".
    $this->numero." - ".
    $this->cidade;
  }
}

$meuEndereco = new Endereco("Rua Felinto Muller", "244", "Pérola");

echo $meuEndereco;

/*
var_dump($meuEndereco);

unset($meuEndereco);
*/




 ?>
