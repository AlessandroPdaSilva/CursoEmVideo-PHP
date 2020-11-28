<?php

require_once'Lutadores.php';

class luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    
    public function marcarLuta($lut1,$lut2){
            
        $this-> desafiado = $lut1;
        $this-> desafiante = $lut2;
        

        if($lut1-> getCategoria() == $lut2-> getCategoria() && $lut1 != $lut2){
            // luta marcada
            $this-> setAprovada(true);
            
        }else{
            echo $this-> aprovada = false;
        }
    }

    public function lutar(){
        
        if($this-> getAprovada(true)){
            $this-> desafiado -> apresentar();
            $this-> desafiante -> apresentar();
            $vencedor = rand(0,2);

            switch($vencedor){
                case  0:// empate
                    $this-> desafiado -> empatarLuta();
                    $this-> desafiante -> empatarLuta();
                    echo "<br><br>Empate ";
                    break;

                case  1:// desafiado vence
                    echo "<br><br> o lutador ".$this-> desafiado -> getNome()." venceu";
                    
                    $this-> desafiado -> ganharLuta();
                    $this-> desafiante -> perderLuta();
                    break;

                case  2:// desafiante vence

                    echo " <br><br> o lutador ". $this-> desafiante -> getNome()." venceu " ;

                    $this-> desafiado -> perderLuta();
                    $this-> desafiante -> ganharLuta();

                    break;
            }

        }else{
            echo "[erro] marque uma luta";
        }

    }
    // contrutor

    // public function __construct(){
    //     $this-> desafiado = null;
    //     $this-> desafiante = null;
    //     $this-> aprovada = false;
    // }




    // get
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    // set

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        
    }

     
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

       
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        
    }


}
