<?php

// Passagem de parametros por referencia

$a = 10;
$b = 20;

// Nesse caso esta usando passagem de parametro poor referencia
// o & na frente da variavel ele meio que diz, estou mostrando aonde fica, o que acontecer com ela voce altera fora tbm
function trocaValorA(&$a){

    $a += 50;
    return $a;

}
// Por ser valor por referencia ela referencia tbm fora da funcao
echo trocaValorA($a);
echo "<br>";
echo $a;

// Aqui não foi utilizado o valor por referencia
//Note como o valor se difere
function trocaValorB($b){

    $b += 50;
    return $b;

}
// O que fica na função fica na função
// o A só se muda dentro da função
echo "<br>";
echo trocaValorB($b);
echo "<br>";
echo $b;
echo "<br>";

// Exemplo 06

// Usando a referencia por parametro em foreach
$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach($pessoa as &$value){

    //gettype pega o tipo que é o valor/variavel que esta sendo passado
    if(gettype($value) === 'integer') $value +=10;
    echo $value .'<br>';
}

var_dump($pessoa)
?>