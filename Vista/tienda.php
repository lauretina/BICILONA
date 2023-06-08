<?php 
 require_once ('../Modelo/login.php');
 require_once ('../Controlador/productosCont.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metadatos description y title para SEO-->
    <meta name="description" content="¿Tienes productos que ya no uses y que no quieres tirar?¿Encuentras joyas en cosas que los demás no quieren?Este es tu lugar, coopera con otros.">
    <title>Compra, vende e intercambia tus productos en nuestra tienda de segunda mano de Bicilona</title>
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
      <h1>BIENVENIDO/A, <?php echo $_SESSION['nombre'] ?>, A LA TIENDA</h1>
      <h2>Aquí encontrarás el espacio perfecto para vender, comprar e intercambiar productos.</h2>";
        <?php 
            //si existen datos en el formulario de INSERTAR PRODUCTOS...
            if (isset($_POST["nombre"]) && isset($_POST["precio"]) && isset($_POST["descripcion"])) {
              //... los inserta en la base de datos...
              insertaProducto($_POST["nombre"], $_POST["precio"], $_POST["descripcion"]);
            }         
            // si existen datos en el formulario de borrar producto... 
            if (isset($_POST['borrar'])){
              //...borramos el producto con el id enviado con hidden en el formulario
              borraProducto($_POST['id_prod']);
            }   
            // muestro lista con todos los productos
            muestraProducto();  
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