<?php 
    require "modelos/PersonaModelo.php";


    $p = new PersonaModelo();

    $p -> id = 1;
    $p -> nombre = "Juan";
    $p -> apellido = "Perez";
    $p -> telefono = "12345";

    $p -> Guardar();

    
    