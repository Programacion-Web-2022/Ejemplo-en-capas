<?php 

    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";

    $nombre = $_POST['usuario'];
    $password = $_POST['password'];

    if(UsuarioControlador::Autenticar($nombre,$password)){
        $_SESSION['autenticado'] = true;
        $_SESSION['nombre'] = $nombre;
        header("Location: /index.php");
    }
    else 
        header("Location: /login.php");