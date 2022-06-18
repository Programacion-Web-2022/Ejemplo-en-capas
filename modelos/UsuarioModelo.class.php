<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";

    class UsuarioModelo extends Modelo {
        public $Id;
        public $Nombre;
        public $Password;

        public function __construct($id=""){
            parent::__construct();
            if($id !== "") {
                $this -> Id = $id;
                $this -> Obtener();
            }
        }
        public function Guardar(){
            if($this -> Id === NULL) $this -> insertar();
            else $this -> modificar();
        }

        public function Obtener(){
            $sql = "SELECT * FROM usuarios WHERE id = " . $this -> Id;
            $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

            $this -> Id = $fila['id'];
            $this -> Nombre = $fila['nombre'];
            
        }

        public function Eliminar(){
            $sql = "DELETE FROM usuarios WHERE id = " . $this -> id;
            $this -> conexion -> query($sql);
        }

        private function insertar(){
            $sql = "INSERT INTO usuarios (nombre,password) VALUES (
                '" . $this -> Nombre . "',
                '" . password_hash($this -> Password,PASSWORD_DEFAULT) . "'
            )";
            $this -> conexion -> query($sql);
        }

        private function modificar(){
            $sql = "UPDATE usuarios SET 
                    nombre = '" . $this -> Nombre . "',
                    password = '" . $this -> Password . "', 
                    WHERE id = " . $this -> id;
            $this -> conexion -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM usuarios";
            $filas = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $elementos = [];
            foreach($filas as $fila){
                $p = new PersonaModelo();
                $p -> Id = $fila['id'];
                $p -> Nombre = $fila['nombre'];
                array_push($elementos,$p);
            }
            return $elementos;
        }

        public function Autenticar(){
            $sql = "SELECT password FROM usuarios WHERE nombre = '" . $this -> Nombre . "'";
            $resultado = $this -> conexion -> query($sql);

            if($resultado -> num_rows == 0)
                return false;
            else {
                $fila = $resultado -> fetch_all(MYSQLI_ASSOC)[0];
                $passwordHasheado = $fila['password'];
                if(password_verify($this -> Password, $passwordHasheado)) return true;
                else return false;
            }
        }

        
    }