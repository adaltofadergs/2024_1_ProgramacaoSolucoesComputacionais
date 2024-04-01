<?php

//array associativo

$produtos = array(
    "EL1241" => "Celular Samsung M23",
    "COZ0345" => "Coocktop de indução - 110v",
    "MO5423" => "Sofá 3 lugares cinza",
    "PAN7845" => "Jogo de panelas Tramontina"
);

echo $produtos['EL1241'];

echo "<br><br> DATA COMPLETA COM ARRAY ASSOCIATIVO <br><br>";

$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terça-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);

$mes = array(
    "Jan" => "Janeiro", 
    "Fev" => "Fevereiro", 
    "Mar" => "Março", 
    "Apr" => "Abril", 
    "May" => "Maio", 
    "Jun" => "Junho",
    "Jul" => "Julho", 
    "Aug" => "Agosto", 
    "Set" => "Setembro", 
    "Oct" => "Outubro", 
    "Nov" => "Novembro", 
    "Dec" => "Dezembro");

$s = date('D');
$d = date('d');
$y = date('Y');
$m = date('M');

echo "Bom dia!";
echo " Hoje é ";
echo $semana[$s];
echo " " . $d . " de ";
echo $mes[$m];
echo " de " . $y . ".";

echo "<br>";

