
<?php

// Funcao date ela retorna tanto o dia/mes/ano/ hora/min e segundo
//Verificar sobre function date.
//A functioon tras o date do servidor

echo date ("d/m/Y H:i:s");

echo "<br>";

//Function time stamp ela mostra a quantidade de segundos desde 1 de janeiro de  1970
//Se da essa data pq é o marco zero do sistema de calendario por extensão do ambiente iunix

echo time();

echo "<br>";

echo strtotime ("2001-09-11");
echo "<br>";
echo "<br>";

//Time Stamp pode pegar qualquer dia sendo o dia atual ou nao
// Isso é interessante para algo relacionado a compras
// strtotime converte uma data em string

$ts = strtotime("2001-09-11");
$ts = strtotime("now");
$ds = strtotime("+ 1 day");
$ss = strtotime("+ 1 week");

echo date("l, d/m/Y" , $ts);
echo "<br>";
echo "<br>";
echo date("l, d/m/Y" , $ds);
echo "<br>";
echo "<br>";
echo date("l, d/m/Y" , $ss);
echo "<br>";
echo "<br>";
?>