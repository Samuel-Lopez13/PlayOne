<?php
session_start();

    include "../../controlador/Connection.php";
    include "../../modelo/Inicio/IncioModel.php";

    $obtenerDatos = new InicioModelClass($conn);

    if (isset($_SESSION['correo'])) {
        $correo = $_SESSION['correo'];
        $result = $obtenerDatos->obtenerDatosPersonales($correo);

        if($result){
            $row = mysqli_fetch_assoc($result);

            if($row){
                $UserName = $row['UserName'];
                $icono = $row['Icono'];

                if($icono == ""){
                    $icono = "https://cdn-icons-png.flaticon.com/512/3135/3135768.png";
                }
            }
        }
    } else {
        $correo = "";
    }

?>