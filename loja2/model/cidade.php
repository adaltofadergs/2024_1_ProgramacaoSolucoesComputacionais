<?php
	require_once('conexao.php');
    Class Cidade extends conexao{
        public $id;
        public $nome;
        public $tabela = 'cidade';

	//construtor
    public function __construct(){
        parent::__construct();	
    }

    //consulta no banco
    public function consulta(){
        $sql = "SELECT * FROM $this->tabela";
        $result = $this->conn->query($sql) 
        or die("Falha na consulta");
        
        if($result == true){
            return $result;
        }else{
            die("Falha na consulta!");
        }
        //$this->conn->close();
    }

    public function inserir($nome){
        $sql = "INSERT INTO $this->tabela(nome) VALUES(?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s',$nome);
        $stmt->execute();
        
        if($stmt == true){
            header( "Location: ../cidades.php?nome=$nome");
        }else{
            die("Falha no cadastro!");
        }
        $stmt->close();
        $this->conn->close();
    }
}

?>