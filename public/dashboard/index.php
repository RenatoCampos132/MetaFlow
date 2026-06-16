
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Moderno</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">


</head>

<body>

<div class="wrapper">

    <input type="checkbox" id="menu-toggle">

    <!-- Sidebar -->

    <aside class="sidebar">

        <div class="logo">
            <img src="../AVULSO/img/logo.png" alt="" height="30px" width="30px">MetaFlow
        </div>

        <div class="menu-title">
            CORE
        </div>

        <a href="#" class="menu-item">
        <i class="bi bi-bar-chart"></i> <span>Dashboard</span>
        </a>

        <a href="#" class="menu-item">
        <i class="bi bi-calendar-check"></i> <span>Agendamentos</span>
        </a>

        <a href="#" class="menu-item">
        <i class="bi bi-person-square"></i> <span>Professores</span>
        </a>

        <a href="#" class="menu-item">
        <i class="bi bi-box-fill"></i> <span>Salas</span>
        </a>

        <a href="#" class="menu-item">
        <i class="bi bi-newspaper"></i> <span>Relatórios</span>
        </a>

        <a href="#" class="menu-item">
        <i class="bi bi-gear"></i> <span>Configurações</span>
        </a>

    </aside>

    <!-- Conteúdo -->

    <main class="main-content">

        <nav class="topbar">

            <label for="menu-toggle" class="menu-btn">
            <i class="bi bi-three-dots-vertical"></i>
            </label>

            <h5 class="m-0">
                Sistema de Agendamentos
            </h5>

        </nav>

        <div class="container-fluid p-4">

            <h1 class="mb-4">
                Dashboard
            </h1>

            <div class="row g-4 mb-4">

                <div class="col-md-3">
                    <div class="dashboard-card primary">
                        <div class="card-body">
                            Agendamentos
                        </div>
                        <div class="card-footer">
                            Ver detalhes →
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dashboard-card warning">
                        <div class="card-body">
                            Pendências
                        </div>
                        <div class="card-footer">
                            Ver detalhes →
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dashboard-card success">
                        <div class="card-body">
                            Recursos
                        </div>
                        <div class="card-footer">
                            Ver detalhes →
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dashboard-card danger">
                        <div class="card-body">
                            Relatórios
                        </div>
                        <div class="card-footer">
                            Ver detalhes →
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="chart-box">

                        <h5>
                            Gráfico de Utilização
                        </h5>

                        <div class="chart-placeholder">
                            Área para Chart.js
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>