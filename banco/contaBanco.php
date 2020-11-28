<?php


class contaBanco{

    public $numConta;
    private $tipo;
    protected $dono;
    protected $saldo;
    protected $status;


    // metodos 

    public function abrirConta($nc,$t,$nome){
        
        $this-> numConta = $nc;
        $this-> tipo = $t;
        $this-> dono = $nome;
        $this-> saldo = 0;
        
        // status verificacao
        if($this-> status == true){
            echo "essa conta ja esta ativa";
        }else{
            $this-> status = true;
        }

        // tipo verificacao
        if($this-> gettipo() == 'cc'){
            echo "conta corrente {$this-> numConta} /";
        }elseif($this-> gettipo() == 'cp'){
            echo "conta poupanca {$this-> numConta} /";
        }else{
            echo "conta inexistente ";
        }
        

    }
    
    public function fecharConta(){
        
       
        // verificacao
        if($this-> getsaldo() > 0){
            echo "Conta ainda possui saldo. Nao e possivel fechar.";
        }elseif($this-> getsaldo() < 0){
            echo " Essa conta esta em debito. Nao e possivel fechar";
        }else{
            //status
            if($this-> status == false){
                echo "essa conta ja esta desativada";
            }else{
                $this-> status = false;
            }
        }
        
        
    
        
    }

    public function depositar($v){
        if($this->getstatus(true)){// conta existe

            $this-> setsaldo($this-> getsaldo()+$v);// deposita
        }else{
            echo "impossivel depositar em uma conta inexistente";
        }
    }

    public function sacar($v){
        if($this->getstatus(true)){// conta existe
            
            if($this-> getsaldo() >= $v){
                $this-> setsaldo($this-> getsaldo()-$v);// saca
                
                if($this-> getsaldo() <= 0){
                    echo " vc esta em debito   ";
                }
            }else{
                echo "saldo insuficiente";
            }

            
        }else{
            echo "impossivel sacar em uma conta inexistente";
        }
    }

    public function pagarMensal(){
        if($this-> gettipo() == 'cc'){
            $v=12;
        }elseif($this-> gettipo() == 'cp'){
            $v=20;
        }

        if($this-> getstatus(true)){

            $this-> setsaldo( $this-> getsaldo() - $v);

        }else{
            echo "conta destivada";
        }
    }

    // construtor
    public function __construct(){
        $this-> status = false;
        $this-> numConta = "indefinido";
        $this-> tipo = "indefinido";
        $this-> dono = "ex: Joao";
        $this-> saldo = 0;
    }

    // get
    public function getnumConta(){
        return $this-> numConta ;
    }
    public function gettipo(){

        return $this-> tipo;
    }
    public function getdono(){

        return $this-> dono;
    }
    public function getsaldo(){

        return $this-> saldo;
    }
    public function getstatus(){

        return $this-> status;
    }

    // set
    public function setnumConta($set){
        $this-> numConta = $set;
    }
    public function settipo($set){
        $this-> tipo = $set;
    }
    public function setdono($set){
        $this-> dono = $set;
    }
    public function setsaldo($set){
        $this-> saldo = $set;
    }
    public function setstatus($set){
        $this-> status = $set;
    }


}
