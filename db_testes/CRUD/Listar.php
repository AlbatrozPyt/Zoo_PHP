<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
    <link rel="stylesheet" href="../styles/Listar.css">
</head>
<body>

    <?php
    include  "Conexao/connect.php";
    global $conn;

    $res = $conn->query("SELECT Apelido, Nome_Cientifico FROM nomenclatura");
    ?>

    <h1>Listar</h1>

    <table>
        <thead>
        <th>Apelido</th>
        <th>Nome Cientifico</th>
        </thead>
        <tbody>
        <?php
        while ($row = $res->fetch_assoc()) {
            echo "<tr></tr><td>" . $row['Apelido'] . "</td><td>" . $row['Nome_Cientifico'] . "</td></tr>";
        } ?>
        </tbody>
    </table>
</body>
</html>
