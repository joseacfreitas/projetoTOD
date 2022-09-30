<?php

include_once "conetar.php"; // Chamar fichero de coneçao.

// clicou no submit?
if ($_POST != NULL) {

        // Obtem dados inseridos pelo usuario
        $nome = mysqli_real_escape_string($conetar, $_POST["nome"]);
        $ano = mysqli_real_escape_string($conetar, $_POST["ano"]);
        $duracao = mysqli_real_escape_string($conetar, $_POST["duracao"]);
        $nActor = mysqli_real_escape_string($conetar, $_POST["nomeActor"]);
        $estudio = mysqli_real_escape_string($conetar, $_POST["nomeEstudio"]);
        $realizador = mysqli_real_escape_string($conetar, $_POST["nomeRealizador"]);

        // criar comando SQL
        $sql = "INSERT INTO filmes(nome,ano,duracao,nomeActor,nomeEstudio,nomeRealizador) 
                VALUES ('$nome','$ano','$duracao','$nActor','$estudio','$realizador')";

        // Executar o SQL na BD
        $retornar = $conetar->query($sql);
}
