<?php

require_once "Aluno.php";

class Bolsista extends Aluno {
    private $bolsa;
    
    // metodo

    public function renovarBolsa(){

    }

    public function pagarMensalidade(){
        echo "o aluno {$this-> nome } possui uma bolsa , entao , mensalidade tem desconto<br>";
    }



    //------------------------------------------------------

    // get 
    public function getBolsa()
    {
        return $this->bolsa;
    }
 

    // set
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }


}