<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";

    class UsuarioControlador{
        public static function Alta($nombre,$password){
            $u = new UsuarioModelo();
            $u -> Nombre = $nombre;
            $u -> Password = $password;
            $u -> Guardar();
        
        }

        public static function Autenticar($nombre,$password){
            $u = new UsuarioModelo();
            $u -> Nombre = $nombre;
            $u -> Password = $password;
            return $u -> Autenticar();
        
        }
    }