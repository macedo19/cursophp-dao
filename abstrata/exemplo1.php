<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

// Esta dizendo que qualquer automovel implementa a interface veiculo, só que ninguem pode instanciar qualquer automovel
// A funcionalidade é implementar diversas interfaces mas nao permite intanciar erssa classe. No caso teria que ser criado outra classe para poder insrtanciar ja que essa é abstrata
abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O veiculo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade){

        echo "O veiculo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){

        echo "O veiculo trocou a marcha " . $marcha ;
    }
}

// Nesse caso criado
class DelRey extends Automovel {

    public function empurrar(){

    }


}

$carro = new Automovel();
$carro->acelerar(100);
?>