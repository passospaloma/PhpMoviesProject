<?php
define("__SERVER__", "localhost");
define("__USER__", "root");
define("__PASS__", "root");
define("__DB__", "movies2030DB");
define("__PORT__", 3306);

function getConnection()
{
  $link = mysqli_connect(__SERVER__, __USER__, __PASS__, __DB__, __PORT__);
  mysqli_set_charset($link, "utf8");
  return $link;
}
