<?php
if(isset($_GET['url'])){
    $page = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
} else {
    $page = [''];
}

switch ($page[0]) {
	case "home": 
        switch ($page[1]){
            case "head": $title = "Noway | Configurações"; 
            $links = '<link rel="stylesheet" href="../public/css/header.css">';
            break;
            case "header": $title = "Noway | Cabeçalho"; 
            $links = '<link rel="stylesheet" href="../public/css/header.css">';
            break;
            default:  $title = "Noway | Bem-vindo"; break;
        }
    break;
        
	case "autenticar": switch ($page[1]){
        case "cadastro": $title = "Noway | Cadastre-se"; break;
        case "login":  $title = "Noway | Fazer login"; break;
        default:  $title = "Noway | Os melhores preços para você"; 
        $links = '<link rel="stylesheet" href="../public/css/header.css">';
        break;
    }
    break;
    default:  $title = "Noway | Os melhores preços para você"; 
    $links = '<link rel="stylesheet" href="../public/css/header.css">';
    break;
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <script src="../js/jquery-3.7.1.js"></script>
    <!--Links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Link CSS-->
    <?php echo $links ?>
</head>