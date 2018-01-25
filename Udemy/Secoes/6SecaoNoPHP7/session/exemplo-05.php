<?php
//Ha muitas sessoes em php na documentacao
//aqui testamos duas delas
//use e teste a documentacao do php.net para seu codigo ficar masi inteligente
//
require_once("config.php");

echo session_save_path();//mostra o caminho de ond vc esta

echo"<br>";

var_dump(session_status());//mostra seu status de sessao
//exemplo mostrando int(2)
echo"<br>";

switch (session_status()) {
  case PHP_SESSION_DISABLED:
    echo "se as sessões estiverem desabilitadas";
    break;

  case PHP_SESSION_NONE:
    echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
    break;

  case PHP_SESSION_ACTIVE:
    echo "se as sessões estiverem habilitadas, e uma existir.";
    break;

  default:
    echo "Erro de sessao";
    break;
}
 ?>
