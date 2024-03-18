<?php
    echo "Laço de repetição While";
    $i = 1;
    while ($i < 22) {
        echo "<br>" . $i;
        //condicional
        if($i < 18) {
            echo " = Menor de Idade";
        }else{
            echo " = Maior de Idade";
        }
        $i++;
    }