<?php

session_start();

if (!$_SESSION['email']) {

    header('Location:pagina_login.php');
    exit();
}

$email = $_SESSION['email'];
