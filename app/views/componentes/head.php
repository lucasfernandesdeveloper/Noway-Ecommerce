<?php
$page = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

switch ($page[0]) {
	case "home": 
        switch ($page[1]){
            case "head": $title = "Noway | Configurações"; break;
            case "header": $title = "Noway | Cabeçalho"; break;
            default:  $title = "Noway | Bem-vindo"; break;
        }
    break;
        
	case "autenticar": switch ($page[1]){
        case "cadastro": $title = "Noway | Cadastre-se"; break;
        case "login":  $title = "Noway | Fazer login"; break;
        default:  $title = "Noway | Os melhores preços para você"; break;
    }
    break;
    default:  $title = "Noway | Os melhores preços para você"; break;
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../css/padrao.css">
    <script src="../js/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>