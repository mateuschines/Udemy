<?php
//Inserindo valores no banco de Dados MYSqli

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//: usar por questao de seguranca
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

//usamos para cada parametro esse comando é para ligar um com o outro
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";


 ?>
