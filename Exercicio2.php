<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="pagina_protegida.php" method="post">

    <h1>Insira seus dados</h1>

    <input type="text" name="user" size="50" placeholder="Usuário"><br><br>
    <input type="password" name="senha" placeholder="Senha"><br><br>

    <input type="submit" name="botao" value="Entrar">

    </form>
    <?php

    $user = $_POST["user"];
    $senha = $_POST["senha"];
    



    ?>    
</body>
</html>