<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MetaFlow - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <!-- Fundo gradiente -->
  <div class="login-wrapper d-flex justify-content-center align-items-center min-vh-100">
    
    <!-- Quadro branco centralizado -->
    <div class="card shadow-lg p-5 login-card text-center">
      
      <!-- Quadrado gradiente com brilho e logo -->
      <div class="shine-box d-flex justify-content-center align-items-center mx-auto mb-3">
        <img src="../../assets/img/imgShinesla.png" alt="Logo MetaFlow" class="shine-img">
      </div>

      <!-- Nome e tagline -->
      <h2 class="fw-bold">MetaFlow</h2>
      <p class="text-muted mb-4">Alcance seus objetivos com roadmaps personalizados</p>

      <!-- Formulário de login -->
      <form action="../pages/pageBemVindo.php" method="POST">
        <div class="mb-3 text-start">
          <label for="email" class="form-label">E-mail</label>
          
          <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
        </div>
        <div class="mb-3 text-start">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="••••••••" required>
        </div>

        <div class="d-flex justify-content-between mb-3">
          <a href="recuperar.php" class="text-decoration-none">Esqueci minha senha</a>
        </div>

        <button href="../pages/pageBemVindo.php" type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>

      <div class="mt-3">
        <span>Não tem uma conta?</span>
        <a href="./criarConta.php" class="text-decoration-none">Criar conta</a>
      </div>
    </div>
  </div>

</body>
</html>
<style>
/* style.css */
