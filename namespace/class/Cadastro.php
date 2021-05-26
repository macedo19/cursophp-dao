<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;


    // Pq criar os get e set -- nao adianta criar um atributo em que qualquer objeto possa modificalo sem qualquer tipo de restrição
    public function getNome():string {

        return $this->nome;
    }

    public function getEmail():string {

        return $this->email;
    }

    public function getSenha():string {

        return $this->senha;
    }

    public function setNome($nome){

        return $this->nome = $nome;

    }

    
    public function setEmail($email){
        
        return $this->email = $email;

    }

    
    public function setSenha($senha){
        
        return $this->senha = $senha;

    }

    public function __toString(){
        // O Json é um array que vc pode ver
        return json_encode(array(
            "nome"=> $this->getNome(),
            "email"=> $this->getEmail(),
            "senha"=> $this->getSenha()
        ));
    }

}

?>