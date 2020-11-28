<?php

class lutador{
    private $nome,$nacionalidade,$idade,$altura;
    private $peso,$categoria,$vitoria,$derrotas,$empates;

    public function apresentar(){
        echo "<p>-------------</p>";
        echo " <br>lutador: ". ($this-> getNome());
        echo " <br>Nacionalidade: ". ( $this-> getNacionalidade());
        echo " <br>Idade: ".($this-> getIdade());
        echo "<br>altura: ".($this-> getAltura());
        echo "<br>peso: ".($this-> getPeso());
        echo "<br>vitorias:".($this-> getVitoria()).
        "<br>derrotas:".($this-> getDerrotas() ). 
        "<br>empates: ".($this-> getEmpates()) ." <br>categoria: "
        .($this-> getCategoria() );
    }
    public function status(){
        echo "o lutador ".($this-> getNome() )." esta na categoria "
        .($this-> getCategoria() );
    }
    public function ganharLuta(){
        $this-> setVitoria( $this-> getVitoria() + 1);
    }
    public function perderLuta(){
        $this-> setDerrotas( $this-> getDerrotas()+1);
    }
    public function empatarLuta(){
        $this-> setEmpates( $this-> getEmpates()+1);
    }
    
    //construtor 
    function __construct($n,$nac,$i,$a,$p,$v,$d,$e){
        $this-> setNome($n);
        $this-> setNacionalidade($nac);
        $this-> setIdade($i);
        $this-> altura = $a;
        $this-> setPeso($p);
        $this-> vitoria = $v;
        $this-> derrotas = $d;
        $this-> empates = $e;
    }

    // get
    public function getNome(){
        return $this-> nome;
    }

    public function getNacionalidade(){
        return $this-> nacionalidade;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function getAltura(){
        return $this-> altura;
    }

    public function getPeso(){
        return $this-> peso;
    }

    public function getCategoria(){
        return $this-> categoria;
    }
    public function getVitoria(){
        return $this-> vitoria;
    }

    public function getDerrotas(){
        return $this-> derrotas;
    }

    public function getEmpates(){
        return $this-> empates;
    }

    //set
    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;

        return $this;
    }
   
    public function setIdade($idade){
        $this->idade = $idade;

        return $this;
    }

    public function setAltura($altura){
        $this->altura = $altura;

        return $this;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this-> setCategoria();
        return $this;
    }

    private function setCategoria(){
        if($this-> getPeso() <= 50 ){
            $this-> categoria = 'indefinido';
        }elseif($this-> getPeso() <=70){
            $this-> categoria = 'leve';
        }elseif($this-> getPeso() <=100){
            $this-> categoria = 'medio';
        }elseif($this-> getPeso() <=120){
            $this-> categoria = 'pesado';
        }else{
            $this-> categoria = 'indefinido';
        }
    }

    public function setVitoria($vitoria){
        $this->vitoria = $vitoria;

        return $this;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;

        return $this;
    }

    public function setEmpates($empates){
        $this->empates = $empates;

        return $this;
    }
}