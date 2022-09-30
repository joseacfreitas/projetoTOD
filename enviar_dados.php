<?php

include_once "conetar.php"; // Chamar fichero de coneçao.

// clicou no submit?
if ($_POST != NULL) {

        // Obtem dados inseridos pelo usuario
        $nome = mysqli_real_escape_string($conetar, $_POST["nome"]);
        $email = mysqli_real_escape_string($conetar, $_POST["email"]);
        $pass = mysqli_real_escape_string($conetar, $_POST["pass"]);

        // criar comando SQL
        $sql = "INSERT INTO Registros_usuarios(Nome,Email,Pass) 
                VALUES ('$nome','$email','$pass')";

        // Executar o SQL na BD
        $retornar = $conetar->query($sql);

        if ($retornar == true) {

                header("Location: pagina_login.php");
        } else {
                header("Location: Pagina_reg_usuarios.php");
        }
}
