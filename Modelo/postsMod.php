<?php
	require_once "conexionDB.php";
	// OBTENER DATOS DE LA TABLA POST
	function getPost() {
        // Nos conectamos a la base de datos 
		$conexion = abrirConexion();
		// preparamos la consulta para obtener todos los datos de la tabla POST, los últimos primero
		$sql= "SELECT * FROM POST ORDER BY id_post DESC";
		//ejecutamos la consulta
        $resultados = mysqli_query($conexion, $sql);
		// Cerramos la conexion
		cerrarConexion($conexion);
        return $resultados;
		
	}

	//INSERTAR DATOS EN LA TABLA POST
	function insertaPost($tema, $contenido) {
		$conexion = abrirConexion();
		// Obtenemos el id_autor, que es el id_usr de la sesión del usuario
		$id_autor = $_SESSION['id_usr']; 
		$sql = "INSERT INTO POST (id_autor, tema, contenido) VALUES ('$id_autor', '$tema', '$contenido')";  
		$resultados = mysqli_query($conexion, $sql);
		cerrarConexion($conexion);
		return $resultados;
	}

	//BORRAR DATOS DE LA TABLA POST
	function borraPost($id_post) {
		$conexion = abrirConexion();
		$id_autor = $_SESSION['id_usr'];
		// preparamos la consulta para borrar datos en la tabla Post, del id_autor con el id_post
		$sql = "DELETE FROM POST WHERE id_post='" . $id_post . "' AND id_autor='$id_autor'"; //id_autor='" . $_SESSION['id_usr'] . "'
		$result = mysqli_query($conexion, $sql);
		if ($result) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "Error borrando post";
		}
		cerrarConexion($conexion);
	}
?>