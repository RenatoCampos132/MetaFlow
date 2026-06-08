<?php 
require_once '../controls/rotas.php';
$auth = new Usuario();

// Aqui você já aproveita para validar se o cara pode estar aqui
if (!$auth->validarLogin()) {
    header('Location: ../controls/index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once '../../assents/component/head.php';?>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../../assents/component/navbar.php'; ?>


    <main class="app-container p-4 flex-grow-1">
        <?php 
            try {
                require pages();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        ?>
    </main>

    <?php require_once '../../assents/component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assents/js/nav.js"></script>
    <script src="../../assents/js/efeitoContar.js"></script>
    <script src="../../assents/js/chartAnimar.js"></script>
    <script src="../../assents/js/encerrarSessao.js"></script>
    <script src="../../assents/js/impedirRetorno.js"></script>
    <script src="../../assents/js/updateClock.js"></script>
</body>

</html>