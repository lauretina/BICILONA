
<?php
	require_once "conexionDB.php";
    $conexion = abrirConexion();

    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // escapar de los caracteres especiales
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $password = mysqli_real_escape_string($conexion, $_POST['password']);

        // Validar si el email es válido con expresión regular
        $emailExpReg = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
        if (!preg_match($emailExpReg, $email)) {
            cerrarConexion($conexion);
            // mensaje de error
            header("Location:../Vista/formularioregistro.php?error=email_invalido");
            exit; // Terminar la ejecución del script
        }

        // hago una consulta para ver si el email introducido ya está en la DB
        $sql = "SELECT * FROM USUARIO WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $sql);
        $existente = mysqli_num_rows($resultado);

        // si ya existe, muestro error
        if($existente > 0){
            cerrarConexion($conexion);
            header("Location:../Vista/formularioregistro.php?error=email_previo");
            exit; // Terminar la ejecución del script 
        }

        $sql = "INSERT INTO USUARIO (nombre,apellidos,email,password) VALUES ('$nombre', '$apellidos', '$email', '$password')";
        $resultado = mysqli_query($conexion, $sql);

        if($resultado){
            // Muestro mensajes según si ha tenido éxito o no
            cerrarConexion($conexion);
            header("Location:../Vista/formulariologin.php?login=registro_exitoso");
            exit; 
        } else {
            cerrarConexion($conexion);
            header("Location:../Vista/formularioregistro.php?error=registro_fallido");
            exit; 
        }
    }else {
        cerrarConexion($conexion);
        header("Location:../Vista/formularioregistro.php?error=campos_vacios");
        exit; 
    }
?>

