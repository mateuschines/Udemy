<?php
//Interface ajuda o seu codigo
//interface é tipo um molde que o forca a seguir os padroes da interface
//*Quem implementa tem que seguir aqueles padroes 
interface Veiculo {
  public function acelerar($velocidade);
  public function freiar ($velocidade);
  public function trocarMarcha ($marcha);
}

class Civic implements Veiculo {
  public function acelerar($velocidade){
    echo "O ceiculo acelerou até ". $velocidade . " km/h";
  }

  public function freiar($velocidade){
    echo "O veiculo freiou até ". $velocidade . " km/h";
  }

  public function trocarMarcha($marcha){
    echo "O veiculo engatou a marcha ". $marcha;
  }
}
$carro = new Civic();//criando um obj

$carro->trocarMarcha(1);//mostrando na tela

 ?>
