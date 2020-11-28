<?php

require_once "Animais.php";

class Peixe extends Animais {
    
    private $corEscama;

    
    // metodos
    
    public function locomover(){
        echo "<p> nadando </p>";
    } 
    public function alimentar(){
        echo "<p> comendo substancias </p>";
    } 
    public function emitirSom(){
        echo "<p> peixe nao faz som </p>";
    } 

    public function soltarBolhas(){
        echo "soltou uma bolha ";
    }
    
    // get 
    public function getCorEscama()
    {
        return $this->corEscama;
    }
 

    // set
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
 
    }


}