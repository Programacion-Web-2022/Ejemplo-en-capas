<?php 
    require $_SERVER['DOCUMENT_ROOT'] ."/utils/autoload.php";
    session_destroy();
    header("Location: /login.php");