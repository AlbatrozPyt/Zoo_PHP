<link rel="stylesheet" href="styles/background-alert.css">
<body></body>

<?php
include "../Conexao/connect.php";
global $conn;
$resp = false;

$nomeAnimal = $_POST['ApelidoAnimal'];
$caminho = "../assets/images/".$_FILES['animalImage']['name'];

try {
    $query = "INSERT INTO imagens VALUES('$nomeAnimal', '$caminho')";
    $conn->query($query);
    $resp=true;
}
catch (Exception $e) {
    $resp = false;
}

?>

<script>

    let r = "<?=$resp ?>"

    function Sucess() {
        alert("Imagem cadastrada com sucesso 🦘🦘🦘");
        window.location.href = "../Pages/ImagesPage.php"
    }
    function Fail() {
        alert("Algo de errado 🤦‍♂️🤦‍♂️🤦‍♂️");
        window.location.href = "../Pages/ImagesPage.php"
    }

    r === "false" ? setTimeout(Fail, 100) : setTimeout(Sucess, 100);
</script>
