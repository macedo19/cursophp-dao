<?php

//declaraçõa de tipos escalares
// Voce define o tipo de valor que vai entrar +
function soma(int...$valores){

    //eles soma
    return array_sum($valores);

}

echo soma(2,3);
echo "<br>";
echo soma(7,3);
echo "<br>";
echo soma(52,3);
echo "<br>";

//declaraçõa de tipos escalares
// Tipo do retornopode ser definido dessa forma, nele voce escolhe o tipo que vai retornar
function somaA(int...$valores):string{

    //eles soma
    return array_sum($valores);

}

var_dump(somaA(2,3));

echo somaA(2,3);
echo "<br>";
echo somaA(7,3);
echo "<br>";
echo somaA(52,3);
echo "<br>";

// Isso é interessante usar em valores que vao ir ao banco de dados
// O php esta sempre se atualizando, essa atualização é do php7
?>