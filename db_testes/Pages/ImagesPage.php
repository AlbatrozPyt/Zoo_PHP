<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagens dos animais</title>
    <link rel="stylesheet" href="styles/imagesPage.css">
</head>
<body>
    <?php
        include "../Components/Header/Header.php";

        if ($_SESSION['User'] === null || $_SESSION['Permissao'] === "Comum") {
           if ($_SESSION['User'] === null) header("Location: ./LoginPage.php");
           else header("Location: ../index.php");
        }
    ?>

    <div class="main">
        <h1>Imagens</h1>

        <br>

        <form class="formPost" action="../CRUD/ImagensList.php" method="post">
            <h2>Pesquisar imagem</h2>
            <label>
                Selecionar:
                <select name="nomeAnimal">
                    <?php
                    include "../Conexao/connect.php";
                    global $conn;
                    $res = $conn->query("SELECT Apelido_Animais FROM imagens");
                    while ($row = $res->fetch_assoc()) {
                        echo '<option value="' . $row['Apelido_Animais'] . '">' . $row['Apelido_Animais'] . '</option>';
                    }
                    ?>
                </select>
            </label>

            <button>Pesquisar</button>
        </form>

        <br>

        <form class="formPost" action="../CRUD/ImagemCadastrar.php" method="post" enctype="multipart/form-data">
            <h2>Cadastar Imagem</h2>
            <label>
                Nome do animal:
                <select name="ApelidoAnimal">
                    <?php
                    $res = $conn->query("SELECT Apelido FROM nomenclatura");
                    while ($row = $res->fetch_assoc()) {
                        echo '<option value="' . $row['Apelido'] . '">' . $row['Apelido'] . '</option>';
                    }
                    ?>
                </select>
            </label>
            <label class="labelFile">
                Selecione uma imagem <img src="../assets/icons/angulo-pequeno-para-baixo.svg" alt="">
                <input type="file" name="animalImage" required>
            </label>
            <br>
            <button>Upload</button>
        </form>


        <form class="formPost" action="../CRUD/DeleteImage.php" method="post">
            <h2>Deletar</h2>
            <label>
                Selecionar:
                <select required name="path">
                    <?php
                    include "../Conexao/connect.php";
                    global $conn;
                    $res = $conn->query("SELECT Caminho FROM imagens");
                    while ($row = $res->fetch_assoc()) {
                        echo '<option value="' . $row['Caminho'] . '">.' . $row['Caminho'] . '</option>';
                    }
                    ?>
                </select>
            </label>

            <button>Deletar</button>
        </form>
    </div>

</body>
</html>
