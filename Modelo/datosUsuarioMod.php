<?php
	require_once "conexionDB.php";
	
	// OBTENER DATOS DE LA TABLA USUARIO del usuario logueado
	function getUsuario() {
        // Nos conectamos a la base de datos 
		$conexion = abrirConexion();
		$id_usuario = $_SESSION['id_usr'];
		// preparamos la consulta para obtener todos los datos de la tabla usuario del usuario logueado
		$sql = "SELECT * FROM USUARIO WHERE id_usr='$id_usuario'"; //id_usr='" . $_SESSION['id_usr'] . "'
		//ejecutamos la consulta
        $resultados = mysqli_query($conexion, $sql);
		// Cerramos la conexion
		cerrarConexion($conexion);
		return $resultados;
		

	}
	// MODIFICAR DATOS DE LA TABLA USUARIO del usuario logueado
	function modificaDatos($nombre, $apellidos, $email, $password){
		$conexion = abrirConexion();
		$id_usuario = $_SESSION['id_usr'];
		// preparamos la consulta para modificar datos del usuario logueado en la tabla USUARIO
		$sql = "UPDATE USUARIO SET nombre='$nombre',apellidos='$apellidos',email='$email',password='$password' WHERE id_usr='$id_usuario'"; //id_usr='" . $_SESSION['id_usr'] . "'
		$resultados = mysqli_query($conexion, $sql);
		cerrarConexion($conexion);
		return $resultados;
	}  
?>
  