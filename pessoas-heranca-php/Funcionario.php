<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
        if($this-> getTrabalhando() != true){
            $this-> setTrabalhando($this-> trabalhando = true);
        }else{
            $this-> setTrabalhando($this-> trabalhando = false);
        }
        
    }
    

    // ----------------------------------------------------

    // get
    public function getSetor()
    {
        return $this->setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
    // set


   
    public function setSetor($setor)
    {
        $this->setor = $setor;

    }
    
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

    }

    
}