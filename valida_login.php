<?php

session_start();
$autenticado = false;
$usuario_perfil_id = null;

$perfis = array(
    1 => 'Administrativo',
);

$usuarios_app = array(
    array('nome' => 'admin', 'senha' => 'admin', 'perfil_id' => 1),
);

foreach ($usuarios_app as $user) {

    if ($user['nome'] == $_POST['nome'] && $user['senha'] == $_POST['senha']) {
        $autenticado = true;
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if ($autenticado) {
    $_SESSION ['autenticado'] = 'SIM';
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: inicio.php');
}else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location:index.php?login=error');
}
$comercial = 'relatorio_comercial.php';
$logistica = 'relatorio_logistica.php';



