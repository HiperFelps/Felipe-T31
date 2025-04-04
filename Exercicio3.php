<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Calculadora de Exame</h1>
    <form action="Exercicio3.php" method="post">
        <label>Digite sua média:</label>
        <br>
        <input type="number" id="nota" name="nota" step="0.1" min="0" max="10" required>
        <br>
        <button type="submit" name="botao">Enviar</button>
        <br><br>
    </form>
    <style>
        body {
            text-align: center;
            font-size: 25px;
            font-family: Arial, sans-serif;
        }
    </style>

        <?php

        if(isset($_POST["botao"])){
            $nota = $_POST['nota'];

            if($nota <= 1.7){
                echo 'Você está reprovado!';
            }else if($nota >= 1.8 && $nota < 7){
                $nota_exame = (50-(6*$nota))/4;
                echo 'Você está em exame! Sua nota no exame deve ser: '.$nota_exame;
            }else if($nota >= 7){
                echo 'Você está aprovado!';
            }
    }

        ?>

</body>
</html>
