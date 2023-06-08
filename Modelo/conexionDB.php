<?php  
	function abrirConexion() {
		// Datos de conexión
		$host = "localhost";
		$user = "root";
		$password = "";
        $baseDatos ="bicilona";
		// Establecemos la conexión con la base de datos
		$conexion = mysqli_connect($host, $user, $password, $baseDatos);
		// Si hay un error en la conexión, lo mostramos y detenemos.
		if (!$conexion) {
			die("<br>Error de conexión con la base de datos: " . mysqli_connect_error());
		}
		// Si está todo correcto, enviamos la conexión con la base de datos.
		else {
			// echo "<br>Conexion correcta a la base de datos: " . $database;
		}
		return $conexion;
	}
	function cerrarConexion($conexion) {
		mysqli_close($conexion);
	}
?>