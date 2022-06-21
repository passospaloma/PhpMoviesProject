<?php

session_start();
session_destroy();
unset($_SESSION['userLogged']);
header('location: ../index.php');
exit;
