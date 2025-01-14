<?php
define('BASE_URL', '/Proyectos/carteleria_sagaseta_official');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Resultados</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/base.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/header.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/footer.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/results.css">
</head>

<body>

  <div>
    <section>
      Espacio para el alert
    </section>

    <header class="header_container">
      <a href="<?php echo BASE_URL; ?>/index.php" class="logo_sagaseta_container"><img src="<?php echo BASE_URL; ?>/src/img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
      <h1 class="header_title">Concurso día de Canarias</h1>
    </header>

    <div class="nav">
      <a href="<?php echo BASE_URL; ?>/src/pages/participate.php">Participar</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/results.php">Resultados</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/gallery.php">Galería de carteles</a>
    </div>
  </div>

  <main>
    <section class="container">
      <h1>Resultados del concurso</h1>
      <section id="entrega-premios">
        <h2>¡Felicidades a los Ganadores!</h2>
        <p>Hoy, 29 de mayo, se realizará la entrega de premios del Concurso de Carnaval.</p>
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
            $podioClass = '';
            if ($top == 1) $podioClass = 'gold';
            elseif ($top == 2) $podioClass = 'silver';
            elseif ($top == 3) $podioClass = 'bronze';

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
            echo "<div class='podio-base " . $podioClass . "'></div>";
          }
        } else {
          echo "<p>No hay resultados disponibles.</p>";
        }
        ?>
      </div>
    </section>
  </main>

  <footer class="footer_container">
    <div class="nav">
      <a href="<?php echo BASE_URL; ?>/src/pages/participate.php">Participar</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/results.php">Resultados</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/gallery.php">Galería de carteles</a>
    </div>
    <p>2ºDAW IES Fernando Sagaseta</p>
  </footer>

</body>

</html>
