<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Pet Style</title>
    <header>
      <img id="logo" src="./img/Logopet.png" alt="">
    </header>
</head>
<body>
  <h2>Login</h2>
  <div class="cadastro">
    <form action="./actions/login_usuario.php" method="post">
   <input type="text" placeholder="Nome de usuário" name="nome">
   <input type="password" placeholder="Senha" name="senha">
  <button type="submit">Entrar</button>
  </form>
</div>
</body>
</html>