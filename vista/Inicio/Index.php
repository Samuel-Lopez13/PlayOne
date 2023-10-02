<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="imagenes/icono.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="scoresStyle.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Audiowide:wght@400&display=swap" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    // Incluir el archivo PHP
        include "../../../playone/controlador/Inicio/ObtenerDatosController.php";
    ?>

    <div class="contenedor">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid principal">
                <p class="playOne"> <span>Play</span>One</p>
                <button class="buttonNav navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <img class="imagenPerfil" src="<?php echo $icono; ?>">
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background-color: #152953">
                    <div class="infoPerfil">
                        <div class="contenedor1 offcanvas-header">
                            <div class="part1_1">
                                <img class="imagenLogo" src="<?php echo $icono; ?>">
                            </div>
                            <div class="part1_2">
                                <button type="button" class="btnCerrar btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="infoUser">
                            <div class="user">
                                <h3 class="user_user">
                                    <?php echo $UserName; ?>
                                </h3>
                            </div>
                            <div class="correo">
                                <h3 class="correo_correo">
                                    <?php echo $correo; ?>
                                </h3>
                            </div>
                        </div>
                        <div class="lista">
                            <div class="list">
                                <ion-icon class="iconoList" name="person-outline"></ion-icon>
                                <h5 class="textList">My Profile</h5>
                            </div>
                            <div class="list">
                                <ion-icon class="iconoList" name="create-outline"></ion-icon>
                                <h5 class="textList">Edit profile</h5>
                            </div>
                            <div class="list" id="score">
                                <ion-icon class="iconoList" name="ribbon-outline"></ion-icon>
                                <h5 class="textList">Scores</h5>
                            </div>
                            <div class="list">
                                <ion-icon class="iconoList" name="trophy-outline"></ion-icon>
                                <h5 class="textList">Records</h5>
                            </div>
                            <div class="list">
                                <ion-icon class="iconoList" name="log-out-outline"></ion-icon>
                                <a href="../../index.php" class="textList">Log Out</a>
                            </div>
                        </div>
                    </div>

                    <!--    Escore        -->

                    <div class="scores">
                        <div class="encabezado">
                            <div class="part1_1">
                                <ion-icon class="btnRegresar" id="regresarScore" name="chevron-back-outline"></ion-icon>
                            </div>
                            <div class="part1_2">
                                <h4 class="textScore">Score</h4>
                            </div>
                            <div class="part1_3">
                                <button type="button" id="cerrarbtn" class="btnCerrar btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="perfilScores">
                            <div class="logoPerfil">
                                <img class="imagenLogo" src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png">
                            </div>
                            <div class="usuarioScores">
                                <h3 class="usuarioScores_h3">Samuel Lopez</h3>
                            </div>
                        </div>
                        <div class="gamesWon">
                            <div class="gamesTitle">
                                <h3 class="usuarioSco">Games Won</h3>
                            </div>
                            <div class="gamesFull">
                                <div class="textGames">
                                    <h5 class="textGames_h5">Hangman</h5>
                                    <h6 class="pointGames">1</h6>
                                </div>
                                <div class="textGames">
                                    <h5 class="textGames_h5">Crossword</h5>
                                    <h6 class="pointGames">3</h6>
                                </div>
                                <div class="textGames">
                                    <h5 class="textGames_h5">Word Search</h5>
                                    <h6 class="pointGames">4</h6>
                                </div>
                                <div class="textGames">
                                    <h5 class="textGames_h5">Memory</h5>
                                    <h6 class="pointGames">3</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--    Escore        -->

                </div>
            </div>
        </nav>
        <div class="info">
            <h2 class="info_itulo ">EveryOne PlayOne</h2>
            <h3 class="info_descripcion"> Access to quality English learning is essential for equitable education</h3>
        </div>
        <div class="games">
            <section class="game1">
                <div class="contenedorGame1">
                    <img src="../../assets/imagenes/Hangman.png" class="imagenGame1">
                    <div class="hoverGame">
                        <a class="botonGame">
                            Play
                        </a>
                    </div>
                </div>
                <div class="contenedorTitleGame1">
                    <h1 class="tituloGame1">Hangman</h1>
                </div>
            </section>
            <section class="game1" style="background-color: #2A044A">
                <div class="contenedorGame1" style="background-color: #2A044A">
                    <img src="https://firebasestorage.googleapis.com/v0/b/logos-a6d6f.appspot.com/o/Crossword.png?alt=media&token=a8dffa37-0b1f-40de-b156-9f4acfe8d639&_gl=1*cgtgxv*_ga*NTg0NzIyOTc5LjE2OTYyMTAxMDQ.*_ga_CW55HF8NVT*MTY5NjIxMDEwMy4xLjEuMTY5NjIxMDg3OS40My4wLjA." class="imagenGame1">
                    <div class="hoverGame hoverGame2" style="background-color: #2A044A">
                        <a class="botonGame">
                            Play
                        </a>
                    </div>
                </div>
                <div class="contenedorTitleGame1">
                    <h1 class="tituloGame1">Crossword</h1>
                </div>
            </section>
            <section class="game1" style="background-color: #5C65C0">
                <div class="contenedorGame1" style="background-color: #6F95FF">
                    <img src="../../assets/imagenes/Word%20Search.png" class="imagenGame1">
                    <div class="hoverGame hoverGame3" style="background-color: #5C65C0">
                        <a class="botonGame">
                            Play
                        </a>
                    </div>
                </div>
                <div class="contenedorTitleGame1">
                    <h1 class="tituloGame1">Word Search</h1>
                </div>
            </section>
            <section class="game1" style="background-color: #AD2BAD">
                <div class="contenedorGame1" style="background-color: #C575C5">
                    <img src="../../assets/imagenes/Memory.png" class="imagenGame1">
                    <div class="hoverGame hoverGame4" style="background-color: #AD2BAD">
                        <a class="botonGame">
                            Play
                        </a>
                    </div>
                </div>
                <div class="contenedorTitleGame1">
                    <h1 class="tituloGame1">Memory</h1>
                </div>
            </section>
        </div>
    </div>

    <script src="Vista.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
</body>
</html>