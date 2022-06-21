<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Movies 2030</title>
   <link rel="stylesheet" href="./css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>
   <div class="container-full flex-s">
      <div class="poster flex flex-ai-c flex-jc-c background">
         <h1 class="hide-for-desktop title">Movies 2030</h1>
      </div>

      <div class="login-register container">
         <div class="logo hide-for-mobile">
            <h1 class="title">Movies 2030</h1>
         </div>

         <?php if (isset($_GET['status'])) : ?>
            <p class='msg-error'><?php echo $_GET['status']; ?></p>
         <?php endif; ?>

         <div class="switch flex flex-jc-c flex-ai-c on">
            <p id="s_login" class="on">Login</p>
            <p id="s_register">Register</p>
         </div>


         <div class="login flex-c flex-ai-c flex-jc-c fade-in">
            <form action="./php/checkLogin.php" method="post" class="flex-c flex-ai-c flex-jc-c">
               <input type="text" placeholder="Login" class="input" name="login">
               <input type="password" placeholder="Password" class="input" name="password">
               <button type="submit" class="btn">Send</button>
            </form>
         </div>

         <div class="register flex-c flex-ai-c flex-jc-c fade-out">
            <form action="./php/addUser.php" method="post" class="flex-c flex-ai-c flex-jc-c">
               <input type="text" placeholder="Name" class="input" name="name">
               <input type="text" placeholder="E-mail" class="input" name="email">
               <input type="text" placeholder="Login" class="input" name="login">
               <input type="password" placeholder="Password" class="input" name="password">
               <button type="submit" class="btn">Send</button>
            </form>
         </div>
      </div>
   </div>


   <script src="./js/script.js"></script>
</body>

</html>