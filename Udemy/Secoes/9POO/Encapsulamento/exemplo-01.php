<?php
//Encapsulamento
//so quem pode acessar a protegida é quem esta dentro da class
//privado nem os herdeiro nem acessa ja os herdeiros acessa
class Pessoa {

  public $nome = "Rasmus Lerdorf";
  protected $idade = 48;
  private $senha = "123456";

  public function verDados(){

    echo $this->nome . "<br/>";
    echo $this->idade . "<br/>";
    echo $this->senha . "<br/>";
  }
}

$objeto = new Pessoa();

echo $objeto->nome . "<br/>";

$objeto->verDados();
//quando é publico todo mundo ve,
//quando é extendida apenas protegina e publico
//na mesma class apenas a privada outras nao veem


 ?>
