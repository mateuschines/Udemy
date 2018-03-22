<?php

$images = scandir("images");

//converter ela em json

$data = array();

//var_dump($images);//para listar um array com var dump

foreach ($images as $img) {//inrray faz uma busca dentro de um array
  if (!in_array($img, array(".",".."))) {

    $filename = "images" . DIRECTORY_SEPARATOR . $img;

    $info = pathinfo($filename);

    //pegar o tamanho do arquivo
    $info["size"] = filesize($filename);
    //data de modificacao
    $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
    //acessar ele via url
    $info["url"] = "http://localhost/htdocs/Udemy/Udemy/Secoes/14DIR/".str_replace("\\", "/", $filename);

  array_push($data, $info);
  }
}
echo json_encode($data);
//


 ?>
