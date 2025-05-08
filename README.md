Eu não sei deireito o que eu estou fazendo, posso ter criado alguns "branches" sem saber o que iria acontecer.
Para o Exercício 2 funcionar, é necessário que também seja usado o documento "pagina_protegida".
Espero mesmo não ter feito uma cagada :)
Exercício 2, Intruções:
Username: professor
Senha: 1234
ou
Username: aluno
Senha: 1234

Tenho q lembrar de editar o documento com:
echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] . "   <a href='edita.php?id=" . $linha["id"] . "'>Editar</a>    <a href='exclui.php?id=" . $linha["id"] . "'>Excluir</a><br>";

editar.php

<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM contatos where id = $id";

$resultado = mysqli_query($conexao, $sql);

?>

<html>
<body>
<h2>Cadastrar Contato</h2>

    <form method="post" action="edita.php">

        Nome: <input type="text" name="nome" required><br><br>
        Endereço: <input type="text" name="endereco" required><br><br>
        Telefone: <input type="text" name="telefone" required><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>


exclui.php

<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";

?>
