<?php
    class ModeloLogin{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function loginValidation($correo, $contrasena){
            $query = "SELECT * FROM usuarios WHERE Correo = '$correo'
                    and Contrasena = '$contrasena'";

            $result = mysqli_query($this->conn, $query);

            return mysqli_num_rows($result) > 0;
        }
    }
?>