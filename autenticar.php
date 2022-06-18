<?php 

    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";

    $nombre = $_POST['usuario'];
    $password = $_POST['password'];

    if(UsuarioControlador::Autenticar($nombre,$password))
        echo "Bienvenido";
    else 
        header("Location: /login.php");