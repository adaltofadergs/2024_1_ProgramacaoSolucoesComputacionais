<?php
include_once("clsCarro.php");
include_once("clsMoto.php");
include_once("clsVeiculo.php");
$v1 = new Veiculo("Fiat" , "Doblo");
$v1->ligar();
echo "<hr>";
$c1 = new Carro("Jeep","Renegade",4);
$c1->ligar();
echo "<hr>";
$m1=new Moto("Honda","Twister",250,true);
$m1->ligar();

echo "<hr>Velocidade do Veículo: ".$v1->velocidade;
$v1->acelerar(100);
echo "<br>Velocidade do Veículo: ".$v1->velocidade;

echo "<hr>Velocidade do Carro: ".$c1->acelerar(50);
echo "<br>Velocidade do Carro: ".$c1->frear(10);
echo "<br>Velocidade do Carro: ".$c1->frear(50);
echo "<br>Velocidade do Carro: ".$c1->acelerar(50);
echo "<br>Velocidade do Carro: ".$c1->acelerar(-50);

