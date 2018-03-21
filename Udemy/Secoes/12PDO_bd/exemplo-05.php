<?php
//Inserindo valores no banco de Dados MYSqli

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//: usar por questao de seguranca
$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");


$id = 1;

//usamos para cada parametro esse comando é para ligar um com o outro
;
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";


 ?>
