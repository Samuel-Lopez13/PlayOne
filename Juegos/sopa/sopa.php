<!DOCTYPE html>
<html lang="en">

<head>
    <title>Word Search</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Librerias para generar el juego -->
    <script type="text/javascript" src="js/wordfind.js"></script>
    <script type="text/javascript" src="js/wordfindgame.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <!-- Libreria para ingreso de palabras -->
    <script type="text/javascript" src="js/tag-it.js"></script>
    <?php
    $conexion = mysqli_connect("localhost","root","","login_register_db");
    ?>
    </head>

<body>
    <div class="container">
        <div class="row">
            <script type="text/javascript">
                var ListaPalabras;
                $(document).ready(function() {
                    ListaPalabras = $("#listaPalabras").tagit({});
                    Crear();
                });
            </script>

            <div class="row text-center">
                <div>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Word Search</h4>
                            </div>
                            <div class="panel-body row">
                                <div class="">
                                    <button onclick="Crear();" class="btn btn-success btn-lg">Change the words</button>
                                </div>
                                
                                <!-- Resultado de la sopa de letras con las palabras a buscar -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div id='Palabras'></div>
                                    </div>
                                    <div class="col-md-9">
                                        <div id='juego'></div>
                                        <!-- <p>WORDCROSS
                                        </p> -->
                                        <!-- ESTA LINEA DEL CODIGO NOS PUEDE SERVIR PARA INSERTAR SCORE -->
                                    </div>

                                <div class="botones">
                                    <div class="regresar">
                                        <a href="indexJJ.html"><button onclick="" class="btn btn-success btn-lg">Back</button></a>
                                    </div>
    
                                    <div class="reiniciar">
                                        <a href="../sopa/sopa.php"><button onclick="" class="btn btn-success btn-lg">Reiniciar</button></a>
                                    </div>

                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                    $sql = "SELECT palabras FROM sopa WHERE nombreJuego = 'Juego1'";

                    $resultado = mysqli_query($conexion,$sql);

                    $fila = mysqli_fetch_assoc($resultado);

                    $words = json_decode($fila['palabras']);
                ?>

            <!-- controlar la sopa de letras -->
            <script>

                var palabras = <?php echo json_encode($words);?>; //lo obtiene de la base de datos
                var juego;

        function Crear() {
            
            // Obtener palabras aleatorias y agregarlas a la lista

            var palabrasAleatorias = obtenerPalabrasAleatorias();
            var listaPalabras = $("#listaPalabras");
            listaPalabras.empty(); // Limpiar la lista actual

            palabrasAleatorias.forEach(function(palabra) {
                listaPalabras.append("<li>" + palabra + "</li>");
            });

            $('#Juegos').show();

            // Crear el juego de sopa de letras con las palabras aleatorias
            juego = wordfindgame.create(palabrasAleatorias, '#juego', '#Palabras');

            // Crear la sopa de letras con palabras aleatorias
            var puzzle = wordfind.newPuzzle(palabrasAleatorias, {
                height: 18,
                width: 18,
                fillBlanks: false
            });
        }
                

        function obtenerPalabrasAleatorias() {
            // // Modifica esta función para obtener palabras aleatorias de tu fuente de datos

            var palabras = <?php echo json_encode($words);?>;
            
            var palabrasAleatorias = [];

            for (var i = 0; i < 5; i++) { // Cambia el número 5 por la cantidad de palabras aleatorias deseadas
                var indice = Math.floor(Math.random() * palabras.length);
                var palabra = palabras.splice(indice, 1)[0];
                palabrasAleatorias.push(palabra);
            }

            return palabrasAleatorias;
        }

        $('#solve').click(function() {
            wordfindgame.solve(juego, palabras);
        });
            </script>

            
</body>

</html>