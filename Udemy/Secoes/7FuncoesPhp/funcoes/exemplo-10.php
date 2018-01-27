<?php
//Funcoes Anonimas

function test($callback){
  //processo lento

  $callback();
}
test(function(){
  echo "Terminou!";
});



 ?>
