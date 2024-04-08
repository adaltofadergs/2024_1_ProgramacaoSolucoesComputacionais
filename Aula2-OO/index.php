<?php
require_once("carro.php");
require_once("listagem.php");

$total = sizeof($carros);
echo "<h3>TOTAL DE VEÍCULOS: " . $total . "</h3><hr>";

foreach ($carros as $carro) {
    $carro->status();
    echo "<hr>";
}





