<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){
  echo "Error: ". $conn->connect_error;
  exit;//
}

//serve para preparar um comando que vc quer mandar para o bando dados
//esses valores vao ser trocados pelos valores entao vc coloca ?
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(?, ?)");
//os ss é o tipo de dado que vc quer passar
//s é de strring se fosse outro seria a letrra inicial
//ja os outros dois valores sao os valores que nos queremos inserir e precisam ser passados como variavel
$stmt->bind_param("ss", $login, $pass);
//nao necessita a variavel estar antes do metodo porque so sera executado no execute por isso que funciona
$login = "user";
$pass = "12345";

$stmt->execute();//para enciar para o banco de dados

$login = "root";//ele criara o valor na tabela e criara esse valor tbm entao pode ser enviado como um for
$pass = "!@#$";

$stmt->execute();


 ?>
