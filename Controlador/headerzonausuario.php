<?php 
 require_once ('../Modelo/login.php');
?>
<!-- navegación para acceder de la zona de usuario a la modificación de este -->
<header>
    <!-- icono burger oculta para pantalla grande -->
    <div class="barranavegacion"><span id="btn-menu"><i class="fa fa-bars fa-sm" id="cruz"></i></span> BiciLona</div> 
    <nav class="bicilona">
    <!-- menu en pantalla grande desplegado y en pequeña en bloque -->
        <h2>BiciLona</h2>
        <ul class="menu" id="menu">
            <li class="menu-item">
                <a href="tienda.php" class="menu-link">Tienda</a>
            </li>
            <li class="menu-item">
                <a href="foro.php" class="menu-link">Foro</a>
            </li>
            <li class="menu-item">
                <a href="modificardatos.php" class="menu-link">Modificar datos</a>
            </li>
            <li class="menu-item">
                <a href="../Modelo/logout.php" class="menu-link">Cierra sesión</a>
            </li>
        </ul>
    </nav>
 </header>
 