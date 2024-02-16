<?php session_start(); error_reporting(E_ALL ^ E_WARNING);?>



<header>
    <div class="box-header">
        <?php if ($_SESSION['User'] === null) echo "<p>Nenhum usuario logado</p>";
        else echo "<p> <img src='/db_testes/assets/icons/user.svg' alt=''> " . $_SESSION['User'] . "</p>";
        echo "<br>";
        if ($_SESSION['User'] !== null) echo "<p> <img src='/db_testes/assets/icons/roleIcon.svg' alt=''>" .
            $_SESSION['Permissao']
            . "</p>";
        ?>
    </div>

    <nav class="navbar">

        <?php
        if ($_SESSION['User'] === null) {
            echo "<a href='login'><img src='/db_testes/assets/icons/adicionar-usuario.svg' alt=''> Entrar</a>";
        } else {
            echo "<a href='CRUD/Logout.php'><img src='/db_testes/assets/icons/saida.svg' alt=''> Sair</a>";
        }
        ?>

        <a href="/db_testes/home"> <img src='/db_testes/assets/icons/casa.svg' alt=''> Index</a>


    </nav>
</header>








