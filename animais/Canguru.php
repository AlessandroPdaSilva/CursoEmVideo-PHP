<?php

require_once "Mamiferos.php";

class Canguru extends Mamiferos{

    function locomover()
    {
        echo "saltando";
    }

    public function usarBolsa(){
        echo "usando bolsa ";

    } 


}