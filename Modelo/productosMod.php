<?php
	require_once "conexionDB.php";
	//OBTENER DATOS DE LA TABLA PRODUCTO
	function getProducto() {
        // Nos conectamos a la base de datos 
		$conexion = abrirConexion();
		// preparamos la consulta para obtener todos los datos de la tabla PRODUCTO, los últimos primero
		$sql = "SELECT * FROM PRODUCTO ORDER BY id_prod DESC";
		//ejecutamos la consulta
        $resultados = mysqli_query($conexion, $sql);
        // Cerramos la conexion
		cerrarConexion($conexion);
		return $resultados;
	}
	
	//INSERTAR DATOS EN LA TABLA PRODUCTO
	function insertaProducto($nombre, $precio, $descripcion){
		$conexion = abrirConexion();
		// Obtenemos el id_vendedor, que es el id_usr de la sesión del usuario
		$id_vendedor = $_SESSION['id_usr']; 
		// preparamos la consulta para insertar los datos en la tabla PRODUCTO
		$sql = "INSERT INTO PRODUCTO (id_vendedor, nombre, precio, descripcion) VALUES ('$id_vendedor','$nombre', '$precio', '$descripcion')"; // Usar marcadores de posición (?)
		$resultados = mysqli_query($conexion, $sql);
		cerrarConexion($conexion);
		return $resultados;
	}

	//BORRAR DATOS DE LA TABLA PRODUCTO
	function borraProducto($id_prod) { 
		$conexion = abrirConexion(); 
		$id_vendedor = $_SESSION['id_usr'];
		// preparamos la consulta para borrar datos en la tabla PRODUCTO, del id_vendedor con el id_prod
		$sql = "DELETE FROM PRODUCTO WHERE id_prod='" . $id_prod . "' AND id_vendedor='$id_vendedor'";  //id_vendedor='" . $_SESSION['id_usr'] . "'"; 
		$resultado = mysqli_query($conexion, $sql);
		if ($resultado) {
			return $resultado;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "Error borrando producto.";
		}
		cerrarConexion($conexion);
	}
?>
  