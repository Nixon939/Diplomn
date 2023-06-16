<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style140.css">

</head>
<body>
   <div class="f_wrapper">
<div class="container">
   <div class="content">
      <h3>Привет, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Страница администрации</p>
      <a href="displaycopy.php" class="btn">К базе</a>
      <a href="index.php" class="btn">Выйти</a>
   </div>
</div>
</div>
</body>
</html>