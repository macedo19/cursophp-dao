<?php

function ola(){

    // A func abaixo retorna em forma de array os parametros que foram parrados a função
    $argumentos = func_get_args();

    return $argumentos;
}

 var_dump(ola("Bom dia", "Jorge", 55));

?>