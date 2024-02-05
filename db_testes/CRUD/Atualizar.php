<link rel="stylesheet" href="styles/background-alert.css">
<body></body>

<?php
    include  "../Conexao/connect.php";
    global $conn;
    $aplAntigo=$_POST['apelidoAntigo'];
    $aplNovo=$_POST['apelidoNovo'];
    $nomecNovo=$_POST['nomeCientificoUp'];
    $resp=false;

    $res = $conn->query("SELECT Apelido, Nome_Cientifico FROM nomenclatura");

    foreach ($res as $item) {
        foreach ($item as $i) {
        if ($aplAntigo === $i) {
            try {
                $conn->query("UPDATE nomenclatura SET Apelido='$aplNovo', Nome_Cientifico='$nomecNovo' WHERE Apelido = '$aplAntigo'");
                $_POST['apelidoAntigo'] =   $aplNovo=$_POST['apelidoNovo'] = $nomecNovo=$_POST['nomeCientificoUp'] = "";
                break;
            }
            catch (Exception $a)
            {
               $resp = "false";
            }
        }
    }
}

   ?>

<script>
    let r = "<?=$resp ?>";
    console.log(r)
    function Sucess() {
        alert("Atualizado com sucesso 🦦🦦🦦");
        window.location.href = "../index.php";
    }
    function Fail() {
        alert("❌❌❌O apelido digitado não existe❌❌❌");
        window.location.href = "../index.php";
    }

    r === "false" ? setTimeout(Fail, 100) : setTimeout(Sucess, 100);

</script>