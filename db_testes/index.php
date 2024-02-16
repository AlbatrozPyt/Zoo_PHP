<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database tests</title>
    <link rel="stylesheet" href="./styles/Header.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/Listar.css">
</head>
<body>
    <?php include "Components/Header.php" ?>

    <div class="main">
    <h1>Index Page</h1>




    <form class="formPost" action="CRUD/Cadastrar.php"  method="post">
        <h2>Cadastar Animais</h2>
        <label>
            Apelido:
            <input type="text" name="apelido" required>
        </label>
        <br>
        <label>
            Nome Cientifico:
            <input type="text" name="nomeCientifico" required>
        </label>
        <br>
        <button>Cadastar</button>
    </form>

    <br>

    <form class="formPost" action="CRUD/Atualizar.php"  method="post">
        <h2>Atualizar</h2>

        <label>
            Apelido Antigo:
            <input type="text" name="apelidoAntigo" required>
        </label>
        <label>
            Apelido Novo:
            <input type="text" name="apelidoNovo" required>
        </label>

        <label>
            Nome Cientifico Novo:
            <input type="text" name="nomeCientificoUp" required>
        </label>

        <br>

        <button>Atualizar</button>
    </form>

    <br>

    <form class="formPost" action="CRUD/Deletar.php"  method="post">
        <h2>Deletar</h2>
        <label>
            Apelido:
            <input type="text" name="aplDelete" required>
        </label>
        <br>
        <button>Deletar</button>
    </form>

        <?php
        include("CRUD/Listar.php");

        if ($_SESSION['Permissao'] !== 'Comum') echo '<a href="/db_testes/ver-imagens">Ver imagens...</a>';
        ?>

    </div>

</body>
</html>