<?php
session_start();
echo  "logout";
session_destroy();

header("Location: /db_testes/login");