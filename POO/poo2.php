<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    //Metodos get e setrs --- GET pegar o valor e SET setar o valor
    
    public function getModelo(){

        return $this->modelo;

    }

    public function setModelo($modelo){
        
        // esse $modelo é outra coisa que na vdd é o parametro
        $this->modelo = $modelo;
    }

    public function getMotor(){

        return $this->motor;

    }

    public function setMotor($motor){
        
        // esse $modelo é outra coisa que na vdd é o parametro
        $this->motor = $motor;
    }

    public function getAno(){

        return $this->ano;

    }

    public function setAno($ano){
        
        // esse $modelo é outra coisa que na vdd é o parametro
        $this->ano = $ano;
    }

    public function exibir(){

        return array(
            "modelo"=> $this->getModelo(),
            "motor"=> $this->getMotor(),
            "ano"=> $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("GOL GT");
$gol->setMotor("1.6");
$gol->setAno("2020");

print_r($gol->exibir());

// Primeiro setei o valor de modelo, motor e carro pelo metodo set. Passando como parametos as coisas pela var gol.
// Depois chamei com print r a instancia gol e nele chamei a function exibir. o qual estava armazenando em um array.
?>