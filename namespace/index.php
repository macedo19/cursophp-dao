<?php

// Essa aqui é a tela que iora ser apresentada no browser
// Ela faz um require do arquivo config
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalminha Sindex");
$cad->setEmail("djmal.macedo@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


?>