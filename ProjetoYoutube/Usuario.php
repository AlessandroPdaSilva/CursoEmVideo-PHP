<?php

require_once "Pessoa.php";

class Usuario extends Pessoa{
    private $login;
    private $totAssistindo;

    // metodos

    public function viuMaisUm(){
        
    }

    // contrutor

    function __construct($nome,$idade,$sexo,$login)
    {
        parent::__construct($nome,$idade,$sexo);
        $this-> setTotAssistindo(0);
        $this-> setLogin($login);
    }

    // -----------------------------------------------------------

    // get
    public function getLogin()
    {
        return $this->login;
    }
 
    public function getTotAssistindo()
    {
        return $this->totAssistindo;
    }


    // set
    public function setLogin($login)
    {
        $this->login = $login;
 
    }
 
    public function setTotAssistindo($totAssistindo)
    {
        $this->totAssistindo = $totAssistindo;
 
    }


}