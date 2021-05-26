<?php

// No nome da classe sempre começa com a letra maiuscula
class Pessoa {

    // Public e Private sao encapsulamentos -- Atributo
    public $nome;

    //Metodo
    public function falar(){
        
        return "O meu nome é " .$this->nome;
    }

}

// Só consigo acessar esse atributo pq ele se trate de um atributo publico
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel ";
 echo $glaucio->falar();

?>