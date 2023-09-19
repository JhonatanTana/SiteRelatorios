<?php
    require_once 'certificador_login.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="icon" type="image/png" href="/src/Logo Casa.jpg"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inicio.css">
    <title>Nova Era - Início</title>
</head>
<body>
<header>
    <a href="inicio.php"><img src="src/Logo.jpeg" alt="Logo"></a>
    <div class="BemVindo">
        <a href="logoff.php"><i class="fi fi-rs-exit" id="logout"></i></a>
    </div>
</header>

<nav>
    <ul>
        <li><a href="relatorio_comercial.php">Relatórios Comerciais</a></li>
        <li><a href="relatorio_logistica.php">Relatórios Logísticos</a></li>
    </ul>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
