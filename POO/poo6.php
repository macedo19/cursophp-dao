<?php


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

// Em encapsulamento posso fazer o extends
// A classe programador vai extender tudo que possui na classe pessoa exceto os atributos privados
class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this)."<br/>";
        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";

    }

}


$objeto = new Programador();

// Se eu retirar a function que esta dentro da class Programador e fazer o verDados ele mostrara a senha pois estara pegando de Pessoa. Pois em pessoa a classe é privada
$objeto->verDados();
?>