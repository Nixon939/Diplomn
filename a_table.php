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
    background-color: #000;'>
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
    <title>DataBase</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="cont">
<h1 class="text-light text-center">
    Добавление данных</h1>
    <div class="text-light col-lg-8 m-auto d-block">
    <form action="uload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="vegetable">Название культуры: </label>
        <input type="text" name="vegetable" id="vegetable" class="form-control">
            </div>
</div>
<div class=" text-light col-lg-8 m-auto d-block">
        <label for="sort">Название сорта: </label>
        <input type="text" name="sort" id="sort" class="form-control">
            </div>
            <div class="text-light col-lg-8 m-auto d-block">
        <label for="ripeness">Срок созревания: </label>
        <input type="text" name="ripeness" id="ripeness" class="form-control">
            </div>
            <div class=" text-light col-lg-8 m-auto d-block">
        <label for="file">Изображение: </label>
        <input type="file" name="image" id="image" class="form-control">
            </div>
            <input type="submit" name="submit" value="Добавить" class="btn btn-success">
        </form>
        </div>
 <!--Bootstrap-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>