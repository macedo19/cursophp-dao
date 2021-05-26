<?php
//Função anonima

function test($callback){

    $callback();
}

test(function(){
    echo "terminou";
    echo "<br>";
});


//Exemplo 6 
// Functions anonimas são meio estranhas
//Vc passa uma variavel com função como parametro
$fn = function($a){

    var_dump($a);

};

$fn("OI");
?>