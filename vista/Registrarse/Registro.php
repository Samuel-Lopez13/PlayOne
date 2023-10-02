<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login d-flex flex-column overflow-hidden">
    <div class="inicio d-flex justify-content-center">
        <p class="logo">
            <img src="https://acortar.link/V4LLB7">
        </p>
        <div class="inicio_caja d-flex flex-column">
            <div class="registrar d-flex flex-column">
                <h1 class="titulo text-center">Crear cuenta</h1>
                <div class="formulario">
                    <form action="../../controlador/Registrarte/RegistrarteController.php" method="POST">
                        <div class="correo">
                            <label class="titleInput">Correo Electronico</label>
                            <input type="text" class="input" name="correo" placeholder="Ingresa tu correo electronico">
                        </div>
                        <div class="nombre">
                            <label class="titleInput">Nombre de Usuario</label>
                            <input type="text" class="input" name="nombre" placeholder="Ingresa tu nombre usuario">
                        </div>
                        <div class="contrasena">
                            <label class="titleInput">Contraseña</label>
                            <div class="ojo">
                                <input class="input" name="contrasena" placeholder="Ingresa tu contraseña">
                            </div>
                        </div>
                        <div class="contrasena">
                            <label class="titleInput">Confirma tu contraseña</label>
                            <div class="ojo">
                                <input class="input" placeholder="Repite tu contraseña">
                            </div>
                        </div>
                        <div class="boton d-flex justify-content-center">
                            <button type="submit" class="btnIniciar">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto">
        <div class="footerL d-flex align-items-center">
            <p class="elaborado">Elaborado Por</p>
            <img src="../../assets/imagenes/NexusTechText.svg" style="width:160px;">
        </div>
        <div class="footerR">
            <p>@Todos los derechos reservados</p>
        </div>
    </footer>
</div>
</body>
</html>