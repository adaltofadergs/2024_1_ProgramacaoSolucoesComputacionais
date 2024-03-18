<?php
    echo "Laço de repetição FOREACH <br>";

    $frutas = array("Maçã", "Banana", "Morango", "Uva", "Abacaxi",
    "Pera", "Mamão", "Melão", "Melancia", "Jaca", "Fruta do Conde",
    "Jaboticaba", "Caju", "Cupuaçu", "Açaí", "Bergamota", "Laranja");

    //imprimir o meu array na tela
    foreach($frutas as $lista){ 
        echo $lista . "<br>";
    }
?>