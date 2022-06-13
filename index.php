<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";
 

    PersonaControlador::Alta("Juan","Perez","123");
    //PersonaControlador::Modificar($id,$nombre,$apellido,$telefono);
    //PersonaControlador::Eliminar($id);

    
    /*foreach(PersonaControlador::Listar() as $p){
        echo "ID: " . $p['id'] . " <br />";
        echo "Nombre: " . $p['nombre'] . " <br />";
        echo "Apellido: " . $p['apellido'] . " <br />";
        echo "Telefono: " . $p['telefono'] . " <br />";
        echo "<br /><br />";
    }*/

   
    
    