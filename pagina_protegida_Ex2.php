<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>

<style>
        body {
            text-align: center;
            font-size: 25px;
            font-family: Arial, sans-serif;
        }
</style>

<?php
    if (isset($_POST['botao'])) {
        $username = $_POST['username'];
        $senha = $_POST['senha'];

        if($username == "professor" && $senha == "1234"){
            echo "<h1>Bem-vindo à página protegida, $username!</h1>";
            echo "<p>Você tem acesso a informações confidenciais.</p>";
            echo "<a href='Exercicio2.php'>Voltar à página inicial</a>";

        }else if($username == "aluno" && $senha == "1234"){ 
            echo "<h1>Bem-vindo à página protegida, $username!</h1>";
            echo "<p>Você tem acesso a informações confidenciais.</p>";
            echo "<a href='Exercicio2.php'>Voltar à página inicial</a>";
        }else{
            echo "<h1>Acesso Negado</h1>";
            echo "<p>Usuário ou senha incorretos.</p>";
            echo "<a href='Exercicio2.php'>Tentar Novamente</a>";
        }
    }
    ?>
</body>
</html>
