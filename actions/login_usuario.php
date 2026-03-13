<?php 

include_once '../includes/conexao.php';

// captura os dados
$nome_cao = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "SELECT nome, senha FROM clientes WHERE nome = '{$nome_cao}' AND senha = '{$senha}'";

// executar o banco de dados
$resultado = mysqli_query($conexao, $sql);

// validacao do acesso
if($resultado->num_rows > 0){
    // validacao do usuario - cria a sessao
    $_SESSION['Usuario'] =  mysqli_fetch_assoc($resultado);
    header('Location: ../pet/inicial.php');
    print_r($_SESSION);
}else{
    header('Location: ../cadastro.php?msg=semusuario');
}
exit();
?>