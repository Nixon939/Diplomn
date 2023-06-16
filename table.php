<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!--Bootstrap -->  
   <!-- <link rel="stylesheet" href="./css/style127.css"> -original css --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>DataBase</title>
</head>
<body>
    <body style='font-size: 18px;
    background-color: #EAEFF8;'>
     <link rel="stylesheet" href="./css/style140.css">
      <header class="header">
    <div class="header__logo">
        <a href="/" class="header__logo-linl">
            <img src="./img/svg/logo.svg" alt="Vegebot" class="header__logo-pic">
        </a>
    </div>
    <div class="wrapper">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item">
                    <a href="index.php#intro" class="header__link js-scroll">Главная</a>
                </li>
                <li class="header__item">
                    <a href="table.php" class="header__link js-scroll">База Данных</a>
                </li>
                <li class="header__item">
                    <a href="index.php#info" class="header__link js-scroll">Инфо</a>
                    </li>
                     <li class="header__item">
                    <a href="login_form.php" class="header__link js-scroll">Авторизация</a>
                    </li>
                     
            </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function(){
                            $('#login-show').click(function(){
                                $('#login-modal').fadeIn().css("display","flex");
                            });
                            
                              $(function(){
                            $('.submit-btn').click(function(){
                                $('#login-modal').fadeOut();
                            });
                        });
                        });
                    </script>
                </div>
            </div>
        </nav>
       </div>
    </div>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="col-sm-12">
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="add_new.php" class="btn btn-dark mb-3">Добавить</a>
    </div>
    <table class="table table-hover text-center">
  <thead class="table-dark" >
    <tr>
      <th scope="col">id</th>
      <th scope="col">Название культуры</th>
      <th scope="col">Сорт</th>
      <th scope="col">Срок созревания</th>
       <th scope="col">Изображение</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "db_conn.php";
    $sql = "SELECT * FROM `Agrorobot`";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
         <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['vegetable'] ?></td>
      <td><?php echo $row['sort'] ?></td>
      <td><?php echo $row['ripeness'] ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
      <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
      </td>
    </tr>
        <?php
        
    }
    ?>
  </tbody>
</table>
</div>
</div>
 <!--Bootstrap-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>