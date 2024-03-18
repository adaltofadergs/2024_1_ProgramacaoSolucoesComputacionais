<?php

    $carros = array( "Doblo" , "Renegade" , 20 );
    
    foreach( $carros as $car ){
        print( $car . "<br>");
    }

    echo " Meu carro: $carros[0] <hr>";

    print_r( $carros );
    echo "<hr>";
    var_dump( $carros);

    $carros[0] = "Uno";
    echo "<hr>";
    var_dump( $carros);
