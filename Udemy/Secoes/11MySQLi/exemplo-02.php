<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){
  echo "Error: ". $conn->connect_error;
  exit;//
}
//para mostrar na tela
//para listar a tabela, e guadar os resultados em uma variavel
$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");
//convertendo para jason
$data = array();


//enquanto tiver resultado salve no row
while ($row = $result->fetch_array(MYSQLI_ASSOC)){/* ASSOC PARA MOSTRAR APENAS O NOME DA STRING
PODENDO SER SUBSTITUIDO POR fetch_assoc() tera o mesmo resultado*/


  //pegar o array de row e passar em data como json
  array_push($data, $row);
  //var_dump($row);

}

echo json_encode($data);
 ?>
