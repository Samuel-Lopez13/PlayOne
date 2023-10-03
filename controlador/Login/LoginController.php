<?php
    session_start();

    include "../Connection.php";
    include "../../modelo/Login/Inicio.php";

    if(isset($_COOKIE['correo'])){
        // Si existe, redirige al usuario a la página de inicio directamente
        header("Location: ../../vista/Inicio/Index.php");
        exit;
    }

    if(isset($_POST['correo']) && isset($_POST['contrasena'])){
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $loginModel = new ModeloLogin($conn);
        $isValid = $loginModel->loginValidation($correo, $contrasena);

        if($isValid){
            $_SESSION['correo'] = $correo;
            setcookie('correo', $correo, time() + 3600, "/");

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
    }
?>