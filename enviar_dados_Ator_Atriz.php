<?php

include_once "conetar.php"; // Chamar fichero de coneçao.

// clicou no submit?
if ($_POST != NULL) {

        // Obtem dados inseridos pelo usuario
        $nome = mysqli_real_escape_string($conetar, $_POST["nome"]);
        $morada = mysqli_real_escape_string($conetar, $_POST["morada"]);
        $sexo = mysqli_real_escape_string($conetar, $_POST["sexo"]);
        $dataNascimento = mysqli_real_escape_string($conetar, $_POST["dataNascimento"]);
        $nacionalidade = mysqli_real_escape_string($conetar, $_POST["nacionalidade"]);

        // criar comando SQL
        $sql = "INSERT INTO actores(nome,morada,sexo,dataNascimento,nacionalidade) 
                VALUES ('$nome','$morada','$sexo','$dataNascimento','$nacionalidade')";

        // Executar o SQL na BD
        $retornar = $conetar->query($sql);
}
