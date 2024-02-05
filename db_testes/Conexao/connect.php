<?php

$conn = mysqli_connect('localhost', 'root', '', 'animais');

if ($conn->connect_errno) {
    echo "Erro ao conectar ".$conn->connect_errno;
}