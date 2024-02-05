<?php
session_start();
echo  "logout";
session_destroy();

header("Location: ../Pages/LoginPage.php");