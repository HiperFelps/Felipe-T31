<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Cadastrar contato</h1>
    <form action="salvar.php" method="post">
        <label for="nome">Nome: </label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="endereco">Endereço: </label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>
        <label for="telefone">Telefone: </label><br>
        <input type="text" name="telefone" id="telefone" max-lenght="11" required><br><br>
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
            "   <a href='edita.php?id=" . $linha["id"] . "'>Editar</a>    
            <a href='exclui.php?id=" . $linha["id"] . "'>  Excluir</a><br>";
        }
    } else {
        echo "Nenhum contato encontrado.";
    }
    ?>
    
</body>
</html>
