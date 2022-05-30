<?php 
    require "Modelo.php";

    class PersonaModelo extends Modelo {
        public $id;
        public $nombre;
        public $apellido;
        public $telefono;

        public function Guardar(){
            $sql = "INSERT INTO persona VALUES ($this -> id,'$this -> nombre','$this -> apellido', $this -> telefono";
            $this -> conexion -> query($sql);
            
        }
        
    }