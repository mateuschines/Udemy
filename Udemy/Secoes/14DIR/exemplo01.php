<?php

$name = "/opt/lampp/htdocs/htdocs/Udemy/Udemy/Secoes/14DIR/images";

//se ele nao existe ele cria
if (!is_dir($name)) {

  mkdir($name);//entao crie um diretorio
  echo "Diretorio $name criado com sucesso";

} else {//se ele ja existe ele apaga

  rmdir($name);//apaga diretorio
  echo "Já existe o diretorio: $name foi removido";
}


 ?>
