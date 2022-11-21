<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Styles/StylesGeneral.css">
  <link rel="stylesheet" href="./Styles/StylesGeneralPagesWithContent.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:wght@100;400&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Contactanos</title>
</head>

<body>
  <?php require_once "header.php"; ?>
  <main class="container py-4 my-4">
    <h2 class="text-center">¡Contáctanos!</h2>
    <p class="text-center">Estaremos encantados de leer tus opiniones</p>
    <form action="" method="post" class="pb-3">
      <div class="input-group input-group">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group">
        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group">
        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group">
        <span class="input-group-text" id="inputGroup-sizing-sm">Celular</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <p class="text-center">¡Dinos lo que nos quieras contar! :3</p>
      <div class="form-floating">
        <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Comentarios</label>
      </div>
      <button type="submit" class="sub d-block mx-auto w-75 btn btn-outline-success"">Enviar</button>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>