<?php

require_once "Pessoa.php";

class Professor extends Pessoa{

    private $especialidade;
    private $salario;

    public function receberAum($v){
        $this-> setSalario( $this-> getSalario + $v);
    }

    //------------------------------------------------------

    // get 

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function getSalario()
    {
        return $this->salario;
    }
 
    // set 
    
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
 
    }
    
    public function setSalario($salario)
    {
        $this->salario = $salario;
   
    }
}