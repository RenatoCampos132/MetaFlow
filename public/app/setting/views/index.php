<?php 
require_once '../../controls/rotas.php';


$auth = new Usuario();

// Aqui você já aproveita para validar se o cara pode estar aqui
if (!$auth->validarLogin()) {
    header('Location: ../controls/index.php');
    exit;
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once '../../../assents/component/headAdmin.php';?>
</head>

<body>

    <?php require_once '../../../assents/component/navbarAdmin.php';?>

    <div class="container">
        <?php
            try {
                require pages();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        ?>
    </div>

    <?php require_once '../../../assents/component/footerAdmin.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="../../../assents/js/efeitoContar.js"></script>
    <script src="../../../assents/js/chartAnimar.js"></script>
    <script src="../../../assents/js/encerrarSessao.js"></script>
    <script src="../../../assents/js/impedirRetorno.js"></script>
</body>

</html>