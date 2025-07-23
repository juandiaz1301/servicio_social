<?php
    require "conexion.php";

    // iniciar sesion para guardar los datos del usuario
    session_start();

    $usuario = $_POST['correo'];
    $contraseña = $_POST['pasword'];

    $query_1 = "SELECT correo, COUNT(*) AS contar FROM administrador WHERE correo = '$usuario' AND contraseña = '$password'";

    $consulta = mysqli_query(mysql: $conexion, query: $query_1) or trigger_error(message: "Error en la consulta MYSQL: " + mysqli_error($conexion));

    $resultado = mysqli_fetch_array(result: $consulta);

    if($resultado['contar'] > 0)
    {
        $_SESSION['username'] = $usuario;
        //redirigir el usuario a su pagina
        header( "location: ../pagina_admin.php");

        /*echo "El usuario existe en la BD <br>";
        echo $resultado ['email'];*/
    }
    else
    {
        echo "El usuario no existe, o hay un error en el nombre de usuario o la contraseña";
    }
?>