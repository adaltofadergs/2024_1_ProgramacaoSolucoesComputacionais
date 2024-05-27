<?php
    include_once("dao/clsConexao.php");

    include_once("model/clsCidade.php");
    include_once("dao/clsCidadeDAO.php");
   
    include_once("model/clsCliente.php");
    include_once("dao/clsClienteDAO.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Clientes</title>
</head>
<body>

    <?php require_once('menu.php'); ?>

    <h1>Clientes</h1>

    <form method="POST" action="controller/salvarCliente.php?inserir" >
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome do cliente..." name="txtNome" />
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
        </select>
        <br>
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <hr>

<?php
 



    $clientes = ClienteDAO::getClientes();


    if( count($clientes) == 0 ){
        echo "<h1>Nenhum cliente cadastrado!</h1>";
    }else{

        
?>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Salário</th>
            <th>Nascimento</th>
            <th>Cidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <?php

        foreach( $clientes as $cli ){
            $id = $cli->id;
            
            echo "  <tr>
                        <td>$id</td>
                        <td>".$cli->nome."</td>
                        <td>".$cli->salario."</td>
                        <td>".$cli->nascimento ."</td>
                        <td>".$cli->cidade->nome."</td>
                        <td><button>Editar</button></td>
                        <td><a href='controller/salvarCliente.php?excluir&id=$id'>
                                <button>Excluir</button></a></td>
                    </tr>";
        }
        
            
        ?>
    </table>
    
    <?php

       }

        if( isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('O campo nome não pode ser vazio!'); </script>";
        }

        if( isset($_REQUEST["clienteExcluido"])){
            echo "<script> alert('Cliente excluído com sucesso!'); </script>";
        }

        if( isset($_REQUEST["nome"])){
            $nome = $_REQUEST["nome"];
            echo "<script> alert('Cliente $nome cadastrado(a) com sucesso!'); </script>";
        }
    ?>

</body>
</html>