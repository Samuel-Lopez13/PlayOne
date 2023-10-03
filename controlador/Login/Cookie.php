<?php
    session_start();

    if(isset($_COOKIE['correo'])){
        // Si existe, redirige al usuario a la página de inicio directamente
        header("Location: ../../vista/Inicio/Index.php");
        exit;
    }
?>