<?php
//receber as variáveis pelo post
$peso = $_POST['peso'];
$altura = $_POST['altura'];

//declarar os métodos
function calculoIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);
    echo "O seu IMC é $imc <br>";
    resultado($imc); //chama a segunda função
}

function resultado($imc){
    if($imc < 16.9){
        echo "Muito abaixo do peso.";
    }elseif($imc < 18.4){
        echo "Abaixo do peso.";
    }elseif($imc < 24.9){
        echo "Peso normal.";
    }elseif($imc < 29.9){
        echo "Acima do peso.";
    }elseif($imc < 34.9){
        echo "Obesidade Grau I.";
    }elseif($imc < 40){
        echo "Obesidade Grau II.";
    }else{
        echo "Obesidade Grau III.";
    }
}

calculoIMC($peso, $altura);