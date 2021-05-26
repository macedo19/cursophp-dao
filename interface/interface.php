<?php

// INTERFACE

//O que faz uma interface e para que serve?

// A interface funciona em diferentes tipos de situações.
// Se é um programador sozinho a interface serve para organizar o seu proprio codigo
// A interface define padrões

//A interface ela diz quais metodos devem existir, quais parametros ela vai receber e o tipo
// É uma forma de obrigr o programador a ter os atributos e metodos que deve ter;

// O dev senior determina a interface.

// Uma classe no PHP pode implementar avrias interfaces

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

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

$carro = new Civic();

$carro->trocarMarcha(1);

// A implemntação ajuda a organizar melhor o codigo
// Se caso eu nao criasse um metodo ou faltasse algum seria acusado como erro.
?>