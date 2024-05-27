<?php

include_once("../dao/clsConexao.php");

include_once("../dao/clsCidadeDAO.php");
include_once("../model/clsCidade.php");

include_once("../dao/clsClienteDAO.php");
include_once("../model/clsCliente.php");

if( isset($_REQUEST["inserir"]) ){
    $nome = $_POST["txtNome"];
    if( strlen( $nome ) == 0 ){
        header( "Location: ../clientes.php?nomeVazio");
    }else{
        $cid = new Cidade( );
        $cid->id = $_POST["txtCidade"];

        $cli = new Cliente();
        $cli->nome = $nome;

        $salario = $_POST["txtSalario"];
        $salario = str_replace("," , "." , $salario);

        $cli->salario = $salario;
        $cli->nascimento = $_POST["txtNascimento"];
        $cli->cidade = $cid;

        ClienteDAO::inserir( $cli );
        header( "Location: ../clientes.php?nome=$nome");
    }
}

if( isset( $_REQUEST["excluir"] ) &&  isset( $_REQUEST["id"] ) ){
    $id = $_REQUEST["id"] ;
    ClienteDAO::excluir( $id );
    header( "Location: ../clientes.php?clienteExcluido");
}
    