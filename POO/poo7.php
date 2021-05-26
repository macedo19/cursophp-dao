<?php

// Class base pode ser o que é mais comum
// As extendidas pode ser coisas mais especificas

//UML É interessante para preparar bem como sera a estrutura da classe.
// Quanto mais puder projetar a classe é melhor. Por isso a generica

// AGR VEREMOS SOBRE HERANÇA

class Documento {

    private $numero;

    public function getNumero(){

        return  $this->numero;
    }

    public function setNumero($n){

        $this->numero= $n;
    }

}

// Private nao vai para a classe filha, a classe filha acessa metodos e atributos da classe pai mas a pai nao acessa da classe filha.
// Herancça é isso. o cpf é filho de Documento.
class CPF extends Documento {

    public function validar(){

        //Validação do CPF
        return true;
    }
}

$doc = new CPF();

$doc->setNumero("12345645");
$doc->validar();
var_dump($doc->validar());

echo $doc->getNumero();

?>