<?php

include '../Login/Connection.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$icono = "https://static.vecteezy.com/system/resources/previews/007/409/979/non_2x/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg";

$query = "INSERT INTO `usuarios`(`UserName`, `Correo`, `Contrasena`, `Icono`)
    VALUES ('$nombre','$correo','$contrasena','$icono')";

// verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo'");


if (mysqli_num_rows($verificar_correo) > 0){
    echo '
            <script>
                alert ("Este correo ya se encuentra registrado, intente con otro nuevamente");
                window.location = "Registro.php";
            </script>
        ';
    exit();
}

$ejecutar = mysqli_query($conn, $query);

if ($ejecutar){
    echo ' 
            <script>
                alert ("Usuario registrado correctamente");
                
                window.location = "../../index.php";
            </script>
        ';
}

mysqli_close($conn);
?>