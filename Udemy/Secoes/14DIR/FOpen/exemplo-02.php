<?php
//
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

print_r($usuarios);

//arquivo csv é um arquivo formatato, é uma tabela separado por virgula
//vamos converter o qrquivo do banco para csv

$headers = array();

foreach ($usuarios[0] as $key => $value) {
  array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers). "\r\n");

foreach ($usuarios as $row) {//quer dizer para cada linha qeu tiver ele ira rodar
  $data = array();

  foreach ($row as $key => $value) {

    array_push($data, $value);

  }//end foreaCh de cOLUNA

  fwrite($file, implode(",", $data). "\r\n");

}//end foreaCh de linha

fclose($file);

 ?>
