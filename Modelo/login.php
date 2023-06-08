<?php
    session_start();
    require_once('conexionDB.php');
    $conexion = abrirConexion();
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

         // Validar si el email es válido con expresión regular
         $emailExpReg = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
        if (!preg_match($emailExpReg, $email)) {
        cerrarConexion($conexion);
        header("Location: ../Vista/formulariologin.php?error=email_invalido");
        exit;
        }


        // Verificar si el email y la contraseña coinciden en la DB
        $busqueda = mysqli_prepare($conexion, "SELECT id_usr, nombre, apellidos, email, password FROM USUARIO WHERE email = ?");
        //Se enlaza el valor del parámetro $email a la consulta 
        mysqli_stmt_bind_param($busqueda, "s", $email);
        mysqli_stmt_execute($busqueda);
        mysqli_stmt_store_result($busqueda);

        if (mysqli_stmt_num_rows($busqueda) > 0) {
            // Se almacenan los resultados de la consulta en las variables
            mysqli_stmt_bind_result($busqueda, $id_usr, $nombre, $apellidos, $emailDB, $passwordDB);
            mysqli_stmt_fetch($busqueda);

            // Verificar si la contraseña introducida coincide con la almacenada en la DB
            if ($password == $passwordDB) {
                cerrarConexion($conexion);
                $_SESSION['nombre'] = $nombre; // Almaceno en una sesión el nombre del usuario
                $_SESSION['id_usr'] = $id_usr; // Almaceno en una sesión el id de usuario para utilizarlo más adelante
                header("Location: ../Vista/zonausuario.php");
                exit;
            }else {
                cerrarConexion($conexion);
                // Muestro mensajes si no ha tenido éxito
                header("Location: ../Vista/formulariologin.php?error=contrasena_incorrecta");
                exit;
            }
        }
    }
?>
