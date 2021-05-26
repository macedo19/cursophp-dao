<?php

// Encapsulamento
//Oque é?
//Significa proteger ou controlar que pode ver
// Um atributo ou um metodo vc pode controlar que pode ver ou acessar


class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";

    }

}

$objeto = new Pessoa();

// Acionando a classe assim sim consigo verificar todos os atributos 
$objeto->verDados();

// por esse atributo ser public posso acessar ele fora do objeto sem nenhum problema; Por isso public
//echo $objeto->nome . "<br/>";

// Ocorre fatal erro pq a classe é protegida. Só quem pode acessar é quem esta dentro da classe ou quem erda dessa classe.
//echo $objeto->idade . "<br/>";

//Ocorre fatal error pois só quem é da propria classe pode acessar, nem mesmos os herdeiros
//echo $objeto->senha . "<br/>";
?>