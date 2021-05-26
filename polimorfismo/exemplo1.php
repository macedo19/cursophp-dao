<?php

// Polimorfimos

// Um metodo na classe pai tem o mesmo nome na classe filho 
// Polimorfismo é ter um mesmo metodo na classe pai e classe filho que fazem coisas diferentes.
 abstract class Animal {

    public function falar(){
        
        return "som";
    }

    public function mover(){

        return "Anda";
    }

}

// O metodo falar tomou o comportamento -- Isso é polimorfismo
class Cachorro extends Animal {
        
    public function falar(){

        return "late";
    }
}

class Gato extends Animal {

    public function falar(){

        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){

        return "Canta";
    }

    // O parent serve para tipo : chame o metodo mover da classe pai que no caso é a classe Animal. Entao ele pega o que esta lá
    public function mover(){
         return "Voa e". parent::mover();;
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------<br/>" ;

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";


echo "-------------------<br/>" ;

$pardal = new Passaro();

echo $pardal->falar() . "<br/>";
echo $pardal->mover() . "<br/>";

?>