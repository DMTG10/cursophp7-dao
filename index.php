<?php
require_once("config.php");

//carraga somente um usuario
//$root = new Usuario();
//$root->loadByID(3);
//echo $root;


//Carrega um lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuario buscando pelo login

//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->logi//n("jose manolo", "4da54d5sa");
//echo $usuari//o//;

//inserir dados do banco 

//$aluno = new Usuario("VAldemir", "nosta1235");
//$aluno-> insert();
//echo $aluno;


//Alterando dados
//$usuario = new Usuario();
//$usuario->loadByID(4);
//$usuario->update("Farmeti","merda");
//echo $usuario;

//Deletar usuario

$usuario = new Usuario();
$usuario->loadByID(7);
$usuario->delete();
echo($usuario);

?>