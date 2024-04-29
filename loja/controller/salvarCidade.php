<?php

include_once("../dao/clsConexao.php");
include_once("../dao/clsCidadeDAO.php");
include_once("../model/clsCidade.php");

if( isset($_REQUEST["inserir"]) ){
    $nome = $_POST["txtNome"];
    if( strlen( $nome ) == 0 ){
        header( "Location: ../cidades.php?nomeVazio");
    }else{
        $novaCid = new Cidade( );
        $novaCid->nome = $nome;
        CidadeDAO::inserir( $novaCid );
        header( "Location: ../cidades.php?nome=$nome");
    }
}

if( isset( $_REQUEST["excluir"] ) &&  isset( $_REQUEST["id"] ) ){
    $id = $_REQUEST["id"] ;
    CidadeDAO::excluir( $id );
    header( "Location: ../cidades.php?cidadeExcluida");
}
    