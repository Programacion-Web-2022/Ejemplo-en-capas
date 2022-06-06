<?php

    class Modelo {
        public $IpBaseDeDatos;
        public $NombreBaseDeDatos;
        public $UsuarioBaseDeDatos;
        public $PasswordBaseDeDatos;
        public $PuertoBaseDeDatos;
        
        public $conexion; 


        public function __construct(){
            $this -> incializarDatosDeConexion();
            $this -> conexion = new mysqli(
                $this -> IpBaseDeDatos,
                $this -> UsuarioBaseDeDatos,
                $this -> PasswordBaseDeDatos,
                $this -> NombreBaseDeDatos,
                $this -> PuertoBaseDeDatos
            );
        }

        public function incializarDatosDeConexion(){
            $this -> IpBaseDeDatos = "127.0.0.1";
            $this -> UsuarioBaseDeDatos = "root";
            $this -> PasswordBaseDeDatos = "";
            $this -> NombreBaseDeDatos = "pruebita";
            $this -> PuertoBaseDeDatos = "3306";
        }
    }