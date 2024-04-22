<?php

    $nome = $_POST["txtNome"];

    if( strlen( $nome ) == 0 ){
        header( "Location: ../cidades.php?nomeVazio");
    }else{
        include_once("../dao/clsConexao.php");
        include_once("../dao/clsCidadeDAO.php");
        include_once("../model/clsCidade.php");

        $novaCid = new Cidade( );
        $novaCid->nome = $nome;
        CidadeDAO::inserir( $novaCid );
        header( "Location: ../cidades.php?nome=$nome");
    }

    