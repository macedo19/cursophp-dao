<?php


// Nesse caso o dt virou objeto
$dt = new DateTime();

// por se tratar de objeto usa o ->
echo $dt->format("d/m/Y H:i:s");
echo "<br>";
echo "<br>";
echo "<br>";

// sEMPRE VERIFIQUE A DOCUMENTAÇÃO NO PHP.NET PARA ENTENDER MAIS SOBRE AS CLASSES

$periodo = new DateInterval("P15D");
$dt->add($periodo);

// Aqui estou adicionando um intervalo de periodo em minha data
// Apos adicionar formatei apresentando na tela

echo $dt->format("d/m/Y H:i:s");
echo "<br>";
echo "<br>";

// A classe date é muito bem usada 

echo "Aqui se trata apenas de um treinamento da função DATE";
echo "<br>";
echo "<br>";
echo "Periodo de 10 dias e 3 horas em relação a hoje ANTES DE HORA LEMBRAR O T
";
echo "<br>";
$ss = new DateTime();
$periodo_teste = new DateInterval("P3Y10DT3H");
$ss->add($periodo_teste);
echo $ss->format("d/m/Y H:i:s");
echo "<br>";
echo "<br>";

?>