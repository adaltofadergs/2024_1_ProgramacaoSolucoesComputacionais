<?php
include_once("clsBicicleta.php");
include_once("clsMountainBike.php");
include_once("clsBicicletaEletrica.php");

$bicicleta = new Bicicleta("MinhaBike-001","Caloi", "Azul");

echo $bicicleta->getId() . " da marca " . 
$bicicleta->getMarca() . " e da cor " . 
$bicicleta->getCor();

$bicicleta->andar();

$mountainbike = new MountainBike("Mountain","Sundown","Preta", 1);
echo "<br>Eu e minha " . $mountainbike->getId() . 
" da marca ". $mountainbike->getMarca() . " de cor " .
$mountainbike->getCor() . " na marcha ". $mountainbike->getMarcha();

$mountainbike->andar();
$mountainbike->mudarMarcha(3);
$mountainbike->frear();

$bicicletaEletrica = new BicicletaEletrica("Eletrica","Honda","Vermelha", false, "20%");
echo "<br>Usando a bicicleta " . $bicicletaEletrica->getId();
$bicicletaEletrica->ligar();
$bicicletaEletrica->andar();
$bicicletaEletrica->frear();
$bicicletaEletrica->carregar("50%");
$bicicletaEletrica->andar();

