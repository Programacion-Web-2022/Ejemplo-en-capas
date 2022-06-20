<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";
    if(!isset($_SESSION['autenticado']))
        header("Location: /login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1> Bienvenido! </h1>
    Usuario registrado: <?= $_SESSION['nombre'] ?>
    <a href="/cerrarSesion.php">Cerrar sesion</a>
</body>
</html>