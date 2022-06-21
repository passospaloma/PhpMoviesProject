<?php
session_start();

$userLogged = $_SESSION['userLogged'];
$idUser = $userLogged['id_user'];
$login = $userLogged['login'];

if (!isset($userLogged)) {
   header('location: ../index.php?status=Now+You+Can+Login');
   exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Movies2030</title>
   <link rel="stylesheet" href="../css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>
   <header class="header">
      <div class="overlay"></div>
      <nav class="container flex flex-jc-sb flex-ai-c">
         <a href="./home.php" class="header__logo">
            <h1>Movies2030</h1>
         </a>

         <a id="btnHamburguer" href="#" class="header__toggle hide-for-desktop">
            <span></span>
            <span></span>
            <span></span>
         </a>

         <div class="header__links hide-for-mobile">
            <ul class="flex flex-jc-c flex-ai-c">
               <li><a href="./home.php">Home</a></li>
               <li><a href="./movies.php">Movies</a></li>
               <li><a href="./profile.php">User Profile</a></li>
               <li><a href="./documentation.php">Documentation</a></li>

            </ul>
         </div>

         <form action="./search.php" method="POST" class="header__search hide-for-mobile">
            <input type="text" placeholder="Search here..." class="input" name="movie">
            <button type="submit"><i class="fas fa-search"></i></button>
         </form>
      </nav>

      <div class="header__menu hide-for-desktop">
         <a href="./home.php">Home</a><a href="./movies.php">Movies</a><a href="./profile.php">Profile</a>
         <form action="./search.php" method="POST" class="header__search">
            <input type="text" placeholder="Search here..." class="input">
            <button type="submit"><i class="fas fa-search"></i></button>
         </form>
      </div>
   </header>