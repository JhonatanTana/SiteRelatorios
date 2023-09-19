<?php
require_once 'certificador_login.php';
require_once 'menu.php';
?>

<?php

$links = array();

$arquivo = fopen('../Links.hd', 'r');

$linha = 1;

while (!feof($arquivo)) {
    $registro = fgets($arquivo);
    $linha++;

    if ($_SESSION['perfil_id'] == 2) {
        if ($linha == 2 || $linha == 16) {
            $links[] = $registro;
        }
    }elseif ($_SESSION['perfil_id'] == 3) {
        if ($linha == 2 || $linha == 16 || $linha == 4) {
            $links[] = $registro;
        }
    }elseif ($_SESSION['perfil_id'] == 4) {
        if ($linha == 2 || $linha == 16) {
            $links[] = $registro;
        }
    } else {
        if ($linha >= 13 && $linha <= 16) {
            $links[] = $registro;
        }
    }
}

fclose($arquivo);

$perfil_id = $_SESSION['perfil_id'];
$comercial = 'relatorio_comercial.php';
$logistica = 'relatorio_logistica.php';

if ($perfil_id == 5 ||$perfil_id == 6 ) {
    echo '<script src="JS/erro_permissao.js"></script>';
    echo '<script type="text/javascript">window.history.back();</script>';
}?>

<?php
    if(isset($_GET['login']) && $_GET['login'] == 'error') { ?>

    <div class="text-danger">
        <p> Usuário ou senha inválido(s) </p>
    </div>

<?php } ?>

<link rel="stylesheet" href="css/relatorios.css">

<h1>Relatórios Comerciais</h1>
<div class="container">
    <?php foreach($links as $link) { ?>

        <?php

        $dados = explode('#', $link);

        if (count($dados) < 3) {
            continue;
        }

        ?>

        <div class="container2">
            <div>
                <h3> <?= $dados[1] ?>
                    <a href="<?= $dados[2] ?>" target="_blank"><img src="src/arrow-up-right-and-arrow-down-left-from-center.png" alt=""></a>
                </h3>
                <iframe title="<?= $dados[1] ?>" src="<?= $dados[2] ?>" frameborder="0" allowFullScreen="false"></iframe>
            </div>
        </div>
    <?php } ?>
</div>

<footer>
    <p>
        AT GARCIA MATERIAIS DE CONSTRUÇÃO LTDA  |  Copyright© 2023 | TODOS OS DIREITOS RESERVADOS.
    </p>
</footer>
</body>
</html>
