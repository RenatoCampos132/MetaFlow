<?php
require_once './rotas.php';

$usuario = new Usuario();
$usuario->sairLogin();

// Se for um acesso via link comum, redireciona. 
// Se for via Beacon (JavaScript), o redirecionamento é ignorado.
header('Location: ../controls/index.php');
exit;