<?php 
    require_once ('../Modelo/login.php');
    require_once ('../Controlador/datosUsuarioCont.php');
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metadatos description y title para SEO-->
    <meta name="description" content="Aquí puedes modificar los datos personales de tu perfil, la comunidad Bicilona te permite interactuar con otros usuarios.">
    <title>BiciLona, tu perfil privado personal es tu carta de presentación en nuestra comunidad</title>
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
        <section class="presentacion">
        <?php 
                // Verificar si se ha enviado el formulario con el botón de envío 'modificar' 
                if(isset($_GET['nombre'], $_GET['apellidos'], $_GET['email'], $_GET['password'])){
                    $nombre = $_GET['nombre'];
                    $apellidos = $_GET['apellidos'];
                    $email = $_GET['email'];
                    $password = $_GET['password'];
                    //...y entonces modificar los datos y mostrar mensaje de éxito
                    modificaDatos($nombre, $apellidos, $email, $password);
                    $_SESSION['nombre'] = $nombre;
                    echo "<h4 class='exito'>Usuario modificado</h4>";
                }
           ?>
            <h1>DATOS PERSONALES DE <?php echo $_SESSION['nombre'] ?></h1>
            <?php 
            // mostrar los datos del usuario
                muestraUsuario();
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