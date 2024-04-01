<?php
    //calculo da media
    $nota1 = $_GET['a1'];
    $nota2 = $_GET['a2'];
    $nota3 = $_GET['a3'];
    $nota4 = $_GET['a4'];

    function media2($a1, $a2, $a3, $a4){
        $notas = array($a1,$a2,$a3, $a4);
        $soma = array_sum($notas);
        $media = $soma / sizeof($notas);
        echo "Média final: $media";
    }
    
    //chamada do método
        media2($nota1, $nota2, $nota3, $nota4);
    ?>