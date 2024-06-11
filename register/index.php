<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cover Template · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../main.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../style.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cadastrar</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="../">Início</a>
        <a class="nav-link active" aria-current="page">Cadastrar</a>
        <a class="nav-link" href="../login">Login</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <form>
      <input type="email" id="loginEmail" placeholder="Digite seu email" class="form-control"/>
      <br>
      <input type="password" id="loginSenha" placeholder="Digite sua senha" class="form-control"/>
      <br>
      <input type="password" id="loginSenhaConfirm" placeholder="Confirme sua senha" class="form-control"/>
      <br>
      <button onclick="VerifyRegister()" class="btn btn-light">ACESSAR</button>
    </form>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, criado por <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    <p>Projeto criado por <a href="https://github.com/Nathan2076" class="text-white">@Nathan2076</a>.</p>
  </footer>
</div>
  </body>
</html>