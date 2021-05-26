<?php

// Aqui faz uma validação
//Assim que inicio o index esse aquivo já sintoniza automaticamente
//Tenho que dar mais uma olhada na documentação de spl_autoload --- Ver com o Furlan
spl_autoload_register(function($nameClass){

    $diretorioClass = "class";
    //essa variavel se refere a todo nome da pasta -- é o file path
    //A função dessa variavel é pra usar depoios para verificar se o arquivo existe
    $filename = $diretorioClass. DIRECTORY_SEPARATOR . $nameClass. ".php";

    if(file_exists($filename)){

        require_once($filename);
    }
});
?>