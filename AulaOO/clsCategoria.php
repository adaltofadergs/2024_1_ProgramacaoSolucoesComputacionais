<?php
class Categoria{
    public $id;
    public $nome;
    public function __construct( $nome = "Outra" ){
        $this->id = null;
        $this->nome = $nome;
    }
}
