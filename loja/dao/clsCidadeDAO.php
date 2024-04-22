<?php
class CidadeDAO{
    public static function inserir( $cidade ){
        $nome = $cidade->nome;
        $sql = "INSERT INTO cidade (nome) VALUES ('$nome');" ;
        $id = Conexao::executarComRetornoId( $sql );
        return $id;
    }
    public static function editar( $cidade ){
        $id = $cidade->id;
        $nome = $cidade->nome;
        $sql = "UPDATE cidade SET nome = '$nome' WHERE id = $id ;" ;
        Conexao::executar( $sql );
    }

    public static function excluir( $idCidade ){
        $sql = "DELETE FROM cidade WHERE id = $idCidade;" ;
        Conexao::executar( $sql );
    }

    public static function getCidades(){
        $sql = "SELECT id , nome FROM cidade ORDER BY nome";
        $result = Conexao::consultar( $sql );
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id , $_nome) = mysqli_fetch_row($result) ){
                $cid = new Cidade();
                $cid->id = $_id;
                $cid->nome = $_nome;
                $lista->append( $cid );
            }
        }
        return $lista;
    }

}