<?php
	require "../Modelo/productosMod.php";
  // se imprimirá la tabla en la vista de la tienda-mercadillo
  function muestraProducto(){	
    //obtengo datos de la consulta sobre PRODUCTO
    $datos = getProducto();
    echo "<div class='tabla'>
            <table align='center'>\n 
              <tr>\n
                <th align='center'>Nombre</th>\n
                <th align='center'>Precio</th>\n
                <th align='center'>Descripción</th>\n
              </tr>\n";
          // al recorrer el array de datos de la consulta sobre PRODUCTO, extraemos los datos de cada fila 
          foreach ($datos as $fila) {
            echo "<tr>\n
                    <td align='center'>" . $fila["nombre"] . "</td>\n
                    <td align='center'>" . $fila["precio"] . "</td>\n
                    <td align='center'>" . $fila["descripcion"] . "
                      <form action='tienda.php' method='POST'>";
                        // Verifico si el id del vendedor coincide con el id del usuario de sesión
                        if ($fila["id_vendedor"] == $_SESSION['id_usr']) {
                          echo "<input type='hidden' name='id_prod' value='" . $fila["id_prod"] . "'>
                                <input type='submit' name='borrar' value='Borrar'>";
                        }
            echo   "</form>
                    </td>\n
                  </tr>";
          };
    echo     "</table>
          </div>";
  };
  ?>