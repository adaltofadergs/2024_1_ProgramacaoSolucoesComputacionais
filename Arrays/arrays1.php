<?php
//trabalhando com arrays
$numeros = array(0,1,2,3,4,5,6,7,8,9);

$num = [0,1,2,3,4,5,6,7,8,9];

$semana = array("Domingo", "Segunda", "Terça",
"Quarta", "Quinta", "Sexta", "Sábado");

echo $semana[0];
echo "<br>";
//funções embutidas
echo count($numeros);
echo "<br>";
echo sizeof($semana);

//data
date_default_timezone_set("Europe/Saratov");
$hoje = date("w, d/m/Y - H:i:s ");
echo "<br>";
echo "Hoje é $hoje";