<?php
    class InicioModelClass{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function obtenerDatosPersonales($correo){
            $query = "SELECT * FROM usuarios WHERE Correo = '$correo'";

            $result = mysqli_query($this->conn, $query);

            return $result;
        }
    }
?>