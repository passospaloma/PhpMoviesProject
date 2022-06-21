<?php

require 'functions.php';

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

if ($userLogged = listUser($login, $password)) {
  $_SESSION['userLogged'] = $userLogged;
  header('Location: ./home.php');
  exit;
} else {
  header('Location: ../index.php?status=fail');
  exit;
}
