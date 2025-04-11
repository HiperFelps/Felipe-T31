<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="pagina_protegida_Ex2.php" method="post">
        <h2>Login</h2>
        <input type="text" id="username" name="username" placeholder="Username" required>
        <br>
        <input type="password" id="senha" name="senha" placeholder="Senha" required>
        <br>
        <button type="submit" name="botao">Enviar</button>
    </form>

    <style>
        body {
            text-align: center;
            font-size: 25px;
            font-family: Arial, sans-serif;
        }
        #username {
            font-size: 20px;
            margin-bottom: 15px;
        }
        #senha {
            font-size: 20px;
            margin-bottom: 20px;

        }
    </style>
</body>
</html>
