<?php

include('verifica_login.php');

include('enviar_dados_realizadores.php');

require_once("conetar.php");

$pag = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

$busca = "SELECT *FROM actores";
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

    <link type="text/css" rel="stylesheet" href="CSS/style_realizadores.css">

    <title>Pagina Realizadores</title>

</head>

<body>

    <div class="conteiner">
        <table class="table">
            <!--Tabela com classes bootstrap-->
            <thead>
                <tr>
                    <th><b>Nome<b></th>
                    <th><b>Morada<b></th>
                    <th><b>Gênero<b></th>
                    <th><b>Data N<b></th>
                    <th><b>Nacionalidade<b></th>
                </tr>
            </thead>

            <?php
            while ($dados = mysqli_fetch_array($limite)) {
                $nome = $dados["nome"];
                $morada = $dados["morada"];
                $sexo = $dados["sexo"];
                $dataN = $dados["dataNascimento"];
                $nacion = $dados["nacionalidade"];
            ?>
                <tr>
                    <th><?= $nome ?></th>
                    <th><?= $morada ?></th>
                    <th><?= $sexo ?></th>
                    <th><?= $dataN ?></th>
                    <th><?= $nacion ?></th>
                </tr>
            <?php } ?>
        </table>
    </div>

    <marquee class="bvin">
        <?php
        echo "<h2>Bem vindo à página de Realizadores,  <u>$email</u> .</h2>";
        ?>
    </marquee>

    <nav id="navb" class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <img class="logo_" src="Img/logo_transparent1.png" />

            <div>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_filmes.php">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_estudios.php">Estudios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_Ator_Atriz.php">Ator/Atriz</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a id="sair" class="nav-link" href="logout.php">SAIR</a>
                    </li>
                    <li>
                        <button type="button" class="nav-link " data-toggle="modal" data-target="#ExemploModalCentralizado">
                            Inserir Realizador
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
            <span class="tempo"></span>
        </div>

    </div>

    <script src="JS/Relogio.js"></script>


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

                    <h3 class="modal-title2" id="TituloModalCentralizado">Insira um Realizador</h3>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    <form method="post">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome Realizador." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="morada">Morada</label>
                            <input type="text" name="morada" class="form-control" placeholder="Morada do realizador." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="sexo">Genero</label>
                            <input type="text" name="sexo" class="form-control" placeholder="Insira M ou F" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="dataNascimento">Data Nascimento</label>
                            <input type="text" name="dataNascimento" class="form-control" placeholder="Data AAAA-MM-DD." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nacionalidade">Nacionalidade</label>
                            <input type="text" name="nacionalidade" class="form-control" placeholder="Insira a nacionalidade." required>
                        </div>
                        <br>

                        <button type="submit" class="btn1 btn-primary">Enviar</button>
                        <br>
                        <br>

                    </form>
                </div>

                <h5 class="modal-title" id="TituloModalCentralizado"> <span style="color: #f00;">AVISO:</span> <i>certifique-se que o Realizador que deseja inserir, não existe na lista.</i></h5>

            </div>
        </div>
    </div>
</body>

</html>