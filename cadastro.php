<?php 
    include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>CADASTRO</title>
    <header>
      <img id="logo" src="../lala/Logopet - 1 - Editado.png" alt="">
    </header>
</head>
<body>
  <h2>Cadastro</h2>
  <div class="cadastro">
    <form>
 <input type="text" placeholder="Nome do cão">
<input type="text" placeholder="Raça">
<input type="tel" placeholder="Número de telefone">
<input type="password" placeholder="Senha">
  <button type="submit">Cadastrar</button>
  </form>
</div>
</body>
</html>