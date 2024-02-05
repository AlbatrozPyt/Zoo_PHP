<link rel="stylesheet" href="styles/background-alert.css">
<body></body>

<?php
    include "../Conexao/connect.php";
    global $conn;
    $resp = false;

    $caminho = $_POST['path'];

    try {
        $res = $conn->query("DELETE FROM imagens WHERE Caminho = '$caminho'");
        $resp=true;
    }
    catch (Exception $e) {
        $resp=false;
}

    ?>

<script>

    let r = "<?=$resp ?>"

    function Sucess() {
        alert("Imagem deletada com sucesso 🐳🐳🐳");
        window.location.href = "../Pages/ImagesPage.php"
    }
    function Fail() {
        alert("Algo de errado 🤦‍♂️🤦‍♂️🤦‍♂️");
        window.location.href = "../Pages/ImagesPage.php"
    }

    r === "false" ? setTimeout(Fail, 100) : setTimeout(Sucess, 100);
</script>
