<?php  
// O uso de sessões permite armazenar um conjunto de valores e variaveis
//utilizados para um usuario da apliação durante todo o seu
//acesso e navegaçõ dentro do sistema.

// o require esta se referenciando pelo inicio da sessao em config
require_once("config.php");


echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";

// Um exemplo de o que podemos fazer a partir do arquivo de documentação do php
// Esse exemplo mostra como se encontra a sessão.
    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "desabilitadas as sessões";
            break;
        case PHP_SESSION_NONE:
            echo "Nome";
            break;
        case PHP_SESSION_ACTIVE:
            echo "Ativdades as sessões";
            break;
    }

?>