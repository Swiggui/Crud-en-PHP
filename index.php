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
  <?php require_once "header.php"; ?>
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