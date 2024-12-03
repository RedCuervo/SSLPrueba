<?php

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ruta al archivo JSON
    $rutaArchivoJSON = 'Productos.json';

    // Recibir los datos enviados por la solicitud POST
    $data = json_decode(file_get_contents('php://input'), true);

    // Verificar si se recibieron datos válidos
    if ($data && is_array($data)) {
        // Leer el contenido actual del archivo JSON
        $contenidoJSON = file_get_contents($rutaArchivoJSON);
        $productos = json_decode($contenidoJSON, true);

        // Agregar los nuevos datos al array de productos
        $productos[] = $data;

        // Convertir el array actualizado a formato JSON
        $nuevoContenidoJSON = json_encode($productos, JSON_PRETTY_PRINT);

        // Escribir el nuevo contenido en el archivo JSON
        if (file_put_contents($rutaArchivoJSON, $nuevoContenidoJSON)) {
            // Éxito
            echo json_encode(['success' => true]);
        } else {
            // Error al escribir en el archivo JSON
            echo json_encode(['success' => false, 'message' => 'Error al escribir en el archivo JSON']);
        }
    } else {
        // Datos no válidos
        echo json_encode(['success' => false, 'message' => 'Datos no válidos']);
    }
} else {
    // Método de solicitud no permitido
    echo json_encode(['success' => false, 'message' => 'Método de solicitud no permitido']);
}
?>
