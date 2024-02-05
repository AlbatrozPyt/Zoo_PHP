<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagem de <?=$_POST['nomeAnimal'] ?></title>
    <link rel="stylesheet" href="../styles/ImagemList.css">
</head>
    <body>
    <div class="container-imagens">
        <a href="../Pages/ImagesPage.php">
            <img class="back-arrow" src="../assets/icons/seta-para-a-esquerda.svg" alt="">
        </a>

        <?php
        include "../Conexao/connect.php";
        global $conn;

        $nomeAnimal = $_POST['nomeAnimal'];
        $image = "";
        $res = $conn->query("SELECT * FROM nomenclatura WHERE Apelido = '$nomeAnimal'");

        if ($res->num_rows > 0) {
            $res = $conn->query("SELECT * FROM imagens WHERE Apelido_Animais = '$nomeAnimal'");
            if ($res->num_rows > 0) {
                echo "<h1> $nomeAnimal </h1>";
                while ($row = $res->fetch_assoc()) {
                    $animal = $row["Apelido_Animais"];
                    $image = $row["Caminho"];
                    echo "<img src='$image' alt=''>";
                }
            } else $res = 'false';
        } else $res = 'false';


        ?>
    </div>
    </body>
</html>

<script>
    let r = "<?= $res?>";

    if (r === "false") {
        alert("Não existe nenhuma imagem do animal !!!")
        window.location.href = "../Pages/ImagesPage.php"
    }
</script>
