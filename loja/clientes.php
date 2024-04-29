<?
   include_once("model/clsCidade.php");
   include_once("dao/clsCidadeDAO.php");
   include_once("dao/clsConexao.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Clientes</title>
</head>
<body>
    <h1>Clientes</h1>

    <form method="POST" action="controller/salvarCliente.php?inserir" >
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome da cidade..." name="txtNome" />
        <br>
        <label>Data de Nascimento: </label>
        <input type="date" name="txtNascimento" />
        <br>
        <label>Salário: </label>
        <input type="number" name="txtSalario" />
        <br>

        <label>Cidade: </label>
        <select name="txtCidade">
            <option value="0">Selecione...</option>
            <?php
                $cidades = CidadeDAO::getCidades();
                foreach( $cidades as $cid ){
                    echo '<option value="'.$cid->id.'">'.$cid->nome.'</option>';
                }

            ?>
            <!-- <option value="1">Itati</option> -->
        </select>
        <br>

        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <hr>

<?php
 

 /* *************************************
 ** A PARTIR DAQUI, NÃO FOI EDITADO AINDA 
*/


    $cidades = CidadeDAO::getCidades();

    if( count($cidades) == 0 ){
        echo "<h1>Nenhuma cidade cadastrada!</h1>";
    }else{
?>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <?php

        foreach( $cidades as $cid ){
            $id = $cid->id;
            
            echo "  <tr>
                        <td>$id</td>
                        <td>".$cid->nome."</td>
                        <td><button>Editar</button></td>
                        <td><a href='controller/salvarCidade.php?excluir&id=$id'>
                                <button>Excluir</button></a></td>
                    </tr>";
        }
        
                

    
       /*     if( isset($_REQUEST["nome"])){
                $nome = $_REQUEST["nome"];
                echo "  <tr>
                            <td>3</td>
                            <td>$nome</td>
                            <td><button>Editar</button></td>
                            <td><button>Excluir</button></td>
                        </tr>";
            }
            */
        ?>
    </table>
    
    <?php

        }

        if( isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('O campo nome não pode ser vazio!'); </script>";
        }

        if( isset($_REQUEST["cidadeExcluida"])){
            echo "<script> alert('Cidade excluída com sucesso!'); </script>";
        }

        if( isset($_REQUEST["nome"])){
            $nome = $_REQUEST["nome"];
            echo "<script> alert('Cidade $nome cadastrada com sucesso!'); </script>";
        }
    ?>

</body>
</html>