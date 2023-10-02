<?php
    include "../Connection.php";
    include "../../modelo/Login/Inicio.php";

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $loginModel = new ModeloLogin($conn);
    $isValid = $loginModel->loginValidation($correo, $contrasena);

    if($isValid){
        setcookie("correo", $correo, time() + 3600);
        setcookie("contrasena", $contrasena, time() + 3600);
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