<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
</head>
<body>
    <h1>Adicionar Convidados</h1>
    <form action="Exercicio 2.3.php" method="post">
        <label>Insira o nome dos seus convidados</label><br>
        <input type="text" size="80" name="nome"><br><br>
        <input type="submit" name="adicionar" value="Adicionar"><br><br>
        <input type="submit" name="remover" value="Remover"><br><br>
    </form>
</body>
</html>

<?php

    session_start();

    if (!isset($_SESSION["convidados"])){
        $_SESSION["convidados"] = [];
    }
    if(isset($_POST["adicionar"])){
        $nome = $_POST["nome"];
        array_push($_SESSION["convidados"], $nome);

    foreach ($_SESSION["convidados"] as $i => $v) {
            echo "[$i] - $v <br>";
        }
    }
    if(isset($_POST["remover"])){
        array_pop($_SESSION["convidados"]);

        foreach ($_SESSION["convidados"] as $i => $v) {
            echo "[$i] - $v <br>";
        }
    }


?>
