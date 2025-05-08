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
