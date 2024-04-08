<?php
class Carro{
    public $ano;
    public $marca;
    public $modelo;
    public $cor;
    public $cambio;

    public function __construct($ano, $marca, $modelo, $cor, $cambio){
        $this->ano = $ano;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->cambio = $cambio;
    }

    //métodos
    public function status(){
        echo "<h4>Dados do Veículo</h4>";
        echo "<p>Ano: " . $this->ano . "</p>";
        echo "<p>Marca: " . $this->marca . "</p>";
        echo "<p>Modelo: " . $this->modelo . "</p>";
        echo "<p>Cor: " . $this->cor . "</p>";
        echo "<p>Câmbio: " . $this->cambio . "</p>";
    }

    public function vender($valor){
        echo $this->marca . " " . $this->modelo .
        " vendido por " . $valor;
    }






}