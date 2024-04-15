<?php
class BicicletaEletrica extends Bicicleta
{
    private $ligada;
    private $carga;

    public function __construct($id, $marca, $cor, $ligada, $carga)
    {
        parent::__construct($id, $marca, $cor);
        $this->ligada = $ligada;
        $this->carga = $carga;
    }

    public function getLigada()
    {
        return $this->ligada;
    }
    public function getCarga()
    {
        return $this->carga;
    }
    public function setLigada($ligada)
    {
        $this->ligada = $ligada;
    }
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }

    public function ligar(){
        if($this->ligada == true){
            echo "<br>A bicicleta já está ligada!";
        }else{
            $this->setLigada(true);
            echo "<br>Bicicleta ligada!";
        } 
    }

    public function desligar(){
        if($this->ligada == false){
            echo "<br>A bicicleta já está desligada!";
        }else{
            $this->setLigada(false);
            echo "<br>Bicicleta desligada!";
        } 
    }

    public function carregar($valor){
        $this->setCarga($valor);
        echo "<br>Bateria carregada $valor.";
    }


}
