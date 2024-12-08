<?php
define('BASE_URL', '/Proyectos/carteleria_sagaseta_official');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Home</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/base.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/header.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/footer.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/index.css">
</head>

<body>

  <div>
    <section>
      <!-- Espacio para el alert  -->
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
    <section class="section_date">
        <div class="fecha">
            <?php
            // Llamar a la función getDates() que fue incluida en el archivo cx_database.php
            require_once "src/db/cx_date.php";

            $result = getDates();  // Llamada a la función getDates

            // Verificar si tenemos resultados
            if ($result && count($result) > 0) {
                foreach ($result as $fecha) {
                    // Mostrar cada evento con su fecha y descripción al lado
                    echo "<div class='date-item'>";
                    echo "<span class='descripcion'>" . htmlspecialchars($fecha['descripcion']) . "</span> : ";
                    echo "<span class='fechas'>" . htmlspecialchars($fecha['fecha']) . "</span>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay fechas disponibles.</p>";
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
