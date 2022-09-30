<?php

include_once "conetar.php"; // Chamar fichero de coneçao.

include_once "enviar_dados.php"; //Chamar fichero de inserir dados..

?>

<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="CSS/style_Pagina_reg_usuarios.css">
    <link href="http://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet" />

    <title>Pagina Registos</title>

</head>

<body>

    <a href="index.php"> HOME </a>

    <img class="logo_" src="Img/logo_transparent1.png" />

    <form method="post">
        <div>

            <h1>Registre os seus dados</h1><br>

            <div class="mb-3">
                <label for="nome" class="form-label"><i>Nome:</i></label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Escrever Nome" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="email" class="form-label"><i>Email:</i></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Escrever email de contacto" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="password" class="form-label"><i>Password:<i></label>
                <input type="text" name="pass" id="password" class="form-control" autocomplete="off" placeholder="Escrever Password" required>
            </div><br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button><br>
        </div>
    </form>
</body>

</html>