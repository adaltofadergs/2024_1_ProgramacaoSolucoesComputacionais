<?php

    $nome = $_POST["txtNome"];

    if( strlen( $nome ) == 0 ){
        header( "Location: ../cidades.php?nomeVazio");
    }else{
        header( "Location: ../cidades.php?nome=$nome");
    }

    