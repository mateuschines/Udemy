<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);*/

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("jo");
//echo json_encode($search);

//CARREGA UM USUARIO USANDO UM LOGIN E UMA SENHA
//$usuario = new Usuario();
//$usuario->login("joao", "1234567890");
//echo $usuario;


//INSERT COM PROCIDURI DE UM USUARIO NOVO
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//ALTERAR UM USUARIO
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "!@#$%&*");
//echo $usuario;

//Deletar um usuario uma tupla
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
 ?>
