<?php
    include_once("dao/clsConexao.php");
    include_once("dao/clsCidadeDAO.php");
    include_once("model/clsCidade.php");

    $Cidade = new Cidade( );
    CidadeDAO::getCidades();

?>