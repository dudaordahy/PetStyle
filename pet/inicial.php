<?php 
    include_once '../includes/conexao.php';
    include_once '../includes/logado.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pet Style</title>

<link rel="stylesheet" href="inicial.css">

<!-- Ícones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- ================= HEADER ================= -->
<header>
    <div class="header-top">

        <div class="menu-icon">
            <i class="fas fa-bars"></i>
        </div>

        <div class="search-container">
            <input type="text" placeholder="Buscar produtos para seu cachorro...">
            <button><i class="fas fa-search"></i></button>
        </div>

        <div class="profile">
            <i class="fas fa-user"></i>
        </div>

    </div>
</header>

<!-- ================= BOLINHAS ================= -->
<section class="categories-icons">

    <a href="../Projeto-1/alimento.php" class="icon-box">
        <div class="icon-circle">
            <i class="fas fa-bone"></i>
        </div>
        <span>Rações</span>
    </a>

    <a href="../Projeto-1/alimento.php" class="icon-box">
        <div class="icon-circle">
            <i class="fas fa-bed"></i>
        </div>
        <span>Conforto</span>
    </a>

    <a href="../Projeto-1/alimento.php" class="icon-box">
        <div class="icon-circle">
            <i class="fas fa-shower"></i>
        </div>
        <span>Higiene</span>
    </a>

    <a href="../Projeto-1/alimento.php" class="icon-box">
        <div class="icon-circle">
            <i class="fas fa-baseball-ball"></i>
        </div>
        <span>Brinquedos</span>
    </a>

    <a href="../Projeto-1/alimento.php" class="icon-box">
        <div class="icon-circle">
            <i class="fas fa-dog"></i>
        </div>
        <span>Passeio</span>
    </a>
     
    <a href="../Projeto-1/alimento.php" class="icon-box">
        <div class="icon-circle">
            <i class="fas fa-tshirt"></i>
        </div>
        <span>Roupa</span>
    </a>

</section>

</div>
<div class="space"></div>

<!-- ================= CARROSSEL ================= -->
<h1>PROMOÇÕES DA SEMANA</h1>
<section class="carousel">

    <input type="radio" name="slider" id="s1" checked>
    <input type="radio" name="slider" id="s2">
    <input type="radio" name="slider" id="s3">

    <div class="cards">

        <label for="s1" class="card" id="slide1">
            <img src="pet1 (2400 x 800 px).png" alt="">
        </label>

        <label for="s2" class="card" id="slide2">
            <img src="pet2 (2400 x 800 px).png" alt="">
        </label>

        <label for="s3" class="card" id="slide3">
            <img src="pet3 (2400 x 800 px).png" alt="">
        </label>

    </div>

</section>

<!-- ================= RODAPÉ ================= -->
<footer>

    <div class="footer-container">
        <div>
            <h3>ATENDIMENTO</h3>
            <p>(51) 99315-7019</p>
            <p>contato@petstyle.com.br</p>
        </div>

        <div>
            <h3>CATEGORIAS</h3>
            <p>Rações</p>
            <p>Conforto</p>
            <p>Higiene</p>
            <p>Brinquedos</p>
            <p>Passeio</p>
            <p>Roupas</p>
        </div>

        <div>
            <h3>SERVIÇOS</h3>
            <p>Entrega Rápida</p>
            <p>Clube de Descontos</p>
            
        </div>

        <div>
            <h3>INSTITUCIONAL</h3>
            <p>Home</p>
            <p>Trocas e Devoluções</p>
            <p>Privacidade</p>
        </div>
    </div>

    <div class="footer-bottom">
        © 2026 Pet Style
    </div>

</footer>

</body>
</html>