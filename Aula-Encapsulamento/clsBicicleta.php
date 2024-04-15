<?php
class Bicicleta
{
    private $id;
    private $marca;
    private $cor;

    public function __construct($id, $marca, $cor)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->cor = $cor;
    }

    //metodos getter e setter
    public function getId()
    {
        return $this->id;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    public function setCor($cor): void
    {
        $this->cor = $cor;
    }



    public function andar()
    {
        echo "<br>Bicicleta Andando";
    }

    public function frear()
    {
        echo "<br>Bicicleta Parada";
    }
}
