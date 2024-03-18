<?php
    $i = 1;
    $qtde = 22;
    do{
        echo "<br>" . $i;
            //operador ternário

             $res = ($i < 18) ? " = Menor de Idade" : " = Maior de Idade";

             echo $res;
            
             $i++;
    }
    while($i < $qtde);