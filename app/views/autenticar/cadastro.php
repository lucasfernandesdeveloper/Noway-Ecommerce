<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se | Noway</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<head>
<body>
    <div class="cadastro-section">
        <div class="form-section">
        <div class="img-cadastro"></div>
            <form action="../cadastro/criar/" method="POST">
                <div class="logo">
                    <img src="../img/logo-preta.png">
                </div>
                <div class="titulo">
                    <h4>Criar uma conta</h3>
                </div>
                <div class="input-group">
                    <input type="text" id="inputNome" name="nome" placeholder="Nome" class="input-branco" required>
                    <input type="text" id="inputSobrenome" name="nome" placeholder="Sobrenome" class="input-branco " required>
                </div>
                <input type="text" id="inputNome" name="nome" placeholder="Nome" class="input-branco input-sm" required>
                    <input type="text" id="inputSobrenome" name="sobrenome" placeholder="Sobrenome" class="input-branco input-sm" required>
                <input type="email" id="email" name="email" placeholder="Email" class="input-branco" required>
                <input type="text" id="cpf" name="cpf" placeholder="CPF" class="input-branco" required>
                <div class="input-group">
                <input type="date" id="inputData" name="data_nascimento" placeholder="Data de Nascimento" class="input-branco" required>
                <select name="sexo" id="inputSexo" class="input-branco">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="NI">Prefiro não informar</option>
                </select>
                <input type="date" id="inputData" name="data_nascimento" placeholder="Data de Nascimento" class="input-branco input-sm" required>
                <select name="sexo" id="inputSexo" class="input-branco input-sm">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="NI">Prefiro não informar</option>
                </select>
                </div>
                <div class="input-group">
                <input type="password" id="Senha" name="senha" placeholder="Senha" class="input-branco btn" required>
                <input type="password" id="Confirmarsenha" placeholder="Confirmar Senha" class="input-branco" required>
                </div>
                <input type="password" id="Senha" name="senha" placeholder="Senha" class="input-branco input-sm btn" required>
                <input type="password" id="Confirmarsenha" placeholder="Confirmar Senha" class="input-branco input-sm btn" required>
                <button type="submit" class="btn-preto btn">Registrar-se</button>
                <div class="linha">
                    <hr> 
                    <p>ou</p>
                    <hr> 
                </div>
                <button class="btn btn-google">
                    <img src="../img/cadastro/icon-google.webp">
                    <p>Entrar com o Google</p>
                </button>
                    <p class="container-link">Já tem uma conta? <a href="tela_login.html"> Entrar</a></p>
            </form>
        </div>
    </div>
</body>
</html>