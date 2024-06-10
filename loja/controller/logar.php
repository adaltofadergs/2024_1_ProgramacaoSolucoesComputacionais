<?php

$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];

$senha = md5( $senha );

include_once("../model/clsUsuario.php");
include_once("../dao/clsUsuarioDAO.php");
include_once("../dao/clsConexao.php");

$user = UsuarioDAO::getUsuarioByEmailSenha( $email , $senha );
if( !$user ) {
	header("Location: ../index.php?usuarioInvalido");
}else{
	session_start();
	$_SESSION["logado"] = true;
	$_SESSION["nome"] = $user->nome;
	$_SESSION["email"] = $user->email;
	$_SESSION["admin"] = $user->admin;
	header("Location: ../index.php");
}