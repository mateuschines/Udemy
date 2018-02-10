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

class Programador extends Pessoa{
  public function verDados(){
    //diz da onde é esse medoto 
    echo get_class($this). "<br>";//ela diz que class que fez essa instancia

    echo $this->nome . "<br/>";
    echo $this->idade . "<br/>";
    echo $this->senha . "<br/>";
  }
}
$objeto = new Programador();

$objeto->verDados();


 ?>
