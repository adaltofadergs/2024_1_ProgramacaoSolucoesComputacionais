<?php

class UsuarioDAO{

	public static function getUsuarioByEmailSenha($email , $senha){
		$sql = "SELECT id , nome, email, admin 
			FROM usuario 
			WHERE email = '$email' AND senha = '$senha' ";
        	$result = Conexao::consultar( $sql );
		if( mysqli_num_rows($result) == 0 ){
			return null;
		}else{
			list($_id, $_nome, $_email, $_admin) = mysqli_fetch_row($result);
			$user = new Usuario($_id, $_nome, $_email, NULL , $_admin);
			return $user;
		}

	}

}