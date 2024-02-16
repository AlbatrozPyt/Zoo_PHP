<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/db_testes/Pages/styles/LoginPage.css">
    <link rel="stylesheet" href="/db_testes/styles/Header.css">
</head>
<body>
    <?php
        include "../Components/Header.php";
    ?>

    <div class="main-login">

        <form class="login" action="/db_testes/CRUD/Login.php" method="post">
            <h1>Login</h1>

            <label>
                Email:
                <input type="text" name="Email" required>
            </label>

            <br>

            <label>
                Senha:
                <input type="text" name="Senha" required>
            </label>

            <br>

            <button>Logar</button>
        </form>

    </div>

</body>
</html>