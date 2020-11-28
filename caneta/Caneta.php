<?php

class caneta{
    public $modelo;
    private $ponta;
    public $cor;

    // contrutor
    public function caneta($m,$p,$c){
        $this-> modelo = $m;
        $this-> ponta = $p;
        $this-> cor = $c;

    }
    
    // modelo
    public function getModelo(){
        return $this -> modelo;
    }
    public function setModelo($mod){
        $this -> modelo = $mod;
    }

    // ponta
    public function getPonta(){
        return $this -> ponta;
    }
    public function setPonta($p){
        $this -> ponta = $p;
    }

    

}
    