<?php
   require "../Modelo/datosUsuarioMod.php";
   // se imprimirán los datos del usuario logueado
   function muestraUsuario(){	
      //obtengo datos de la consulta sobre USUARIO logueado
      $datos = getUsuario();
     // al recorrer el array de datos de la consulta sobre USUARIO, extraemos los datos de cada fila 
     foreach ($datos as $fila) {
        echo "<div class='registrologin'>
               <form action='modificardatos.php' method='get'>
		            <input type='text' name='nombre' value='" . $fila["nombre"] . "' id='nombre' required>
		            <input type='text' name='apellidos' value='" . $fila["apellidos"] . "' id='apellidos' required>
		            <input type='text' name='email' value='" . $fila["email"] . "' id='email' required>
		            <input type='password' name='password' placeholder='Contraseña' id='password' required>
                  <div class='envia'>
		              <input type='submit' value='Modifica tus datos' name='modificar'>
                  </div>
		         </form>
              </div>";
        };
};

?>

                    