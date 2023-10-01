<?php
include 'Connection.php';

    $correo = $_POST['correo'];

    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conn,"SELECT * FROM usuarios WHERE Correo = '$correo' 
        and Contrasena = '$contrasena'");

    if (mysqli_num_rows($validar_login) > 0){
        /*header("location: ../Inicio/index.html");*/
        echo '
                <script>
                    alert ("Si entraste");
                    window.location = "../../index.php";
                </script>
            ';
        exit;
    } else{
        echo '
                <script>
                    alert ("Usuario no existente, verifique los datos");
                    window.location = "../index.php";
                </script>
            ';
        exit;
    }
?>