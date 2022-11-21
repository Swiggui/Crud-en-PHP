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
        <form name="loging" action="auth.php" method="post">
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
      <div class="modal-footer">
          <div class="col d-flex">
            <input type="submit" class="mx-auto w-75 btn btn-outline-primary">¡Ingresa, y
              admira un nuevo mundo!</input>
          </div>
          <div class="col d-flex">
            <button type="button" class="mx-auto w-75 btn btn-outline-success" data-bs-target="#signin"
              data-bs-toggle="modal">Que mal que no tengas cuenta... ¡Pero puedes crearte una!</button>
          </div>
        </div>
      </form>        
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