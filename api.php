<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";
    header("Content-Type:application/json");

    $data = json_encode(PersonaControlador::Listar());

    echo $data;
