<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Participación</title>
  <link rel="stylesheet" href="../styles/base/normalize.css">
  <link rel="stylesheet" href="../styles/base/base.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/participate.css">
</head>
<!--  -->
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


  <main class="formulario-centro">
    <div class="caja_participacion">
        <form action="cx_participation.php" method="POST" enctype="multipart/form-data">
            <h2>Formulario de Participación</h2>
            <label for="cial">CIAL del Usuario:</label>
            <input type="text" name="cial" id="cial" maxlength="20" required>

            <label for="pin">PIN del Usuario:</label>
            <input type="password" name="pin" id="pin" maxlength="4" required>

            <label for="titulo">Nombre del Cartel:</label>
            <input type="text" name="titulo" id="titulo" maxlength="100" required>

            <label for="descripcion">Descripción del cartel:</label>
            <input type="text" name="descripcion" id="descripcion" maxlength="100" required>

            <label for="imagen">Selecciona la Imagen del Cartel:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
            
            <button class="button" type="submit">Subir Cartel</button>
        </form>
    </div>
    <div class="reglas"><h1>hola</h1></div>
    
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