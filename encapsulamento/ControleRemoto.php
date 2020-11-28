<?php
require_once 'controlador.php';

class ControleRemoto implements Controlador{

    private $volume;
    private $ligado;
    private $tocando;




    public function ligar(){
        $this-> setligado(true);
    }
    public function desligar(){
        $this-> setligado(false);
    }

    public function abrirMenu(){
        echo '-------- menu -------<br><br>';
        echo 'Esta ligado : '.($this-> getligado() ? 'sim':'nao').'<br>';
        echo 'Esta tocando : '.($this-> gettocando()? 'sim':'nao').'<br>';
        echo 'Volume : '.($this-> getvolume()).'<br>';

        for($i = 0; $i <= $this-> getvolume(); $i++){
            echo '|';
        }
    }
    public function fecharMenu(){
        echo 'fechando menu <br>';
    }

    public function maisVolume(){
        if($this-> getligado(true)){

            $this-> setvolume( $this-> getvolume() + 1 );
        }
    }
    public function menosVolume(){
        if($this-> getligado(true)){

            $this-> setvolume( $this-> getvolume() - 1);
        }
    }
    public function ligarMudo(){
        if($this-> getligado(true) && $this-> getvolume() > 0){
            $this-> setvolume(0);
        }
    }
    public function desligarMudo(){
        if($this-> getligado(true) && $this-> getvolume() == 0){
            $this-> setvolume(20);
        }
    }
    public function play(){
        if($this-> getligado(true) && !$this-> gettocando()){
            $this-> settocando(true);
        }
    }
    public function pause(){
        if($this-> getligado(true) && $this-> gettocando(true)){
            $this-> settocando(false);
        }
    }


    // contrutor 
    public function __construct(){
        $this-> setvolume(5);
        $this-> setligado(false);
        $this-> settocando(false);
    }
    // get

    private function getvolume(){
        return $this-> volume;
    }
    private function getligado(){
        return $this-> ligado;
    }
    private function gettocando(){
        return $this-> tocando;
    }
    // set 

    private function setvolume($set){
        $this-> volume = $set;
    }
    private function setligado($set){
        $this-> ligado= $set;
    }
    private function settocando($set){
        $this-> tocando = $set;
    }
}