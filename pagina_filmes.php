<?php

include('verifica_login.php');

include_once "enviar_dados_filmes.php";

require_once("conetar.php");

$pag = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

$busca = "SELECT * FROM filmes ORDER BY Id DESC";
$todos = mysqli_query($conetar, "$busca");

$registros = "10";

$tr = mysqli_num_rows($todos);
$tp = ceil($tr / $registros);

$inicio = ($registros * $pag) - $registros;
$limite = mysqli_query($conetar, "$busca LIMIT $inicio, $registros");

$anterior = $pag - 1;
$proximo = $pag + 1;

?>

<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="http://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="CSS/style_filmes.css">

    <title>Pagina Filmes</title>
    
</head>

<body>

    <div class="conteiner">
        <table class="table">
            <thead>
                <tr>
                    <th><b>Nome<b></th>
                    <th><b>Ano<b></th>
                    <th><b>Duração<b></th>
                    <th><b>Nome Ator/Atriz<b></th>
                    <th><b>Estudio<b></th>
                    <th><b>Realizador<b></th>
                </tr>
            </thead>

            <?php
            while ($dados = mysqli_fetch_array($limite)) {
                $nome = $dados["nome"];
                $ano = $dados["ano"];
                $duracao = $dados["duracao"];
                $nActor = $dados["nomeActor"];
                $estudio = $dados["nomeEstudio"];
                $realizador = $dados["nomeRealizador"];
            ?>
                <tr>
                    <th><?= $nome ?></th>
                    <th><?= $ano ?></th>
                    <th><?= $duracao ?></th>
                    <th><?= $nActor ?></th>
                    <th><?= $estudio ?></th>
                    <th><?= $realizador ?></th>
                </tr>
            <?php } ?>
        </table>
    </div>

    <marquee class="bvin">
        <?php
        echo "<h2>Bem vindo à página de Filmes ,  <u>$email</u> .</h2>";
        ?>
    </marquee>

    <nav id="navb" class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <img class="logo_" src="logo_transparent1.png" />

            <div>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_Ator_Atriz.php">Ator/Atriz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_estudios.php">Estudios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_realizadores.php">Realizadores</a>
                    </li>
                    <li class="nav-item">
                        <a id="sair" href="logout.php">SAIR</a>
                    </li>
                    <li>
                        <button type="button" class="nav-link " data-toggle="modal" data-target="#ExemploModalCentralizado">
                            Inserir Filmes
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav id="pag" aria-label="Navegação de página exemplo">
        <ul class="pagination">
            <?php
            if ($pag > 1) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="?pagina=<?= $anterior; ?>" aria-label="Anterior">
                        <span aria-hidden="true">Anterior</span>
                    </a>
                </li>
            <?php } ?>

            <?php
            for ($i = 1; $i <= $tp; $i++) {
                if ($pag == $i) {
                    echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                }
            }
            ?>
            <?php
            if ($pag < $tp) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="?pagina=<?= $proximo; ?>" aria-label="Próximo">
                        <span aria-hidden="true">Próximo</span>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header ">

                    <h3 class="modal-title2" id="TituloModalCentralizado">Insira um Filme</h3>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    <form method="post">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome filme." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="ano">Ano</label>
                            <input type="text" name="ano" class="form-control" placeholder="Ano de realizaçao." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="duracao">Duração</label>
                            <input type="text" name="duracao" class="form-control" placeholder="Insira duração do filme em minutos" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nomeActor">Nome Ator/Atriz</label>
                            <input type="text" name="nomeActor" class="form-control" placeholder="Insira os nomes dos atores ou atrizes." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nomeEstudio">Nome Estudio</label>
                            <input type="text" name="nomeEstudio" class="form-control" placeholder="Insira o nome do estudio." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nomeRealizador">Nome Realizador</label>
                            <input type="text" name="nomeRealizador" class="form-control" placeholder="Insira a nacionalidade." required>
                        </div>
                        <br>

                        <button type="submit" class="btn1 btn-primary">Enviar</button>

                    </form>
                </div>

                <h5 class="modal-title" id="TituloModalCentralizado"> <span style="color: #f00;">AVISO:</span> <i>certifique-se que o Filme que deseja inserir, não existe na lista.</i></h5>

            </div>
        </div>
    </div>

    <div class="caixa_relogio">

        <div>
            <span id="horas">00</span>
            <span class="tempo">:</span>
        </div>

        <div>
            <span id="min">00</span>
            <span class="tempo">:</span>
        </div>

        <div>
            <span id="seg">00</span>
        </div>

    </div>

    <script src="JS/Relogio.js"></script>

    

</body>

</html>