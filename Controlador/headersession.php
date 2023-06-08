<?php 
    require_once ('../Modelo/login.php');

    //determino las cabeceras de la página en función de si el usuario está logueado o no
    if (isset($_SESSION['nombre'])){
        $nombreUsuario = $_SESSION['nombre'];
        echo "<header>
                <!-- icono burger oculta -->
                <div class='barranavegacion'><span id='btn-menu'><i class='fa fa-bars fa-sm' id='cruz'></i></span> BiciLona</div> 
                <nav class='bicilona'>
                    <!-- menu desplegado -->
                    <h2>BiciLona</h2>
                    <ul class='menu' id='menu'>
                        <li class='menu-item'>
                            <a href='tienda.php' class='menu-link'>Tienda</a>
                        </li>
                        <li class='menu-item'>
                            <a href='foro.php' class='menu-link'>Foro</a>
                        </li>
                        <li class='menu-item'>
                            <a href='zonausuario.php' class='menu-link'>Área de usuario</a>
                        </li>
                        <li class='menu-item'>
                            <a href='../Modelo/logout.php' class='menu-link'>Cierra sesión</a>
                        </li>
                    </ul>
                </nav>
        </header>";
        }else{
        echo "<header>
                <!-- icono burger oculta para pantalla grande -->
                <div class='barranavegacion'><span id='btn-menu'><i class='fa fa-bars fa-sm' id='cruz'></i></span> BiciLona</div> 
                <nav class='bicilona'>
                    <!-- menu en pantalla pequeña desplegado -->
                    <h2>BiciLona</h2>
                    <ul class='menu' id='menu'>
                        <li class='menu-item'>
                            <a href='../index.html' class='menu-link'>Home</a>
                        </li>
                    </ul>
                </nav>
            </header>";

    }
?>