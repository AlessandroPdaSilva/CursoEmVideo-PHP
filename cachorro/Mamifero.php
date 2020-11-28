<?php

require_once "Animal.php";

class Mamifero extends Animal{
    
    protected $corPelo;

    function emitirSom(){
        echo " som de mamifero ";
    }
 
    public function getCorPelo()
    {
        return $this->corPelo;
    }
 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
 
    }


}