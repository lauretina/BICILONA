<?php 
    require_once ('../Modelo/login.php');
    require_once ('../Controlador/postsCont.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metadatos description y title para SEO-->
    <meta name="description" content="¡Aquí encontrarás un foro de opinión a tu medida donde poder consultar todo lo relacionado con bicicletas! ¡Entra y conoce gente!">
    <title>Comparte tus consejos y opiniones en nuestro foro</title>
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
            <h1>BIENVENIDO/A, <?php echo $_SESSION['nombre'] ?>, AL FORO DE OPINIÓN</h1>
            <h2>Aquí encontrarás el espacio perfecto para intercambiar opiniones, consejos y anécdotas sobre ciclismo.</h2>";
                <?php 
                    //si existen datos en el formulario de INSERTAR POSTS...
                    if (isset($_POST["tema"]) && isset($_POST["contenido"])) {
                        //... los inserta en la base de datos...
                        insertaPost($_POST["tema"], $_POST["contenido"]);
                    }

                    //si existen datos en el formulario de BORRAR POSTS...
                    if (isset($_POST['borrar'])){
                        //borramos el producto con el id enviado con hidden
                        borraPost($_POST['id_post']);
                    }     
                    //muestro la lista con todos los posts
                    muestraPost();
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