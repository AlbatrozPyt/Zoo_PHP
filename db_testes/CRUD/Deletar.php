<link rel="stylesheet" href="styles/background-alert.css">
<body></body>

<?php
    include "../Conexao/connect.php";
    global $conn;
    $aplDelete = $_POST['aplDelete'];
    $resp = false;

    $res = $conn->query("SELECT Apelido, Nome_Cientifico FROM nomenclatura");

    foreach ($res as $item) {
        foreach ($item as $i) {
           if ($aplDelete === $i) {
               try {
                   $resp = "true";
                   $conn->query("DELETE FROM nomenclatura WHERE Apelido = '$aplDelete'");
                   $aplDelete = "";
               } catch (Exception $e) {
                   echo "<h1>Erro >>> : $e </h1>";
               }
               break;
           }
        }
    }

    ?>

<script>
    let r = "<?=$resp ?>"

    function Sucess() {
        alert("Deletado com sucesso 🦔🦔🦔");
        window.location.href = "../index.php";
    }
    function Fail() {
        alert("❌❌❌O apelido digitado não existe❌❌❌");
        window.location.href = "../index.php";
    }

    r === "false" ? setTimeout(Fail, 100) : setTimeout(Sucess, 100);

</script>