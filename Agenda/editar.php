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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
        <h2>Editar Contato</h2>
        Nome: <input type="text" name="nome" value="<?php echo $contato['nome'];?>" required><br><br>
        Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco'];?>" required><br><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone'];?>" required><br><br>
        <input type="submit" value="Atualizar">
        </form>
        
    
</body>
</html>

<?php

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql2 = "UPDATE contatos SET nome='$nome', endereco= '$endereco', telefone= $telefone WHERE id='$id'";

    if(mysqli_query($conexao, $sql2)){
        echo "contato atualizado com sucesso";
        echo "<a href='index.php'>Voltar<?a>";
    }else{
        echo "Erro ao atualizar" . mysqli_error($conexao);
    }
}