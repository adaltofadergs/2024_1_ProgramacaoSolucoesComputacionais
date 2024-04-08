<?php

include_once("clsVeiculo.php");

class Moto extends Veiculo{
    public $cilindradas, $partidaEletrica;

    public function __construct($marcaMoto, $modeloMoto, $cilindradas, $pE){
        parent::__construct($marcaMoto, $modeloMoto);
        $this->cilindradas = $cilindradas;
        $this->partidaEletrica = $pE;
    }

    public function ligar(){
        echo "<br>Moto Ligada!";
    }
    
}