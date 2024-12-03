<?php

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ruta al archivo JSON
    $rutaArchivoJSON = 'Productos.json';

    // Recibir los datos enviados por la solicitud POST
    $data = json_decode(file_get_contents('php://input'), true);

    // Verificar si se recibieron datos válidos
    if ($data && is_array($data) && isset($data['id'])) {
        $id = $data['id'];

        // Leer el contenido actual del archivo JSON
        $contenidoJSON = file_get_contents($rutaArchivoJSON);
        $productos = json_decode($contenidoJSON, true);

        // Verificar si se pudo decodificar el JSON correctamente
        if ($productos !== null) {
            // Buscar el elemento con el ID especificado y actualizarlo en el array de productos
            foreach ($productos as &$producto) {
                if ($producto['id'] == $id) {
                    // Actualizar los datos del producto
                    $producto['nombre'] = $data['nombre'];
                    $producto['descripcion'] = $data['descripcion'];
                    $producto['cantidad'] = $data['cantidad'];
                    $producto['precio'] = $data['precio'];
                    
                    // Convertir el array actualizado a formato JSON
                    $nuevoContenidoJSON = json_encode($productos, JSON_PRETTY_PRINT);

                    // Escribir el nuevo contenido en el archivo JSON
                    if (file_put_contents($rutaArchivoJSON, $nuevoContenidoJSON) !== false) {
                        // Éxito
                        echo json_encode(['success' => true]);
                        exit; // Terminar el script aquí
                    } else {
                        // Error al escribir en el archivo JSON
                        echo json_encode(['success' => false, 'message' => 'Error al escribir en el archivo JSON']);
                        exit; // Terminar el script aquí
                    }
                }
            }
            // Si el ID no se encontró en los productos
            echo json_encode(['success' => false, 'message' => 'ID de producto no encontrado']);
            exit; // Terminar el script aquí
        } else {
            // Error al decodificar el JSON
            echo json_encode(['success' => false, 'message' => 'Error al decodificar el contenido JSON']);
            exit; // Terminar el script aquí
        }
    } else {
        // Datos no válidos
        echo json_encode(['success' => false, 'message' => 'Datos no válidos o no se recibió el ID del producto']);
    }
} else {
    // Método de solicitud no permitido
    echo json_encode(['success' => false, 'message' => 'Método de solicitud no permitido']);
}
?>
