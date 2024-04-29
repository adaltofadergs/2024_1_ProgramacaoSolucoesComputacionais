<?php
   $nome = $_POST["txtNome"]; 

if(strlen( $nome ) == 0 ){
    header( "Location: ../cidades.php?nomeVazio");
}else{
    require_once('../model/cidade.php');
    $novaCid = new Cidade();
    $novaCid->inserir($nome);
}