<?php
session_start();

// Verifica si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contraseña = $_POST["password"];
    
    $usuariosJSON = file_get_contents("users.json");
    $usuarios = json_decode($usuariosJSON, true);

    foreach ($usuarios as $usuarioRegistrado) {
        if ($usuarioRegistrado["correo"] == $correo && $usuarioRegistrado["contraseña"] == $contraseña) {
            $_SESSION["nombre_usuario"] = $usuarioRegistrado["nombre"];
            $_SESSION["mensaje"] = "Inicio de sesión exitoso.";
            header("Location: index.php"); 
            
            exit();
        }
    }

    $_SESSION["mensaje"] = "Usuario o contraseña incorrectos.";
    header("Location: login.php");
    exit();
} else {
    $_SESSION["mensaje"] = "Error: No se ha enviado un formulario.";
    header("Location: login.php"); 
    exit();
}
?>