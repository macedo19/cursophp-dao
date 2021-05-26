<?php

// Metodo magico
//Metodo construtor, é um metodo normal porem ele é executado automaticamente quando a classe é instanciada
// __construct

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    // Quando ele é removido da memoria -- use o metodo destruct.
    // Quando usar: quando quiser automatizar uma tarefa que tira do Database
    public function __destruct(){

        var_dump("DESTRUIR");
    }

    public function __toString(){

        return $this->logradouro . "," . $this->numero . " - " . $this->cidade; 
    }
}

$meuEndereco = new Endereco("Rua Guadalajara", "123", "Paulatejando");

echo $meuEndereco;

//var_dump($meuEndereco);

//unset($meuEndereco)
?>