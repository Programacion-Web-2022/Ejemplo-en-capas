<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";
    
    echo "<h1 style='color: blue;'> Lista de Personas </h1>";

    foreach(PersonaControlador::Listar() as $p){
        echo "ID: " . $p['id'] . " <br />";
        echo "Nombre: " . $p['nombre'] . " <br />";
        echo "Apellido: " . $p['apellido'] . " <br />";
        echo "Telefono: " . $p['telefono'] . " <br />";
        echo "<br /><br />";
    }

   
    
    