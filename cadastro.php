<?php 
    include_once './includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Pet Style</title>
    <header>
      <img id="logo" src="./img/Logopet.png">
    </header>
</head>
<body>
    <h2>Cadastro</h2>
    <div class="cadastro">
        <form action="./actions/cadastro_usuario.php" method="post">
            <input type="text" placeholder="Nome do cão" name = "nome">
            <input type="text" placeholder="Raça" name = "raca">
            <input type="tel" placeholder="Número de telefone" name = "numeroTelefone"> 
            <input type="password" placeholder="Senha" name = "senha">
            <button type="submit">Cadastrar</button>
            <a href="login.php">fazer login</a>
        </form>
    </div>
</body>
</html>