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
  <section class="requirements">
      <h1>Requisitos para votar:</h1>
      <div class="steps-container">
        <!-- Paso 1 -->
        <div class="step">Requisito 1</div>
        <div class="description">Sólo se admite un <strong>ÚNICO</strong> voto por persona</div>
        <!-- Paso 2 -->
        <div class="step">Requisito 2</div>
        <div class="description">Es necesario tener <strong>CIAL Y PIN</strong></div>
        <!-- Paso 3 -->
        <div class="step">Requisito 3</div>
        <div class="description">Una vez emitido el voto, <strong>NO SE PODRÁ MODIFICAR</strong></div>
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
