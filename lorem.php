<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum</title>
    <link rel="stylesheet" href="./Styles/StyleLorem.css">
    <link rel="stylesheet" href="./Styles/StylesGeneral.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:wght@100;400&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header class="w-100 position-sticky">
        <nav class="navbar navbar-expand-lg bg-transparent w-100">
            <div class="container-fluid">
                <h1 class="logo">
                  <a class="navbar-brand fw-bold" href="./index.php">W31rd W3bs1t3</a>
                  <a class="navbar-brand fw-bold dotcom" href="./index.php">.com</a>
                </h1>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item d-flex">
                    <a class="nav-link align-self-center" aria-current="page" href="./index.php">Inicio</a>
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
        <h2 class="modal-title">Ingresar</h2>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Usuario</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Contraseña</label>
        </div>
      </div>
      <div class="modal-footer">
        <div class="col d-flex">
          <button type="submit" class="mx-auto w-75 btn btn-outline-primary" data-bs-dismiss="modal">¡Ingresa, y
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
    <main>
        <aside><h1>Lorem Ipsum</h1></aside>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quos officia aliquam placeat at corporis incidunt animi velit deserunt. Earum totam consectetur vitae sapiente est repellat aliquam ipsum dolore odio.</p>
        <p>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id urna interdum, finibus nulla in, tempus tortor. Curabitur mollis sagittis nulla vitae vulputate. Sed in justo in tortor dictum aliquet id ac nulla. Proin ipsum tellus, placerat sit amet condimentum id, pretium et tellus. Suspendisse pretium maximus velit in malesuada. Vestibulum cursus vestibulum dolor eget sollicitudin. Aenean condimentum dictum tortor, et hendrerit eros tincidunt id.
            
            Nullam porttitor eget odio at cursus. Suspendisse rutrum, nibh non euismod porttitor, libero nisi facilisis libero, quis vehicula enim erat auctor erat. Ut consectetur sagittis leo, sed maximus nisi suscipit non. Donec sed arcu sit amet odio egestas fermentum sit amet sed sem. Morbi eros orci, faucibus a lorem vel, suscipit posuere ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ac elit a nulla commodo pulvinar. Sed sit amet luctus dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sed libero eget elit porttitor sagittis. Nunc egestas ipsum non quam interdum consequat. Nam et felis et turpis pulvinar viverra non quis tortor. Integer venenatis arcu ut commodo scelerisque. Curabitur hendrerit tempus sapien.
            
            Morbi auctor, orci ut faucibus sagittis, ipsum nibh maximus nibh, quis convallis risus nulla vel lectus. Pellentesque laoreet justo volutpat orci mattis pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla et eros ipsum. Aenean finibus vestibulum efficitur. Cras accumsan massa elementum tincidunt mattis. Etiam id volutpat odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc euismod neque nec diam cursus, et lacinia nisl tristique. Donec rutrum turpis magna, id imperdiet tortor tincidunt in. Suspendisse ut augue ut justo tristique mollis.
            
            Maecenas vitae purus semper, pretium tortor a, mollis mauris. Nulla facilisi. Vivamus risus lectus, rhoncus at enim eu, sollicitudin pulvinar sem. Donec ac tellus viverra, accumsan enim sed, ullamcorper lectus. Aliquam commodo, neque vel consectetur fringilla, leo est sodales nisl, sit amet vestibulum magna purus in dolor. Fusce vehicula ultrices massa, et scelerisque quam scelerisque et. Quisque mattis, lectus non volutpat rhoncus, magna arcu dapibus mauris, et sollicitudin libero libero rhoncus tortor. Nulla mauris urna, consequat at placerat quis, eleifend ac nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus urna sit amet quam consequat pellentesque. Nulla mollis hendrerit bibendum.
            
            Sed rutrum mauris leo, ut ornare magna porttitor at. Donec arcu sapien, consequat ut fringilla nec, cursus ut tellus. Vivamus non erat maximus, bibendum ex sit amet, interdum tellus. Nullam elit enim, lobortis at faucibus vel, viverra sed est. Nam tempor faucibus metus, id vehicula elit rhoncus at. Praesent tincidunt ligula vulputate ante aliquet tempus. Aenean urna sapien, consequat in tincidunt sed, pellentesque in nunc. Nam lorem nisl, dapibus fermentum tristique quis, suscipit in eros. Proin pretium mauris sed luctus eleifend. </p>
    </main>
    <aside>
        <h1>Music video</h1>
        <iframe width="709" height="399" src="https://www.youtube.com/embed/KS76EghdCcY" title="The Lorem Ipsum Song (Song A Day #1649)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>