<?php

require_once "AcoesVideo.php";

class Video implements AcoesVideo{
   
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtida;
    private $reproduzido;

    public function play(){
        $this-> setCurtida( $this-> curtida ++);
    }
    public function pause(){
        $this-> setReproduzido(false);
    }
    public function like(){
        $this-> setReproduzido(true);
    }

    // contrutor

    function __construct($t)
    {
        $this-> setTitulo($t);
        $this-> setAvaliacao(1);
        $this-> setViews(0);
        $this-> setCurtida(0);
        $this-> setReproduzido(false);
    }

    // -----------------------------------------------------------

    // get
    public function getTitulo()
    {
        return $this->titulo;
    }
 
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }
 
    public function getCurtida()
    {
        return $this->curtida;
    }

    public function getReproduzido()
    {
        return $this->reproduzido;
    } 

    // set
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
 
    }
 
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
        $media = 0;
        $media = ($this-> avaliacao + $avaliacao )/2;
        $this-> avaliacao = $media;
    }
    
    public function setViews($views)
    {
        $this->views = $views;
 
    }
 
    public function setCurtida($curtida)
    {
        $this->curtida = $curtida;
 
    }
 
    public function setReproduzido($reproduzido)
    {
        $this->reproduzido = $reproduzido;
 
    }


}