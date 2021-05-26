<?php

// AUTOLOAD -- É uma função do php que carrega as classes automaticamente sem o require
function __autoload($DelRey){

    require_once("$DelRey.php");
}

$carro = new DelRey();

// Não deu boa por conta da atualização provavelmente
$carro->acelerar(80);
?>