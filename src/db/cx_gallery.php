
<?php
    // Importacion de conexión a la base de datos
    require_once "base/cx_database.php";

    
    // Función para obtener los carteles ganadores
    function getGallery(){
        // Crear conexión
        $conn = createConnection();
        
        try {
            // Query para obtener los datos
            $stmt = $conn->prepare("
                SELECT id, titulo, imagen
                FROM cartel;
            ");
            $stmt->execute();
        
            return $stmt->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            echo "Error al realizar la consulta: " . $e->getMessage();
        }
    }

?>