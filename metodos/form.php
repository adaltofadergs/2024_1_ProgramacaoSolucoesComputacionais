<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
    <style>
        input[type=text]{
            width: 30px;
        }
    </style>    
</head>
<body>
    <form action="mediaPost.php" method="post">
        <h2>Cálculo da Média</h2>
        Nota 1 <input type="text" name="a1" required><br>
        Nota 2 <input type="text" name="a2" required><br>
        Nota 3 <input type="text" name="a3" required><br>
        Nota 4 <input type="text" name="a4" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>