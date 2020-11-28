<?php

require_once "Aluno.php";

class Tecnico extends Aluno {
    private $registro;
    
    public function praticar(){
        
    }


    //------------------------------------------------------

    // get 
    public function getRegistro()
    {
        return $this->registro;
    }
 

    // set
    public function setRegistro($registro)
    {
        $this->registro = $registro;
 
    }


}