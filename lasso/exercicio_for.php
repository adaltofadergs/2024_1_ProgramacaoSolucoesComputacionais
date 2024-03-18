<?php
$paises = array("Brasil", "Argentina", "Uruguai", "Paraguai",
"Peru", "Chile", "Bolívia", "Equador", 
"Colômbia", "Venezuela");

$size = count($paises);
//imprimir o laço com FOR:
for ($i = 0; $i < $size; $i++) {
    echo $paises[$i] ."<br>";
}

?>