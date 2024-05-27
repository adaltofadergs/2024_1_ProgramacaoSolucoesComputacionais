<?php
class ClienteDAO{

    public static function inserir( $cliente ){
        $nome = $cliente->nome;
        $nascimento = $cliente->nascimento;
        $salario = $cliente->salario;
        $idCidade = $cliente->cidade->id;
        
        $sql = "INSERT INTO cliente (nome, nascimento, salario, codCidade) VALUES 
                ('$nome' , '$nascimento' , $salario , $idCidade );" ;
        $id = Conexao::executarComRetornoId( $sql );
        return $id;
    }


    public static function editar( $cliente ){
        $id = $cliente->id;
        $nome = $cliente->nome;
        $nascimento = $cliente->nascimento;
        $salario = $cliente->salario;
        $idCidade = $cliente->cidade->id;

        $sql = "UPDATE cliente SET 
                nome = '$nome' ,
                nascimento = '$nascimento' ,
                salario = $salario ,
                codCidade = $idCidade
                WHERE id = $id ;" ;
        Conexao::executar( $sql );
    }

    public static function excluir( $idCliente ){
        $sql = "DELETE FROM cliente WHERE id = $idCliente;" ;
        Conexao::executar( $sql );
    }

    public static function getClientes(){
        $sql = "SELECT p.id , p.nome, p.salario, DATE_FORMAT( p.nascimento , '%d/%m/%Y') AS nascimento ,
                        c.id AS codCid , c.nome AS nomeCid
                FROM cliente p 
                LEFT JOIN cidade c ON c.id = p.codCidade
                ORDER BY p.nome";
        
        $result = Conexao::consultar( $sql );
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id , $_nome, $_salario , $_nascimento, $_codCid , $_nomeCid) = mysqli_fetch_row($result) ){

                $cid = new Cidade();
                $cid->id = $_codCid;
                $cid->nome = $_nomeCid;

                $cli = new Cliente();
                $cli->id = $_id;
                $cli->nome = $_nome;
                $cli->salario = $_salario;
                $cli->nascimento = $_nascimento;
                $cli->cidade = $cid;

                $lista->append( $cli );
            }
        }
        return $lista;
    }

}