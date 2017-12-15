<?php
//NO caso do switch ja sei quais opcao quie podem acontecer ou nao,
// tenm que ser exatamente igual para executar
$diaDaSemana = 8;//date("w");

switch ($diaDaSemana) {
  case 0:
    echo "Domingo";
    break;

    case 1:
      echo "Segunda";
      break;

    case 2:
      echo "Terca";
      break;

    case 3:
      echo "Quarta";
      break;

    case 4:
      echo "Quinta";
      break;

    case 5:
      echo "Sexta";
      break;

    case 6:
      echo "Sabado";
      break;

    default:
      echo "Data invalida";
      break;
}



 ?>
