<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noway</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="images/icons/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="autenticar/login">Fazer Login</a>
    <a href="autenticar/cadastro">Cadastrar-se</a>
     <?php echo 'Olá eu sou o ' . $data['name']; ?>

    <!--Cards de Item-->
    <div class="cards">
        <div class="card">
            <img src="images/icons/heart.svg" alt="Botão de gostar" class="heart">
            <div class="discount">
                <span class="text_discount">-40%</span>
            </div>
            <div class="price">
                <s>R$399,99</s>&nbsp;&nbsp;<span>R$299,99</span>
            </div>
        </div>
    </div>
    
</body>
</html>