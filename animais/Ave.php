<?php

require_once "Animais.php";

class Ave extends Animais{

    private $corPena;
    

    function locomover(){
        echo "<p> voando </p>";
    }
    function alimentar(){
        echo "<p> comendo frutas </p> ";
    } 
    function emitirSom(){
        echo "<p> som de ave </p> ";
    } 

    public function fazerNinho(){
        echo "<p> construido um ninho</p>";
    }

    // -------------------------------------------------------------

    // get
    public function getCorPena()
    {
        return $this->corPena;
    }
 

    // set
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
 
    }


}