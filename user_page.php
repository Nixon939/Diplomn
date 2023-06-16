<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style140.css">

</head>
<body>
   <div class="w_wrapper">
<div class="container">
   <div class="modale">
<div class="content">
      <h3>Привет, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Страница для пользователя</p>
      <a href="display.php" class="btn">К базе</a>
      <a href="index.php" class="btn">Выйти</a>
   </div>
   </div>
   </div>
</div>

</body>
</html>