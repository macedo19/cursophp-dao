<?php

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;

    }

    public function setNumero($numero){
        $result = Documento::validarCpf($numero);
        $this->numero = $numero;
        
        if($result === false){
            throw new Exception("CPF NÃO É VALIDO", 1);
        }
    }

    public static function validarCpf($cpf){
        // Metodo static é pra poder chamar sem criar uma instancia ou um atributo da class
    
        if($cpf == "123456789")
            return true;
        else 
            return false;
    }
}

$cpf = new Documento();

$cpf->setNumero("123456788");

var_dump($cpf->getNumero());
?>
