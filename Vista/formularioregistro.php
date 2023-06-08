<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metadatos description y title para SEO-->
    <meta name="description" content="¡Regístrate ahora y disfruta de todas las ventajas de una comunidad colaborativa y sostenible, te facilitará mucho la vida si eres usuario habitual de bicicletas!">
    <title>En Bicilona encontrarás las mejores recomendaciones y ofertas para tu bici</title>
      <!-- Font Awesome para los iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> 
    <!-- Mis estilos -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php 
        require '../Controlador/headersession.php';
    ?>
    <!-- Contenido principal -->
    <main>
        <h1>Bicilona es un espacio colaborativo y participativo</h1>
        <section class="presentacion">
            <h2>¿Quieres unirte a nuestra comunidad de ciclistas?</h2>
        
            <div class="registrologin">
                <h3>Regístrate o <a href="formulariologin.php">Inicia sesión</a></h3>

                <form action="../Modelo/registro.php" method="post">
                    <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                    <input type="text" name="apellidos" placeholder="Apellidos" id="apellidos">
                    <input type="text" name="email" placeholder="Email" id="email">
                    <input type="password" name="password" placeholder="Contraseña" id="password">
                    
                    <div class="envia">
                    <input type="submit" value="Crea tu cuenta" id="registro">
                    </div>
                </form>
            </div>
            <?php 
            // Muestro los errores enviados desde el método get en la url en caso de que haya habido algún error en el registro
                if(isset($_GET['error']) && $_GET['error'] == 'email_previo'){
                    echo "<h4 class='erroneo'>Este email ya existe en BiciLona, prueba con otro.</h4>";
                }
                if(isset($_GET['error']) && $_GET['error'] == 'campos_vacios'){
                    echo "<h4 class='erroneo'>Te has dejado campos sin rellenar, fíjate mejor.</h4>";
                }
                if(isset($_GET['error']) && $_GET['error'] == 'email_invalido'){
                    echo "<h4 class='erroneo'>El email no tiene un formato válido, vigila.</h4>";
                }
                
            ?>
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