<?php
//Inserindo valores no banco de Dados MYSqli

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//: usar por questao de seguranca
$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$password = "1234567890";
$id = 5;

//usamos para cada parametro esse comando é para ligar um com o outro
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";


 ?>
