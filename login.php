<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";
    if(isset($_SESSION['autenticado']))
        header("Location: /index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/autenticar.php" method="post">
        Usuario: <input type="text" name="usuario"> <br />
        Password: <input type="password" name="password"> <br />
        <input type="submit" name="Iniciar Sesion"> <br />
    </form>
</body>
</html>