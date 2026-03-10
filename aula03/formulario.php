<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="recebe_dados.php" method="post">
        <p>Nome: <input type="text" name="nome"  require> </p>
        <p>Email: <input type="email" name="email"  require> </p>
        <p>idade: <input type="number" name="idade" require> </p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>