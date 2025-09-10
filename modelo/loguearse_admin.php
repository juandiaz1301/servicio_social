<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
session_start();

require "conexion.php";

// Recibir datos del formulario
$usuario = $_POST['email'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';

if (!empty($usuario) && !empty($contraseña)) {
    // Consulta: verificar si el usuario existe
    $query = "SELECT * FROM administrador WHERE correo = '$usuario' AND contraseña = '$contraseña'";
    $consulta = mysqli_query($conexion, $query);

    if ($consulta && mysqli_num_rows($consulta) > 0) {
        $datos = mysqli_fetch_assoc($consulta);

        // Guardamos el usuario en sesión
        $_SESSION['username'] = $datos['correo'];
        $_SESSION['nombre'] = $datos['nombre'] ?? 'Administrador';

        // Redirigir al panel
        header("Location: ../pagina_admin.php");
        exit();
    } else {
        echo "❌ Usuario o contraseña incorrectos.";
    }
} else {
    echo "⚠️ Debes completar todos los campos.";
}
?>
