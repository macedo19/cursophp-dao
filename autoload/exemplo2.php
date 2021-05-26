<?php

function incluirClasse($nomeClasse){

    if(file_exists($nomeClasse. ".php") === true){
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasse");
spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse. ".php") === true){
        require_once("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse. ".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);

// Deu duvida stackoverflow
// Autoload --  Ver beemmm
// Ele pega mais de uma class em varias pastas e diretorios
?>