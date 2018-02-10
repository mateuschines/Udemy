<?php
//polimorfismo significa vareas formas
//geralmente é usado em heranca
//e acontece quando uma class extends de outra com o mesmo nome porem dando forma diferente
//metodos na class pai e ficlha com mesmo nome mas coisas distintas
abstract class Animal {
  public function falar(){
    return "Som";
  }

  public function mover(){
    return "Anda";
  }
}

class Cachorro extends Animal {
    public function falar(){
      return "late";
    }
}

class Gato extends Animal {
    public function falar(){
      return "Mia";
    }
}

class Passaro extends Animal {
    public function falar(){
      return "Canta";
    }

    public function mover(){
      return "Voa e ". parent::mover();
    }//esse parent esta chamando o mover tbm da class pai
    //entao ira ficar voa e anda fazendo um polimorfismo e continuando o valor da class pai
}



$pluto = new Cachorro();

echo $pluto->falar(). "<br/>";//Ja este esta fazendo um polimorfismo pois esta pegando o resultado do Cachorro
echo $pluto->mover(). "<br/>";//esse mover esta herdando do CLASS PAi

echo "---------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar(). "<br/>";//Ja este esta fazendo um polimorfismo pois esta pegando o resultado do Cachorro
echo $garfield->mover(). "<br/>";//esse mover esta herdando do CLASS PAi

echo "---------------------------<br/>";

$ave = new Passaro();

echo $ave->falar(). "<br/>";
echo $ave->mover(). "<br/>";

 ?>
