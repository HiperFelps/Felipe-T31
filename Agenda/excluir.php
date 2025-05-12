<?php
include('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE * FROM contatos WHERE id = $id";

    $resultado = $mysqli_query($conexao, $sql);
}


?>