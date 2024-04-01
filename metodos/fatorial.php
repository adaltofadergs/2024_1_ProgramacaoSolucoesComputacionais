<?php

function calcularFatorial( $valor ){
    $fatorial = 1;
    for ($i = $valor; $i > 1; $i--){
        // $fatorial = $fatorial + $i
        $fatorial *= $i;
    }
    return $fatorial;
}

if( isset($_GET["f"]) )
    $f = $_GET["f"];
else 
    $f = 0;

echo "Fatorial de $f é: ". calcularFatorial($f);

