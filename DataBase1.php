<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Vegebot</title>
    <link rel="stylesheet" href="./css/style140.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
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
                    <a href="DataBase.php" class="header__link js-scroll">База Данных</a>
                </li>
                <li class="header__item">
                    <a href="index.php#info" class="header__link js-scroll">Инфо</a>
                    </li>
                    <button class="buttonlogin" id="login-show">
                Авторизация
            </button>
                     
            </ul>
            <div id="login-modal">
                <div class="modal">
                    <div class="top-form">
                        <div class="close-modal">
                            &#10006;
                            <div class="login-form">
                                <h2>Авторизация</h2>
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <input type="password" class="form-control" placeholder="Пароль">
                                    <button type="button" class="submit-btn">Войти</button>
                                    <div class="signup" id="signup">
                                        Нет аккаунта?<a href="#">Создать</a>
                                    </div>
                                </form>
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
    </section>
    <section class="third_layer" id="DataBase">
        <div class="fourth_wrapper">
            <h3 class="third_title">
                БАЗА ДАННЫХ
            </h3>
             <div class="table">
             <table class="table">
             <table width="100%" cellspacing="10%" border="1"
             bottom="120px">
             <tr>
                <th>Название</th>
                <th>Сорт</th>
                <th>Сезон</th>
            </tr>
             <?php
                $login_bd = "v950836q_vegebot";
                $pass = "123nM321";
                $bd_name = "v950836q_vegebot";
                $mysql = new mysqli("localhost", $login_bd, $pass, $bd_name);
                $mysql->query("SET NAMES 'utf8'");
                if($mysql->connect_error){
                    echo 'Error Number: '.$mysql->connect_error.'<br>';
                    echo 'Error: '.$mysql->connect_error;
                }
                $result = $mysql->query("SELECT * FROM `vegebot`
                INNER JOIN `sort` ON vegebot.id_sort = sort.sort_id
                INNER JOIN `Vegetables` ON vegebot.id_vegetable = Vegetables.veg_id");
                CreateTable($result);
                $mysql->close();
            ?>
        </table>
</div>
        </div>
    </section>
 </main>
 <script src="main.js"></script>
</body>
</html>
<?php
    function CreateTable($result){
        for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row) ;
        $result='';
        foreach($data as $elem) {
            $result.='<tr>';
            $result.='<td>'.$elem['Vegetables'].'</td>';            
            $result.='<td>'.$elem['sort'].'</td>';
            $result.="<td>".$elem['grow_period']."</td>";
            $result.='</tr>';
        }
        echo $result;
    }
    
?>
<?php
    if(isset($_POST["delete"]))
    {
        $mysql = new mysqli("localhost", $login_bd, $pass, $bd_name);
        if($mysql->connect_error){
            die("Ошибка: " . $mysql->connect_error);
        }
        $id = $mysql->real_escape_string($_POST["id"]);
        $sql = "DELETE FROM vegebot WHERE id_vegebot = '$id'";
        $mysql->query($sql);
        $mysql->close();  
    }
?>
