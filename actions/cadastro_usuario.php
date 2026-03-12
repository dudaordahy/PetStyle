<?php 

include_once '../includes/conexao.php';

// captura os dados
$nome_cao = $_POST['nome'];
$raca = $_POST['raca'];
$numero = $_POST['numeroTelefone'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (nome, raca, numeroTelefone, senha) VALUES ('{$nome_cao}', '{$raca}', '{$numero}', '{$senha}')";


// executar no banco
mysqli_query($conexao,$sql);

// redireciona
header('Location: ../login.php');
exit();

?>