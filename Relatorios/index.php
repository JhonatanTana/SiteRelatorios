<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="icon" type="image/png" href="/src/Logo Casa.jpg"/>
    <link rel="stylesheet" href="css/login.css">
    <script src="JS/login.js"></script>
    <script src="JS/usuario.js"></script>
    <title>Nova Era - Login</title>
</head>
<body>
<?php if(isset($_GET['login']) && $_GET['login'] == 'error') { ?>

    <div class="text-danger">
        <p> Usuário ou senha inválido(s) </p>
    </div>

<?php } ?>
    <div class="container">
        <form action="valida_login.php" method = 'post'>
            <img src="src/Logo Nova Era.png" alt="Logo">
            <h2>Login</h2>
            <div class="user">
                <input type="text" name="nome" required placeholder="Usuário" id="login" oninput="convertToLowerCase(this)">
            </div>
            <div class="password">
                <input type="password" name="senha" required placeholder="Senha" id="senha">
            </div>

            <input type="submit" id="submit" value="Entrar">

        </form>
    </div>
</body>
</html>