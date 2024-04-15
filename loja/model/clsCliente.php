<?php

    include_once("clsCidade.php");

    class Cliente{
        public $id, $nome, $nascimento, $salario, $cidade;

        public function __construct($id = NULL, $nome=NULL, $nascimento=NULL, 
                                    $salario = 1412.00 , $cidade = new Cidade(0, "Outra") ){

        }
    }