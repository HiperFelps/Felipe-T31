<?php
include('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM contatos WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) == 1){
        $contato = mysqli_fetch_assoc($resultado);
    }else{
        echo "O contato não foi encontrado";
        exit;
    }

}
?>
<?php

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql2 = "UPDATE contatos SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE id='$id'";

    if(mysqli_query($conexao, $sql2)){
        echo "contato atualizado com sucesso <br>";
        echo "<a href='index.php'>Voltar</a>";
        exit;
    }else{
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
        <h2 id="titulo">Editar Contato</h2>
        <div id="form">
        <form method="post">
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        <label for="nome" class="labels">Nome: </label><br>
        <input type="text" name="nome" value="<?php echo $contato['nome'];?>" required><br><br>
        <label for="endereco" class="labels">Endereço: </label><br>
        <input type="text" name="endereco" value="<?php echo $contato['endereco'];?>" required><br><br>
        <label for="telefone" class="labels">Telefone: </label><br>
        <input type="text" name="telefone" value="<?php echo $contato['telefone'];?>" required><br><br>
        <input type="submit" name="atualizar" value="atualizar" id="button"><br><br>
        
        </form>
        </div>
            <a href="index.php" id="link">Voltar</a>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }
            #titulo {
                color: #333;
                text-align: center;
            }
            #form {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
                margin-left: 41%;
                margin-right: 41%;
            }
            #button {
                background-color: #007BFF;
                color: white;
                border: none;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-left: 25%;
                margin-right: 25%;
                cursor: pointer;
            }
            #link {
                text-decoration: none;
                color: #007BFF;
                font-weight: bold;
                text-align: center;
                display: block;
                margin-top: 20px;
            }
            .labels {
                color: #333;
                font-family: Arial, sans-serif;
                font-size: 16px;
            }
        </style>
</body>
</html>