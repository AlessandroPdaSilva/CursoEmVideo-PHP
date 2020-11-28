<?php

require_once "Pessoa.php";

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function cancelarMatricula(){
        $this-> setMatricula( $this-> matricula = '0');
        echo "matricula cancelada com sucesso";
    }



    // -----------------------------------------------------

    // get
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    // set

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}