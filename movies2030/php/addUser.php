<?php
require 'functions.php';

$name = $_POST['name'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

addUser($name, $email, $login, $password);

header("location: home.php");
die;