<?php

    class Usuario{

        public $id, $nome, $email, $senha, $admin;

        public function __construct($id = NULL, $nome=NULL, $email=NULL, $senha = NULL, $admin = 0){

            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha; 
            $this->admin = $admin;            
        }

    }