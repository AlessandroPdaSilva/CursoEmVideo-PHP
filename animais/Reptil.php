<?php

require_once "Animais.php";

class Reptil extends Animais{

    private $corEscama;

    // metodos
    public function locomover(){
        echo "<p> rastejando</p>";
    }
    public function alimentar(){
        echo "<p> comendo vejetais </p>";
    }
    public function emitirSom(){
        echo "<p> som de reptil </p>";
    }


    // ---------------------------------------------------------------

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