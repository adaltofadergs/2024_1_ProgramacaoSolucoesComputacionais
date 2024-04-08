<?php
class Veiculo{
    public $id, $marca, $modelo;
    public $velocidade;
    public function __construct($marca, $model) {
        $this->id = NULL;
        $this->marca = $marca;
        $this->modelo = $model;
        $this->velocidade = 0;
    }
    public function ligar() {
        echo "<br>Veículo ligado!";
        echo "<br>Modelo: ".$this->modelo;
    }
    public function acelerar( $velocidade ) {
        if( $velocidade > 0 ) {
            $this->velocidade += $velocidade;
            //$this->velocidade = $this->velocidade + $velocidade;
        } 
        return $this->velocidade;
    }
    public function frear( $valor ) {
        if( $valor > 0) {
            if( $valor <=  $this->velocidade ) {
                $this->velocidade -= $valor;
                //$this->velocidade = $this->velocidade - $valor;
            }else{
                $this->velocidade = 0;
            } 
        }
        return $this->velocidade;
    }
}