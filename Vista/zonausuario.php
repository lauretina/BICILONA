<?php 
    require_once ('../Modelo/login.php');
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metadatos description y title para SEO-->
    <meta name="description" content="Encontrarás todo lo que desees para tu bicicleta en nuestra comunidad y disfrutarás de nuestro foro y tienda, ¡apúntate cuanto antes!">
    <title>Disfruta de tu perfil privado para poder comunicarte y compartir en BiciLona</title>
     <!-- Font Awesome para los iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> 
    <!-- Mis estilos -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php 
        require "../Controlador/headerzonausuario.php";
    ?>
    <!-- Contenido principal -->
    <main>
        <!-- Llamo por su nombre al usuario que inicia sesión -->
        <h1>BIENVENIDO/A, <?php echo $_SESSION['nombre'] ?>, A TU ÁREA PERSONAL</h1>
        <div class="dosIconos">
                <figure id="tienda">
                    <img src="../src/images/venta_tienda_web.webp" alt="comercio segunda mano">
                    <figcaption>Inserta tu producto</figcaption>
                </figure>
                <figure id="foro">
                    <img src="../src/images/comunidad_opinion.webp" alt="foro opiniones">
                    <figcaption>Comparte tu opinión</figcaption>
                </figure>
            </div>
        <!-- Formulario para insertar producto se muestra clicando sobre el icono de carrito-->
        <section class="centrar">
            <div class="registrologin escondido" id="zonatienda">
                <form action="tienda.php" method="post">
                    <input type="text" name="nombre" placeholder="Cómo se llama tu producto" id="nombre" required>
                    <input type="text" name="precio" placeholder="precio" id="precio" required>
                    <textarea id="descripcion" name="descripcion" rows="4" cols="20" placeholder="Haz una breve descripción del producto que vas a subir"></textarea>
                    <div class="envia">
                     <input type="submit" value="Introduce tu producto" id="introduceproducto">
                    </div>
                </form>
            </div>
        </section>
        <!-- Formulario para insertar post se muestra clicando sobre el icono de foro-->
        <section class="centrar">
          <div class="registrologin escondido" id="zonaforo">
			<form action="foro.php" method="post">
				<input type="text" name="tema" placeholder="Tema" id="tema" required>
				<textarea id="contenido" name="contenido" rows="4" cols="20" placeholder="Escribe aquí tu publicación"></textarea>
                <div class="envia">
				<input type="submit" value="Escribe tu post" id="introducepost">
                </div>
			</form>
          </div>
        </section>
    </main>
    <!-- Pie de página -->
    <?php 
        require "../Controlador/footer.html";
    ?>
    <!-- Javascript -->
    <script src="../js/javascript.js"></script>
</body>
</html>