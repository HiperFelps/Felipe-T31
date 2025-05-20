<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<h2 id='h2'>Contato excluído com sucesso!</h2>";
    echo "<br><a href='index.php' id='link'>Voltar</a>";
} else {
    echo "Erro ao excluir: " . mysqli_error($conexao);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo o Contato</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
            text-align: center;
        }
        #h2 {
            color: #333;
            text-align: center;
        }
        #link {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</body>
</html>