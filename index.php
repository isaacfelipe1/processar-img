<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando imagens com PHP</title>
</head>
<body>

    <form action="leitor.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" accept=".zip" >
        <input type="submit" value="enviar" name="acao">
    </form>
    
</body>
</html>