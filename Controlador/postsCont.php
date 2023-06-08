<?php
	require "../Modelo/postsMod.php";
  // se imprimirá la tabla en la vista del foro de opinión
  function muestraPost(){	
    $datos = getPost();
    //obtengo datos de la consulta sobre POST
    echo "<div class='tabla'>
            <table align='center'>\n 
              <tr>\n
                <th align='center'>Tema</th>\n
                <th align='center'>Contenido</th>\n
              </tr>\n";
          // al recorrer el array de datos de la consulta sobre POST, extraemos los datos de cada fila 
          foreach ($datos as $fila) {
            echo "<tr>\n
                    <td align='center'>" . $fila["tema"] . "</td>\n
                    <td align='center'>" . $fila["contenido"] . "
                      <form action='foro.php' method='POST'>";
                        // Verifico si el id del autor del post coincide con el id del usuario de sesión
                        if ($fila["id_autor"] == $_SESSION['id_usr']) {
                          echo "<input type='hidden' name='id_post' value='" . $fila["id_post"] . "'> 
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




