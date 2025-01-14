<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Vote</title>
  <link rel="stylesheet" href="../styles/base/normalize.css">
  <link rel="stylesheet" href="../styles/base/base.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/results.css">
  <link rel="stylesheet" href="../styles/vote.css">
</head>

<body>
  <section class="alert">
    <?php
      require "../components/component_alert.php";
    ?>
  </section>

  <div>

    <header class="header_container">
      <a href="../../index.php" class="logo_sagaseta_container"><img src="src/img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
      <h1 class="header_title">Concurso día de Canarias</h1>
    </header>

    <div class="nav">
      <a href="participate.php">Participar</a>
      <a href="results.php">Resultados</a>
      <a href="gallery.php">Galería de carteles</a>
    </div>
  </div>

  <main>
  <section class="requirements">
      <h1>Requisitos para votar:</h1>
      <div class="steps-container">
        <!-- Paso 1 -->
        <div class="step">Requisito 1</div>
        <div class="description">Debes ser alumno del centro</div>
        <!-- Paso 2 -->
        <div class="step">Requisito 2</div>
        <div class="description">Cada alumno SÓLO puede votar un único cartel</div>
        <!-- Paso 3 -->
        <div class="step">Requisito 3</div>
        <div class="description">Se permite cualquier técnica, siempre que el diseño final esté en formato digital.</div>
        <!-- Paso 4 -->
        <div class="step">Requisito 4</div>
        <div class="description">El cartel debe presentarse en formato vertical y en tamaño DIN A3 (3508 x 4961 píxeles). Subido en formato PDF.</div>
        <!-- Paso 5 -->
        <div class="step">Requisito 5</div>
        <div class="description">Cualquier diseño que incluya contenido inapropiado o contrario a los valores de respeto y convivencia será descalificado.</div>
        <!-- Paso 6 -->
        <div class="step">Requisito 6</div>
        <div class="description">Al participar, los autores ceden los derechos de uso y reproducción de sus diseños al centro educativo para posibles exposiciones y publicaciones.</div>
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
