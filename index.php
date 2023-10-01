<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayOne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/Login/estilo.css">
</head>
<body>
    <div class="login">
        <div class="inicio d-flex justify-content-center">
            <p class="logo">
                <img src="https://acortar.link/V4LLB7">
            </p>
            <div class="inicio_Caja d-flex flex-column">
                <div class="sesion d-flex flex-column">
                    <h1 class="titulo text-center">Bienvenido</h1>
                    <div class="formulario">
                        <form action="modelo/Login/Inicio.php" method="POST">
                            <div class="nombre">
                                <label class="titleInput">Correo electrónico</label>
                                <input type="text" class="input" name="correo" placeholder="Ingresa tu correo electrónico">
                                <!--<span class="requireds">Este campo no puede estar vacío</span>-->
                            </div>
                            <div class="contrasena">
                                <label class="titleInput">Contraseña</label>
                                <div class="ojo">
                                    <input ref="contrasena" class="input" name="contrasena" placeholder="Ingresa tu contraseña">
                                    <!--<i class="ver"></i>-->
                                </div>
                                <!--
                                <div class="requerido">
                                    <span class="requireds">Este campo no puede estar vacío</span>
                                </div>-->
                            </div>
                            <a class="olvidar text-decoration-none">¿Olvidaste tu contraseña?</a>
                            <div class="recuerdame d-flex">
                                <input type="checkbox" id="recordar" class="cursor">
                                <label for="recordar" style="margin-left: 5px" class="cursor recordarLable">Recordarme</label>
                            </div>
                            <div class="boton d-flex justify-content-center">
                                <button type="submit" class="btnIniciar">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sinCuenta d-flex justify-content-center align-items-center">
                    <p>¿No tienes cuenta? <a class="registrarse" href="vista/Registrarse/Registro.php">Registrate aquí</a></p>
                </div>
            </div>
        </div>
        <footer class="footer mt-auto">
            <div class="footerL d-flex align-items-center">
                <p class="elaborado">Elaborado Por</p>
                <img src="assets/imagenes/NexusTechText.svg" style="width:160px;">
            </div>
            <div class="footerR">
                <p>@Todos los derechos reservados</p>
            </div>
        </footer>
    </div>
</body>
</html>