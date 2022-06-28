<?php

require_once __DIR__ . '/bootstrap/autoload.php';


$rutas = [
  'home' => [
    'title' => 'Peliculas gratis',
  ],
  'movie-detail' => [
    'title' => 'Detalles de las peliculas',
  ],
  '404' => [
    'title' => 'Pagina no encontrada',
  ],
];

$page = $_GET['s'] ?? 'home';

if (!isset($rutas[$page])) {
  $page = '404';
}

$rutaConfig = $rutas[$page];
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $rutaConfig['title'] ?></title>
  <link rel="stylesheet" href="./styles/styles.css?version=3" />
  <link rel="stylesheet" href="/styles/bootstrap/bootstrap.min.css.map" />
  <link rel="stylesheet" href="/styles/bootstrap/bootstrap.min.css" />
  <link rel="manifest" href="./manifest.webmanifest" />
</head>

<body>
  <div class="online-app-status"></div>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a href="#" class="navbar-left hidden-md hidden-lg hidden-sm"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Peliculas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactanos">Series</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <?php
        $filename = __DIR__ . '/pages/' . $page . '.php';
        if(file_exists($filename)) {
            require $filename;
        }  else {
            require __DIR__ . '/pages/404.php';
        }
    ?> 
  </main>
  <script src="./js/main.js?version=3"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>

