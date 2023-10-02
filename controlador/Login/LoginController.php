<?php
    session_start();

    include "../Connection.php";
    include "../../modelo/Login/Inicio.php";

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $loginModel = new ModeloLogin($conn);
    $isValid = $loginModel->loginValidation($correo, $contrasena);

    if($isValid){
        $_SESSION['correo'] = $correo;

        header("Location: ../../vista/Inicio/Index.php");
    } else{
        echo '
              <script>
                  alert ("Usuario no existente, verifique los datos");
                  window.location = "../../index.php";
              </script>
             ';
        exit;
    }
?>