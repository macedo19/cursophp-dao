<?php

// Parametros de função. Parametro é argumento.
// Significa informações que uma function precisa para trabalhar


// Segeu um exemplo

function ola($texto = "Mundo" , $periodo){

    return "Ola $texto  $periodo!!<br>";
    
}

echo ola("Mundo", "Boa noite");
echo ola("Jorge", "Bom diaaa");
echo ola("Deidara", "GENTE");
?>