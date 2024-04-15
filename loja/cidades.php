<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Cidades</title>
</head>
<body>
    <h1>Cidades</h1>

    <form method="POST" action="controller/salvarCidade.php" >
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome da cidade..." name="txtNome" />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <hr>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Itati</td>
            <td><button>Editar</button></td>
            <td><button>Excluir</button></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Tangamandápio</td>
            <td><button>Editar</button></td>
            <td><button>Excluir</button></td>
        </tr>
        <?php
            if( isset($_REQUEST["nome"])){
                $nome = $_REQUEST["nome"];
                echo "  <tr>
                            <td>3</td>
                            <td>$nome</td>
                            <td><button>Editar</button></td>
                            <td><button>Excluir</button></td>
                        </tr>";
            }
        ?>
    </table>
    
    <?php
        if( isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('O campo nome não pode ser vazio!'); </script>";
        }

        if( isset($_REQUEST["nome"])){
            $nome = $_REQUEST["nome"];
            echo "<script> alert('Cidade $nome cadastrada com sucesso!'); </script>";
        }
    ?>

</body>
</html>