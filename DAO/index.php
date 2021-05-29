<?php

require_once("config.php");

// Carregando apenasd um usuario
// $root = new Usuario();
// $root->loadById(3);

// echo $root;

// Carrega uma lista de usuario
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuarios pelo login
// $search = Usuario::search('J');
// echo json_encode($search);

// Carrega um usuario pelo seu login e senha
// $usuario = new Usuario();
// $usuario->login("user", "12345");
// echo ($usuario);

//INSERT DE Usuario 

$aluno = new Usuario("aluno", "@aluno");

$aluno->insert();

echo $aluno;
?>