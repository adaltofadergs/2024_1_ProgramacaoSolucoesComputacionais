<?php
    require_once('model/cidade.php');
    $cidade = new cidade();
    $consulta = $cidade->consulta();
?>
    <table border="1">
        <?php
            foreach ($consulta as $linha){
                echo"<tr>
                        <td>" . $linha['id'] . "</td>
                        <td>" . $linha['nome'] . "</td>
                        <td><a href='#'>editar</a></td>
                        <td><a href='#'>excluir</a></td>
                     </tr>";   
            }
        ?>
    </table>
