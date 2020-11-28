<?php

require_once "Animais.php";

class Mamiferos extends Animais{
    private $corPelo;
    
    public function locomover(){
        echo "<p> correndo </p>";
    }
    public function alimentar(){
        echo "<p> mamando</p>";
    }
    public function emitirSom(){
        echo "<p> som de mamifaro </p>";
    }

    


    // ---------------------------------------------

    // get 
    public function getCorPelo()
    {
        return $this->corPelo;
    }
 
    // set
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
 
    }
}