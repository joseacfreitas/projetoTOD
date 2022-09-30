<?php
session_start();

include('conetar.php');

if (empty($_POST['email']) || empty($_POST['pass'])) {

    header('Location:pagina_login.php');
    exit();
}

$email = mysqli_real_escape_string($conetar, $_POST['email']);
$pass = mysqli_real_escape_string($conetar, $_POST['pass']);

$query = "SELECT Email, Pass FROM Registros_usuarios WHERE Email = 
'{$email}' AND Pass = '{$pass}'";

$resultado = mysqli_query($conetar, $query);
$row = mysqli_num_rows($resultado);

if ($row == 1) {

    $_SESSION['email'] = $email;
    header("Location: pagina_filmes.php");
    exit();
} else {

    $_SESSION['nao_autenticado'] = true;
    header("Location: pagina_login.php");
    exit();
}
