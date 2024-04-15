<?php

    class Cidade{
        public $id;
        public $nome;

        public function __construct($id = NULL , $nome = NULL){
            $this->id = $id;
            $this->nome = $nome; 
        }
    }