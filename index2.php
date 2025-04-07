<?php

$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
$v2 = array('a' => 8, 'b' => 9, 'c' => 2,'e' => 5);
$v3 = array("rg" => "00.000.00--X", "cpf" => "000.000.00-00", "cnpj" => "00.000.000/0000--00", "cartao de credito" => "12345");
$chamada = array("aluno1" => "alberto","aluno3" => "bianca","aluno5" => "carlos","aluno24" => "maria");

echo"<h3> Carros </h3>";

foreach($v1 as $pos => $carro){
    echo "[" . $pos . "]  " . $carro . "<br>";
}

echo"<h3> Números </h3>";

foreach($v2 as $pos => $num){
    echo "[" . $pos . "]  " . $num . "<br>";
}

echo"<h3> Informações </h3>";

foreach($v3 as $pos => $carro){
    echo "[" . $pos . "]  " . $carro . "<br>";
}

echo"<h3> Carros </h3>";

foreach($chamada as $pos => $alunos){
    echo "[" . $pos . "]  " . $alunos . "<br>";
}
?>