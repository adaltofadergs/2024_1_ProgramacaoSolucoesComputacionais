<?php
class Conexao{
    private static function abrir(){
        $banco = "market" ;
        $local = "localhost" ; // $local = "10.177.8.85";
        $user = "root" ;
        $senha = "";
        $conn = mysqli_connect( $local , $user , $senha , $banco );
        if( $conn ){
            return $conn;
        }else{
            return NULL;
        }
    }

    private static function fechar( $conn ){
        if( $conn ) mysqli_close( $conn );
    }

    public static function consultar( $sql ){
        $conn = self::abrir();
        if( $conn ){
            $result = mysqli_query($conn , $sql );
            self::fechar( $conn );
            return $result;
        }else{
            return NULL;
        }
    }

    public static function executar( $sql ){
        $conn = self::abrir();
        if( $conn ){
            mysqli_query($conn , $sql );
            self::fechar( $conn );
        }
    }
    public static function executarComRetornoId( $sql ){
        $conn = self::abrir();
        $id = 0;
        if( $conn ){
            mysqli_query($conn , $sql );
            $id = mysqli_insert_id( $conn );
            self::fechar( $conn );
        }
        return $id;
    }
}