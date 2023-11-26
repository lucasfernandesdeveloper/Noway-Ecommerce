<!-- Incluindo os arquivos padrão -->
<?php include_once ROOT_PATH . '/app/views/componentes/head.php'?>

<body>
    <header class="container-header">
        <div class="container-logo">
            <img src="../public/img/logo-branca.png">
        </div>
        
        <nav class="container-info">
            <ul class="nav-menu">
                <li class="nav-item"><a href="#" class="nav-link">Noway Promo</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-n"></i>Lançamento</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-person"></i>Masculino</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-person-dress"></i>Feminino</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-children"></i>Infantil</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Noway</a></li>
            </ul>

            <!--Nav-Hamburguer-->
            <div class="container-nav">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

        <!--Barra de Pesquisa-->
        <div class="container-busca">
            <div class="container-pesquisa">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar">
            </div>
       
            <div class="container-icons">
                <a href="#"><i class="fa-regular fa-heart"></i></a>
                <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                <a href="#"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>

        
    </header>    

    

    <script src="../public/js/nav-responsivo.js"></script>
