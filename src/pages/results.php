<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Resultados</title>
  <link rel="stylesheet" href="../styles/base/normalize.css">
  <link rel="stylesheet" href="../styles/base/base.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/results.css">
</head>

<body>

  <section class="alert">
    <?php
    require_once "../components/component_alert.php";
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
    <section class="container">
      <h1>Resultados del concurso</h1>
      <section id="entrega-premios">
        <h2>¡Felicidades a los Ganadores!</h2>
        <p>Hoy, 29 de mayo, se realizará la entrega de premios del Concurso del día de Canarias.</p>
        <p>Gracias a todos por participar y felicidades a los ganadores.</p>
        <h3>TOP 3 Carteles</h3>
      </section>

      <div class="resultados">
        <?php
        // Asegúrate de incluir correctamente el archivo que contiene la función getResults()
        require_once "../db/cx_results.php"; // Ruta al archivo que contiene la función getResults()

        // Llamada a la función getResults() para obtener los resultados
        $resultados = getResults();

        // Verificar si la consulta devuelve datos
        if ($resultados && count($resultados) > 0) {
          // Recorrer los resultados y mostrarlos
          $top = 1;
          foreach ($resultados as $resultado) {
            echo "<div class='top'>";
            echo "<h4>TOP " . $top++ . "</h4>";

            // Si la columna 'imagen' contiene datos binarios, entonces se debe convertir en una imagen
            $imagen = $resultado['imagen'];

            // Verifica si la imagen está almacenada como binario (BLOB)
            if ($imagen) {
              // Muestra la imagen directamente como un flujo de datos
              echo "<img src='data:image/jpeg;base64," . base64_encode($imagen) . "' alt='Imagen del Cartel' class='cartel-imagen'>";
            } else {
              echo "<p>No se encontró imagen.</p>";
            }

            echo "<p><strong>Nombre:</strong> " . htmlspecialchars($resultado['nombre']) . "</p>";
            echo "<p><strong>Curso:</strong> " . htmlspecialchars($resultado['curso']) . "</p>";
            echo "<p><strong>Título:</strong> " . htmlspecialchars($resultado['titulo']) . "</p>";
            echo "</div>";
          }
          echo "<div class='podio-base gold'></div>";
          echo "<div class='podio-base silver'></div>";
          echo "<div class='podio-base bronze'></div>";
        } else {
          echo "<p>No hay resultados disponibles.</p>";
        }
        ?>
      </div>
    </section>
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