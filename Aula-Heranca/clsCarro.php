<?php

include_once("clsVeiculo.php");

class Carro extends Veiculo{
    public $portas;

    public function __construct($marcaCarro, $modeloCarro, $portas){
        parent::__construct($marcaCarro, $modeloCarro);
        $this->portas = $portas;
    }

    public function ligar(){
        parent::ligar();
        echo "<br>Carro Ligado!";
    }
    
}