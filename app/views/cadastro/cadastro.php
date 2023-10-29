<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="../images/LOGO.png">
    <link rel="stylesheet" href="/public/css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<body>
    <div class="cadastro" class="cadastro">
        <div class="img-cadastro"></div>
        <div class="form">
    <div class="logo">
        <img src="/public/img/Logo_completa.png">
    </div>
    <div class="titulo">
        <h3>Criar uma conta</h3>
    </div>
    <div class="formulario">
        <form action="../cadastro/criar/" class="ficha" method="POST">
            <label for="nome" class="input-flex">
             <input type="text" id="Nome" name="nome" placeholder="Nome" class="input" required>
             <input type="text" id="Sobrenome" name="nome" placeholder="Sobrenome" class="input" required>
            </label>
             <input type="email" id="email" name="email" placeholder="Email" class="input" required><br>
             <input type="text" id="cpf" name="cpf" placeholder="CPF" class="input" required>
             <input type="date" id="inputData" name="data_nascimento" placeholder="Data de Nascimento" class="input" required>
             <select name="sexo" id="inputSexo">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                <option value="NI">Prefiro não informar</option>
                </select><br>
             <input type="password" id="Senha" name="senha" placeholder="Senha" class="input" required>
            
             <input type="password" id="Confirmarsenha" placeholder="Confirmar Senha" class="input" required>
             <button type="submit" class="btn-principal-preto btn">Registrar-se</button>
        </form>

        <div class="linha-com-texto">
            <hr class="linha-horizontal"> 
            <p>Ou</p>
            <hr class="linha-horizontal"> 
        </div>
        <div class="btn-icon">
             <button class="google btn">
               <img src="/public/img/google.webp">
                Entrar com o Google
            </button>
        </div>
        <p class="container-link">Já tem uma conta? <a href="tela_login.html"> Entrar</a></p>
    </div>
</div>
    </div>
  
 
</body>
</html>