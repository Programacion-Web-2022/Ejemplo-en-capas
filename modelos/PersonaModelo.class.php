<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";

    class PersonaModelo extends Modelo {
        public $id;
        public $nombre;
        public $apellido;
        public $telefono;

        public function __construct($id=""){
            parent::__construct();
            if($id !== "") {
                $this -> id = $id;
                $this -> Obtener();
            }
        }
        public function Guardar(){
            if($this -> id === NULL) $this -> insertar();
            else $this -> modificar();
        }

        public function Obtener(){
            $sql = "SELECT * FROM personita WHERE id = " . $this -> id;
            $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

            $this -> id = $fila['id'];
            $this -> nombre = $fila['nombre'];
            $this -> apellido = $fila['apellido'];
            $this -> telefono = $fila['telefono'];
        }

        public function Eliminar(){
            $sql = "DELETE FROM personita WHERE id = " . $this -> id;
            $this -> conexion -> query($sql);
        }

        private function insertar(){
            $sql = "INSERT INTO personita (nombre,apellido,telefono) VALUES (
                '" . $this -> nombre . "',
                '" . $this -> apellido . "', 
                " . $this -> telefono . "
            )";
            $this -> conexion -> query($sql);
        }

        private function modificar(){
            $sql = "UPDATE personita SET 
                    nombre = '" . $this -> nombre . "',
                    apellido = '" . $this -> apellido . "', 
                    telefono = " . $this -> telefono . "
                    WHERE id = " . $this -> id;
            $this -> conexion -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM personita";
            $filas = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $elementos = [];
            foreach($filas as $fila){
                $p = new PersonaModelo();
                $p -> id = $fila['id'];
                $p -> nombre = $fila['nombre'];
                $p -> apellido = $fila['apellido'];
                $p -> telefono = $fila['telefono'];
                array_push($elementos,$p);
            }
            return $elementos;
        }

        
    }