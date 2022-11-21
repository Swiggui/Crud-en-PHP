<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/StylesGeneral.css">
    <link rel="stylesheet" href="./Styles/StylesGeneralPagesWithContent.css">
    <link rel="stylesheet" href="./Styles/StyleContenidos.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:wght@100;400&display=swap" rel="stylesheet"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Contenidos</title>
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
                    <a class="nav-link" href="./lorem.php">Lorem Ipsum</a>
                  </li>
                  <li class="nav-item align-self-center">
                    <a class="nav-link" href="./contactanos.php">Contáctanos</a>
                  </li>
                  <li class="nav-item align-self-center">
                    <a class="nav-link" href="./aboutUs.php">Sobre Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn btn-primary w-100">
                      <img src="/Media/Icons/setting.png" width="30" alt=""> Ajustes de usuarios</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="container p-5 mb-3 ">
      <h2 class="fs-1">Aquí iría un saludo con el nombre</h2>
      <h2 class="fs-3">¡Disfruta de nuestros contenidos!</h2>
      <a href="./music.php" class="container d-flex text-decoration-none">
        <div class="col-4">
          <img src="https://images.alphacoders.com/709/70991.jpg"  alt="">
        </div>
        <div class="col-6">
          <h2 class="fs-4">Musica</h3>
          <p>Aquí podrás descubrir a algunos artistas y sus canciones</p>
        </div>
      </a>
      <a href="./series.php" class="container d-flex text-decoration-none">
        <div class="col-4">
          <img src="https://images7.alphacoders.com/676/676020.jpg"  alt="">
        </div>
        <div class="col-6">
          <h2 class="fs-4 ">Series</h2>
          <p class="">Aquí podrás descubrir algunas series interesantes</p>
        </div>
      </a>
    </main>
</body>
</html>