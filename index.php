<?php 

    require_once "utils/connection/connection.php";

    $connection = new connection;

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Styles/StylesGeneral.css">
  <link rel="stylesheet" href="./Styles/StyleIndex.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:wght@100;400&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>W31rd W3bs1t3</title>
</head>

<body>
  <header class="w-100 position-sticky">
    <nav class="navbar navbar-expand-lg bg-transparent w-100">
      <div class="container-fluid">
        <h1 class="logo">
          <a class="navbar-brand fw-bold" href="./index.php">W31rd W3bs1t3</a>
          <a class="navbar-brand fw-bold dotcom" href="./index.php">.com</a>
        </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item align-self-center">
              <a class="nav-link " aria-current="page" href="./lorem.php">Lorem</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link" href="./contactanos.php">Contáctanos</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link" href="./aboutUs.php">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary w-100 px-5 py-2" data-bs-toggle="modal"
                data-bs-target="#login">Ingresar</button>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div id="login" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="Login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex">
          <h1 class="logo w-100">
            <a class="navbar-brand fw-bold modal-title" href="./index.php">W31rd W3bs1t3</a>
            <a class="navbar-brand fw-bold modal-title dotcom" href="./index.php">.com</a>
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-5">
          <form name="loging" action="" method="post">
            <h2 class="modal-title">Ingresar</h2>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="user" name="user" placeholder="Usuario" required>
              <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
              <label for="floatingPassword">Contraseña</label>
            </div>
        </div>
        </form>
        <div class="modal-footer">
          <div class="col d-flex">
            <button type="submit" class="mx-auto w-75 btn btn-outline-primary">¡Ingresa, y
              admira un nuevo mundo!</button>
          </div>
          <div class="col d-flex">
            <button type="button" class="mx-auto w-75 btn btn-outline-success" data-bs-target="#signin"
              data-bs-toggle="modal">Que mal que no tengas cuenta... ¡Pero puedes crearte una!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="signin" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="Sign in">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header d-flex">
          <h1 class="logo w-100">
            <a class="navbar-brand fw-bold modal-title" href="./index.php">W31rd W3bs1t3</a>
            <a class="navbar-brand fw-bold modal-title dotcom" href="./index.php">.com</a>
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-5">
          <form action="" method="post">
            <h2 class="modal-title">Registrarse</h2>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
              <label for="floatingPassword">Nombres</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
              <label for="floatingPassword">Apellidos</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
              <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInputGroup2" placeholder="Username" required>
              <label for="floatingInputGroup2">Correo</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
              <label for="floatingPassword">Número de celular</label>
            </div>
        </div>
        </form>
        <div class="modal-footer">
          <div class="col d-flex">
            <button type="button" class="mx-auto w-75 btn btn-outline-primary" data-bs-target="#login"
              data-bs-toggle="modal">¿Así que ya tenías una cuenta? ¡Ingresa de una vez por todas!</button>
          </div>
          <div class="col d-flex">
            <button type="submit" class="mx-auto w-75 btn btn-outline-success">¡Todo listo para continuar
              Capitán!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="hero">
    <div class="row g-0 h-100">
      <div class="col-lg-6 d-flex">
        <div class="content mx-auto align-self-center my-5">
          <p class="lead px-4">Esta es una página diseñada para la clase de Desarrollo WEB de la CUN <br>
            <br>
            Disfruten del contenido
            <br>
            <br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repellat in esse dolorum dolor. Fuga rem
            ullam veritatis, vero inventore dolore dignissimos iste, sequi optio praesentium vel porro consequuntur
            repellendus!
          </p>
        </div>
      </div>
    </div>

  </section>
  <footer>
    <p class="position-absolute bottom-0 end-0 me-2 fs-6">&copy; 2022 Figuisama (Juan Camilo Figueredo montaña)</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>