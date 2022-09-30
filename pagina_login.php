<?php

session_start();

?>
<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="CSS/style_login.css">

    <title>Pagina Login</title>

</head>

<body>

    <a href="index.php"> HOME </a>

    <img class="logo_" src="Img/logo_transparent1.png" />

    <form action="validar_login.php" method="post">
        <div>

            <h1>LOGIN</h1><br>

            <h5><i> Insira os dados da sua conta</h5><br>
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
                <div class="notification bg-danger text-white ">
                    <h5>ERRO: Email ou sanha invalidos</h5>
                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            <br>
            <div class="mb-3">
                <label for="email" class="form-label"><i>Email:</i></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Escrever email de contacto" required>
            </div><br>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="pass" id="password" class="form-control" autocomplete="off" placeholder="Escrever Password" required>
            </div><br><br>

            <button type="submit" class="btn btn-primary">Entrar</button><br>
        </div>
    </form>



</body>

</html>