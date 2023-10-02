<?php
    class SignUp{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        private function validation($correo){
            $validation = mysqli_query($this->conn, "SELECT * FROM usuarios WHERE correo = '$correo'");
            return $validation;
        }

        private function query($nombre, $correo, $contrasena, $icono){
            $query = "INSERT INTO `usuarios`(`UserName`, `Correo`, `Contrasena`, `Icono`)
                VALUES ('$nombre','$correo','$contrasena','$icono')";
            return $query;
        }

        public function signUp($correo){
            return mysqli_num_rows($this->validation($correo)) > 0;
        }

        public function crearUsuario($nombre, $correo, $contrasena, $icono){
            return mysqli_query($this->conn, $this->query($nombre, $correo, $contrasena, $icono));
        }

    }
?>