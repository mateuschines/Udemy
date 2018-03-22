<?php
//criar um arquivo txt
//fopen espera o caminho do arquivo e o nome do arquivo e o segundo
//o que vc quer que eu faca com o arquivo
//se vc colocar a+ sera add informacoes
//\r\n para quebrar linha 
$file = fopen("log.txt", "w+") . "\r\n";//w é de escrever e o mais de criar

fwrite($file, date("Y-m-d H:i:s"));

fclose($file);//para fechar o arquivo nessesario

echo "Arquivo criado com sucesso";


//joque o comando la o php.net
 ?>
