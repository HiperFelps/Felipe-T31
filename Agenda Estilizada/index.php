<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1 id="title">Cadastrar contato</h1>
    <div id="form">
    <form action="salvar.php" method="post">
        <label for="nome">Nome: </label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="endereco">Endereço: </label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>
        <label for="telefone">Telefone: </label><br>
        <input type="text" name="telefone" id="telefone" min="11" max="11" required><br><br>
        <input type="submit" value="Submit" id="button"><br><br>
    </form>
    </div>
    <h2 id="lista">Lista de contatos</h2>
    <div id="contatos">
    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
            "   <br><a href='editar.php?id=" . $linha["id"] . "'>Editar</a>    
            <a href='excluir.php?id=" . $linha["id"] . "'>  Excluir</a><br>";
        }
    } else {
        echo "Nenhum contato encontrado.";
    }
    ?>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        #title {
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
            text-align: center;
        }
        #lista {
            color: #333;
            text-align: center;
        }
        #contatos {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 40%;
            margin-right: 40%;
        }
        #button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 25%;
            margin-right: 25%;
            }
            #button:hover {
                font-weight: bold;
                background-color: #339cff;
                color: white;
                timeing: 0.3s;

        }
    </style>

    </style>
    <script>
        const telefoneInput = document.getElementById('telefone');
        telefoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) value = value.slice(0, 11);
            if (value.length > 0) value = '(' + value;
            if (value.length > 3) value = value.slice(0, 3) + ') ' + value.slice(3);
            if (value.length > 10) value = value.slice(0, 10) + '-' + value.slice(10);
            e.target.value = value;
        });
    </script>
    
</body>
</html>
