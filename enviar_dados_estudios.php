<?php

include_once "conetar.php"; // Chamar fichero de coneçao.

// clicou no submit?
if ($_POST != NULL) {

        // Obtem dados inseridos pelo usuario
        $nome = mysqli_real_escape_string($conetar, $_POST["nome"]);
        $morada = mysqli_real_escape_string($conetar, $_POST["morada"]);
        $país = mysqli_real_escape_string($conetar,$_POST["pais"]);

        // criar comando SQL
        $sql = "INSERT INTO estudios(nome,morada,pais) 
                VALUES ('$nome','$morada','$país')";

        // Executar o SQL na BD
        $retornar = $conetar->query($sql);
}
