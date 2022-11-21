<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Styles/StylesGeneral.css">
  <link rel="stylesheet" href="./Styles/StylesGeneralPagesWithContent.css">
  <link rel="stylesheet" href="./Styles/StyleContenidos.css">
  <link rel="stylesheet" href="./Styles/StylesMusic.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:wght@100;400&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Música</title>
</head>

<body>
  <video autoplay loop> 
  <source src="./Media/Videos/band.webm" type="video/webm">  
  </video>
  <header class="w-100 position-sticky">
    <nav class="navbar navbar-expand-lg bg-transparent w-100">
      <div class="container-fluid">
        <h1 class="logo">
          <a class="navbar-brand fw-bold" href="./index.php">W31rd W3bs1t3</a>
          <a class="navbar-brand fw-bold dotcom" href="/index.php">.com</a>
        </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class=" p-2  position-relative">
    <h2 class="text-center">Artistas</h2>
    <div class="container mx-auto">
      <div class="d-block mx-auto artista clearfix">
        <img class="col-md-3 float-md-start mt-2 me-md-3"
          src="https://dailyillini.com/wp-content/uploads/2022/07/editLastDinos021-900x605.jpg" alt="">
        <div class="d-block music-element">
          <h2 class="fs-3 text-start">Last Dinosaurs</h2>
          <p class="descripcion fs-6">Last Dinosaurs es una banda de indie rock australiana de Brisbane. La banda está
            compuesta por el vocalista principal y guitarrista Sean Caskey, el guitarrista Lachlan Caskey, bajista
            Michael Sloane, y el baterista Dan Koyama. Koyama y los hermanos Caskey son todos de ascendencia japonesa, y
            la banda han recorrido y han hecho varios viajes a Japón. </p>
          <button type="button" data-bs-toggle="modal" data-bs-target="#losDinos" class="btn btn-outline-success d-inline-block"><img
              class="float-md-start" src="./Media/Icons/spotify-24.png" alt=""></button>
          <a class="d-inline-flex ms-2 btn btn-outline-danger" href="https://www.youtube.com/c/LastDinosaurs"><img src="./Media/Icons/icons8-youtube-play-64.png" alt=""></a>
          <a class="d-inline-flex ms-2 btn btn-outline-warning" href="https://on.soundcloud.com/Qcd9S"><img src="./Media/Icons/icons8-soundcloud-50.png" alt=""></a>
          <a class="d-inline-flex ms-2 btn btn-outline-primary" href="https://www.facebook.com/lastdinosaurs"><img src="./Media/Icons/icons8-facebook-nuevo-64.png" alt=""></a>
        </div>
        <div id="losDinos" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="Login">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content spoty">
              <div class="modal-header d-flex">
                <h1 class="d-block modal-title text-center w-100 fs-1">Last Dinosaurs</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body px-5 spoty-content">
                <iframe style="border-radius:10px" src="https://open.spotify.com/embed/artist/677sHrkjhB7IP4YwjzZyc4?utm_source=generator" width="100%" height="352.75" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
              </div>
              <div class="modal-footer">
                <a href="https://open.spotify.com/artist/677sHrkjhB7IP4YwjzZyc4?si=v2bGz60cSAyOxea4PmSNtw" class="btn btn-outline-success mx-auto">Abrir en Spotify</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block mx-auto artista clearfix">
  <img class="col-md-3 float-md-start mt-2 me-md-3"
    src="data:image/jpeg;base64,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" alt="">
  <div class="d-block music-element">
    <h2 class="fs-3 text-start">Brooks</h2>
    <p class="descripcion fs-6">
    Thijs Westbroek (Eindhoven, 14 de abril de 1995) conocido como Brooks es un DJ y productor neerlandés orientado al future house y al progressive house. 
    </p>
    <button type="button" data-bs-toggle="modal" data-bs-target="#brooks" class="btn btn-outline-success d-inline-block"><img
        class="float-md-start" src="./Media/Icons/spotify-24.png" alt=""></button>
    <a class="d-inline-flex ms-2 btn btn-outline-danger" href="https://www.youtube.com/c/MusicByBrooks"><img src="./Media/Icons/icons8-youtube-play-64.png" alt=""></a>
    <a class="d-inline-flex ms-2 btn btn-outline-warning" href="https://soundcloud.com/musicbybrooks"><img src="./Media/Icons/icons8-soundcloud-50.png" alt=""></a>
    <a class="d-inline-flex ms-2 btn btn-outline-primary" href="https://www.facebook.com/MusicByBrooks"><img src="./Media/Icons/icons8-facebook-nuevo-64.png" alt=""></a>
  </div>
  <div id="brooks" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="Login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content spoty">
        <div class="modal-header d-flex">
          <h1 class="d-block modal-title text-center w-100 fs-1">Last Dinosaurs</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-5 spoty-content">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/4mHAu7NX2UNsnGXjviBD9e?utm_source=generator" width="100%" height="352.75" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
        <div class="modal-footer">
          <a href="https://open.spotify.com/artist/677sHrkjhB7IP4YwjzZyc4?si=v2bGz60cSAyOxea4PmSNtw" class="btn btn-outline-success mx-auto">Abrir en Spotify</a>
        </div>
      </div>
    </div>
  </div>
  
</div>
    </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>