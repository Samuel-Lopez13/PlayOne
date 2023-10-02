<?php
    include "../Connection.php";
    include "../../modelo/Registrarte/Registro.php";

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $icono = "https://static.vecteezy.com/system/resources/previews/007/409/979/non_2x/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg";

    $signUpModel = new SignUp($conn);
    $isValid = $signUpModel->signUp($correo);

    if(!$isValid){
        $creacion = $signUpModel->crearUsuario($nombre, $correo, $contrasena, $icono);

        if($creacion){
            echo ' 
                <script>
                    alert ("Usuario registrado correctamente");
                    
                    window.location = "../../index.php";
                </script>
            ';
            exit();
        }

        mysqli_close($conn);
    } else{
        echo '
            <script>
                alert ("Este correo ya se encuentra registrado, intente con otro nuevamente");
                window.location = "../../vista/Registrarse/Registro.php";
            </script>
        ';
        exit();
    }
?>