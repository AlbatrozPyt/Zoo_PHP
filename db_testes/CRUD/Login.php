<?php
    include "../Conexao/connect.php";
    global $conn;
    session_start();

    $email=$_POST['Email'];
    $senha=$_POST['Senha'];

    $query = "SELECT * FROM usuario WHERE Email = '$email' && Senha = '$senha'";

    $res = $conn->query($query);

   if ($res->num_rows === 0 ) {
       $resp = "false";
       echo "<script> alert('Email ou Senha incorretos!!!') </script>";
       }
   else {
       $resp = "true";
       $_SESSION['User'] = $email;
       while ($row = $res->fetch_assoc()) $_SESSION['Permissao'] = $row['TipoUsuario'];
   }

   if ($resp === 'false') {
       header("Location: ../Pages/LoginPage.php");
   } else {
        header("Location: ../index.php");
   }


