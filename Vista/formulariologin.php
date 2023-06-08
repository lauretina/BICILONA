
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metadatos description y title para SEO-->
    <meta name="description" content="¡Inicia sesión en la comunidad de ciclistas que marcará tendencia, podrás compartir tus inquietudes y tus productos, conocer a otras personas y vivir nuevos retos, solo o acompañado.">
    <title>Bicilona, un espacio donde compartir todo lo que te apetezca relacionado con las bicicletas</title>
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
    <h1>Bienvenido a nuestra comunidad de ciclistas</h1>
    <section class="presentacion">
      <h2>¿Ya formas parte de Bicilona?</h2>   
      <div class="registrologin">
      <h3>Inicia sesión o <a href="formularioregistro.php">Regístrate</a></h3> 

          <form action="../Modelo/login.php" method="post">
              <input type="text" name="email" placeholder="Email" id="email" required>
              <input type="password" name="password" placeholder="Contraseña" id="password" required>
              <div class="envia">
    		        <input type="submit" value="Acceder" id="login">
              </div>
          </form>
      </div>
      <?php 
          // Muestro los errores enviados por el método get en la url en caso de error en el login o éxito
          if(isset($_GET['error']) && $_GET['error'] == 'contrasena_incorrecta'){
            echo "<h4 class='erroneo'>No coinciden las credenciales introducidas.</h4>";
          }
          if(isset($_GET['error']) && $_GET['error'] == 'email_invalido'){
            echo "<h4 class='erroneo'>El email no es válido.</h4>";
          }
          if(isset($_GET['login']) && $_GET['login'] == 'registro_exitoso'){
            echo "<h4 class='exito'> Registro exitoso </h4>";
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