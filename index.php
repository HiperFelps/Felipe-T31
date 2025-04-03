<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

<form method="post" action="index.php"><h1>Insira seus dados abaixo</h1><br>

<input type="text" name="nome" size="80" placeholder="Nome completo"> <br><br>
<input type="text" name="endereco" placeholder="Endereço"> <br><br>
<input type="number" name="idade" size="3" placeholder="Idade"> <br><br>

<input type="radio" name="opcao" value="masculino"> Masculino <br>
<input type="radio" name="opcao" value="feminino"> Feminino <br>
<input type="radio" name="opcao" value="outro"> Outro <br>
<input type="radio" name="opcao" value="naoinformar"> Prefiro não informar <br><br>

<input type="submit" name="botao" value="Enviar">
</form> 
<?php

if(isset($_POST["botao"])){
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$sexo = $_POST["opcao"];

if($idade >= 18){
    echo"Seu nome é $nome, você tem $idade anos, é do sexo $sexo, e seu endereço é $endereco.";
}else{
    echo "Seu nome é $nome, e você é menor de idade.";
}
}
?>
    
</body>
</html>