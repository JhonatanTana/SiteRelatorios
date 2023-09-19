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

    if ($_SESSION['perfil_id'] == 5) {
        if ($linha == 4 || $linha == 16) {
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

if ($perfil_id == 2 ||$perfil_id == 3 || $perfil_id == 4 ) {
    header('Location:inicio.php?permissao=erro');}
?>

<link rel="stylesheet" href="css/relatorios.css">

<h1>Relatórios Logísticos</h1>
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
