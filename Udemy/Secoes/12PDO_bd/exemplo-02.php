<?php

//Conection com SQL SERVER

//para conectar com o banco com PDO
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

//o fetchAll ja ira fatiar todas as linha nao precisa fazer while
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);//PDO::FETCH_ASSOC É PARA MOSTRAR APENAS OS VALORES QUE É PARA MOSTRAR OS VALORES
//PDO::FETCH_ASSOC É UMA CONTANTE DA CLASS POD

foreach ($result as $row) {
  //key é o nome da coluna e o value é o valor digidato la dentro
  foreach ($row as $key => $value) {
    echo "<strong>".$key."</strong>".": ".$value."<br/>";

  }

  echo "=======================================<br/>";

}

//var_dump($result);

 ?>
