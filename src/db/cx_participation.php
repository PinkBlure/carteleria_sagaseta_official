<?php
require_once 'base/cx_database.php';

$pin = $_POST['pin'];  
$cial = $_POST['cial'];  
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen']['tmp_name'];

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar usuario
$sqlValidar = "SELECT COUNT(*) AS usuario_valido FROM usuario WHERE cial = ? AND pin = ?";
$stmt = $conn->prepare($sqlValidar);
$stmt->bind_param('ss', $cial, $pin);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

if ($result['usuario_valido'] > 0) {
    // Subir imagen como blob
    $imagenBlob = file_get_contents($imagen);

    // Insertar cartel
    $sqlInsertar = "INSERT INTO cartel (titulo, imagen, fecha, descripcion) VALUES (?, ?, CURDATE(), ?)";
    $stmt = $conn->prepare($sqlInsertar);
    $stmt->bind_param('sss', $titulo, $imagenBlob, $descripcion);

    if ($stmt->execute()) {
        echo "¡Cartel añadido exitosamente!";
    } else {
        echo "Error al insertar el cartel: " . $conn->error;
    }
} else {
    echo "CIAL o PIN incorrectos.";
}

$stmt->close();
$conn->close();
?>

