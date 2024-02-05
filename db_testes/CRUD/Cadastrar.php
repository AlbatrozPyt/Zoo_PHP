<link rel="stylesheet" href="styles/background-alert.css">
<body></body>
<?php
    include  "../Conexao/connect.php";
    global $conn;
    $apl=$_POST['apelido'];
    $nomec=$_POST['nomeCientifico'];
    $id = uniqid();
    $resp = false;

    if ($apl != "" && $nomec != "") {
        try {
            $conn->query("INSERT INTO nomenclatura VALUES('$id', '$apl', '$nomec')");
            $id = $apl = $nomec = "";
        }
        catch (Exception $a)
        {
            $resp = "false";
        }
    } ?>

<script>
    let r = "<?=$resp ?>"

    function Sucess() {
        alert("Cadastrado com sucesso 🦎🦎🦎");
        window.location.href = "../index.php";
    }
    function Fail() {
        alert("Algo de errado 🤦‍♂️🤦‍♂️🤦‍♂️");
        window.location.href = "../index.php";
    }

    r === "false" ? setTimeout(Fail, 100) : setTimeout(Sucess, 100);

</script>


