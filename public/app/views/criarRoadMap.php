<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Criar Roadmap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<!-- <div class="container">
  <div class="row">
    <div class="col"> -->


<header>
  <nav class="navbar navbar-expand-lg border-bottom bg-body-tertiary">

    <div class="container-fluid d-flex align-items-center">
      <div class="container-fluid d-flex align-items-center">
        <!-- Seta -->
        <a class="navbar-brand me-2" href="#">
          <i class="bi bi-arrow-left"></i>
        </a>

        <!-- Botão azul ao lado da seta -->
        <div class="ms-4">

          <div class="shine-box d-flex justify-content-center align-items-center">
            <img src="../../assets/img/imgShinesla.png" alt="Logo MetaFlow" class="shine-img">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h3 class="ms-2 mt-2">MetaFlow</h3>
          </div>
          <div class="col">
            <p class="ms-4">Crie seus Roadmaps</p>
          </div>
        </div>
        <!-- </div>
            </div>
          </div> -->
      </div>
    </div>
  </nav>
</header>

<body style="background-color: #F7FFFE;">
  <div class="text-center">
    <h1 class="mt-5 titulo fw-bold">Crie seu Roadmap Personalizado</h1>
    <p class="lead text-secondary">Preencha as informações abaixo e deixe a IA criar um plano de estudos sob medida</p>
  </div>
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="border rounded-3 p-4  caixa-branca">
        <h5>Informações do Roadmap</h5>
        <p class="lead mb-0">Quanto mais detalhes você fornecer, melhor será seu roadmap</p>
        <div class="mb-0">
          <div class="d-flex align-items-center">
            <i class="fs-3 bi bi-lightbulb text-primary ms-3"></i>
            <label for="" class="lead ps-2 fs-5 mb-0">Objetivo</label>
          </div>
          <p class="lead text-black-50 ms-4 fs-6">
            Escolha uma das opções que melhor enquadre no seu objetivo
          </p>
          <div class="ms-4">
            <select class="form-select rounded-4 border border-black mt-0 mb-3">
              <option value="">Opção</option>
              <option value="">Opção</option>
              <option value="">Opção</option>
              <option value="">Opção</option>
              <option value="">Opção</option>
            </select>
          </div>


        </div>

        <div class="d-flex align-items-center mb-0">
          <i class="fs-3 text-primary bi bi-bullseye ms-3"></i>
          <label for="" class="lead ps-2 fs-5 mb-0">Objetivo Especifico</label>
        </div>
        <textarea id="objetivo" class="ms-4 mx-2 rounded-4 border border-black mt-0 me-3" cols="130"></textarea>
        <div class="row mt-3">
          <div class="col-6">
          <div class="d-flex align-items-center mb-0">
            <i class="fs-3 text-primary bi bi-calendar ms-3"></i>
            <label class="lead ps-2 fs-5 mb-0" for="prazo">
              Prazo Desejado
            </label>
          </div>
        <div class="field">
          <input
          class="ms-4 mx-2 rounded-4 border border-black mt-0 me-3 tamanho"
            type="date"
            id="prazo"
            placeholder="dd/mm/aaaa">
            </div>
            </div>
            <div class="col-6">
            <i class="fs-3 text-primary bi bi-mortarboard ms-3"></i>
            <label class="lead ps-2 fs-5 mb-0" for="prazo">
              Seu Nível de escolaridade
            </label>
            <select class="ms-4 form-select rounded-4 border border-black mt-0 mb-3 gay">
              <option value="">Opção</option>
              <option value="">Opção</option>
              <option value="">Opção</option>
              <option value="">Opção</option>
              <option value="">Opção</option>
            </select>
            </div>
        </div>
        <div class="text-center">
          <button class="btn roadmap-btn w-100 mt-5">Gerar Roadmap Personalizado</button>
        </div>
      </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script src="../../assets/js/index.js"></script>
</body>

</html>