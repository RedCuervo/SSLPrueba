<?php

// Verifica si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    
    // Lee el contenido actual del archivo users.json
    $usuariosJSON = file_get_contents("users.json");
    $usuarios = json_decode($usuariosJSON, true);

    // Genera un nuevo ID para el usuario
    $nuevoId = count($usuarios) + 1;

    // Crea un nuevo usuario
    $nuevoUsuario = array(
        "id" => $nuevoId,
        "nombre" => $nombre,
        "correo" => $correo,
        "contraseña" => $contraseña
    );

    // Agrega el nuevo usuario al arreglo de usuarios
    $usuarios[] = $nuevoUsuario;

    // Escribe los usuarios actualizados de vuelta al archivo users.json
    file_put_contents("users.json", json_encode($usuarios, JSON_PRETTY_PRINT));

    // Muestra una alerta de registro exitoso
    echo "<script>alert('¡Registro exitoso! Gracias por registrarte en nuestro sitio.');</script>";

    // Redirecciona a la página principal
    echo "<script>window.location.href = 'index.php';</script>";
    exit();
} else {
    // Si no se envió un formulario, muestra un mensaje de error
    echo "Error: No se ha enviado un formulario.";
}

?>
