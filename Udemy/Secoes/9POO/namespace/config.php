<?php

spl_autoload_register(function($nameClass){

  var_dump($nameClass);

  $dirClass = "class";//director é para usar a barra conforme o sisOperacional
  $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

  if (file_exists($filename)) {

    require_once($filename);

  }

});

 ?>
