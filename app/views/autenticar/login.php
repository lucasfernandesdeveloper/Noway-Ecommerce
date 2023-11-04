<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Noway</title>
    <link rel="stylesheet" href="../css/autenticar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<div class="cadastro-section">
    <div class="form-section">
    <div class="img-cadastro"></div>
        <form action="../autenticar/logar/" method="POST">
            <div class="logo">
                <img src="../img/logo-preta.png">
            </div>
            <div class="titulo">
                <h4>Criar uma conta</h3>
            </div>
                <input type="email" placeholder="E-mail" class="input-branco" name="email" required>
                <input type="password" placeholder="Senha" class="input-branco" name="senha" required>
                <button type="submit" class="btn-preto">Entrar</button>
                <div class="linha">
                    <hr> 
                    <p>ou</p>
                    <hr> 
                </div>
                <button class="btn btn-google">
                    <img src="../img/cadastro/icon-google.webp">
                    <p>Entrar com o Google</p>
                </button>
            <p class="container-link">Não tem uma conta?<a href="tela_registro.html"> Inscreva-se</a></p>
            </form>
        </div>
    </div>
</body>
</html>