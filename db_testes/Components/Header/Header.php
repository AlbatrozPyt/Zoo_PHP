<?php session_start(); error_reporting(E_ALL ^ E_WARNING);?>

<link rel="stylesheet" href="../../styles/Header.css">

<header>
    <div class="box-header">
        <?php if ($_SESSION['User'] === null) echo "<p>Nenhum usuario logado</p>";
        else echo "<p> <img src='../../assets/icons/user.svg' alt=''> " . $_SESSION['User'] . "</p>";
        echo "<br>";
        if ($_SESSION['User'] !== null) echo "<p> <img src='../../assets/icons/roleIcon.svg' alt=''>" . $_SESSION['Permissao']
            . "</p>";
        ?>
    </div>

    <nav class="navbar">

        <?php
        if ($_SESSION['User'] === null) {
            echo "<a href='http://localhost:63342/db_testes/Pages/LoginPage.php'><img src='../../assets/icons/adicionar-usuario.svg' alt=''> Entrar</a>";
        } else {
            echo "<a href='http://localhost:63342/db_testes/CRUD/Logout.php'><img src='../../assets/icons/saida.svg' alt=''> Sair</a>";
        }
        ?>

        <a href="http://localhost:63342/db_testes/index.php"> <img src='../../assets/icons/casa.svg' alt=''> Index</a>


    </nav>
</header>








