
<!--Comentario de Kevin en su parte del proyecto-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Galería</title>
  <link rel="stylesheet" href="../styles/base/normalize.css">
  <link rel="stylesheet" href="../styles/base/base.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/participate.css">
  <link rel="stylesheet" href="../styles/gallery.css">
</head>

<body>

  <section class="alert">
    <?php
      require "../components/component_alert.php";
    ?>
  </section>

  <div>

    <header class="header_container">
      <a href="../../index.php" class="logo_sagaseta_container"><img src="../img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
      <h1 class="header_title">Concurso día de Canarias</h1>
    </header>

    <div class="nav">
      <a href="participate.php">Participar</a>
      <a href="results.php">Resultados</a>
      <a href="gallery.php">Galería de carteles</a>
    </div>
  </div>

  <main>
  <ul class="carteles">
      <?php
// AQUÍ SE INYECTARÁN LOS CARTELES DESDE LA BD
        require_once "../db/cx_gallery.php";
        $resultados=getGallery();
        if ($resultados && count($resultados) > 0) {
          foreach ($resultados as $resultado) {
            echo "<li class='cartel'>";
            //SIGUEN SIN PODER VERSE LAS IMAGENES
            echo "<img class='img' src='".base64_encode(htmlspecialchars($resultado['imagen'])) . "' alt='Imagen del Cartel'>";
            echo "<p>Título: " . htmlspecialchars($resultado['titulo']) . "</p>";
            echo "<a class='boton' href='vote.php?id=".htmlspecialchars($resultado['id'])."'>Votar</a>";
            echo "</li>";
        }
        }else{
            echo "<p>No hay resultados disponibles.</p>";
        }
      ?>
    </ul>
  </main>

  <footer class="footer_container">
    <div class="nav">
      <a href="participate.php">Participar</a>
      <a href="results.php">Resultados</a>
      <a href="gallery.php">Galería de carteles</a>
    </div>
    <p>2ºDAW IES Fernando Sagaseta</p>
  </footer>

</body>

</html>
