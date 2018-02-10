<?php
interface Veiculo {
  public function acelerar($velocidade);
  public function freiar ($velocidade);
  public function trocarMarcha ($marcha);
}

//a class Abstrata nao precisa declarar os metodos novamente
//ja a interface precisa ser reescrito

/*uma class vai herdar so de uma class abstract
mais uma class pode implementar vareas interfaces*/




//class abstract nao pode ser instanciado ela tem que ser extendida
abstract class Automovel implements Veiculo {
  public function acelerar($velocidade){
    echo "O veiculo acelerou até ". $velocidade . " km/h";
  }

  public function freiar($velocidade){
    echo "O veiculo freiou até ". $velocidade . " km/h";
  }

  public function trocarMarcha($marcha){
    echo "O veiculo engatou a marcha ". $marcha;
  }
}


 ?>
