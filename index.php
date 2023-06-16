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
                    <a href="#intro" class="header__link js-scroll">Главная</a>
                </li>
                <li class="header__item">
                    <a href="#info" class="header__link js-scroll">Инфо</a>
                    </li>
                  <li class="header__item">
                    <a href="login_form.php" class="header__link js-scroll">Авторизация</a>
                    </li>
                     
            </ul>
            </div>
        </nav>
       </div>
    </div>
 </header>   
 <main class="main">
    <section class="intro" id="intro">
            <p class="intro__subtitle">
                Агропромышленная робототехника — это отрасль робототехники, ориентированная на применение роботов 
в сельском хозяйстве и пищевой промышленности. 
            </p>
            </form>
        </div>
        <div class="container1">
            <a href="display.php">
            <button class="button">
                Перейти
            </button>
        </a>
        </div>
</section>
<section class="second_layer" id="info">
    <div class="second_wrapper">
        <h2 class="second_title">
            ПРОТОТИП
        </h2>
        <p class="second__subtitle">
            Vegebot - это робот-сборщик овощей, созданный учеными из Университета Уорик в Великобритании. 
Он был разработан для автоматического сбора салата в поле.
Vegebot оснащен компьютерным зрением, которое позволяет ему определять, какие растения готовы для сбора. Робот использует изображения, полученные с помощью камеры, для анализа цвета и формы листьев, а затем определяет, нужно ли собирать растение.
Когда Vegebot находит готовые для сбора растения, он использует свои механические руки, чтобы аккуратно обрезать стебли и положить салат в контейнер.
        </p>
    </div>
</section>
    <section class="third_layer">
        <div class="third_wrapper">
            <h3 class="third_title">
                ГАЛЕРЕЯ
            </h3>
                  <div class="video">
                       
                       <div class="videos">
                            <iframe width="800" height="440" src="https://www.youtube.com/embed/EFC3OvkVKaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>
                       </div>
                  </div>
        </div>
    </section>
 </main>
 <script src="main.js"></script>
</body>
</html>
<?php
    session_start();
    $login_bd = "v950836q_vegebot";
    $pass = "123nM321";
    $bd_name = "v950836q_vegebot";

    $mysql = new mysqli("localhost", $login_bd, $pass, $bd_name);
    $mysql->query("SET NAMES 'utf8'");
    if($mysql->connect_error){
        echo 'Error Number: '.$mysql->connect_error.'<br>';
        echo 'Error: '.$mysql->connect_error;
    }

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = ("SELECT * FROM users WHERE login='$login'");
	$result = mysqli_query($mysql, $query);
	$user = mysqli_fetch_assoc($result);

	if (!empty($user)) {
		$hash = $user['password'];
		if (password_verify($password, $hash)) {

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $user['id'];
            $id_user=$_SESSION['id'];
            $_SESSION['login'] = $login;
            $_SESSION['status'] = $user['status'];
            header('Location: index.php');
		} else {
            $_SESSION['msg'] = 'Не верный пароль';
        }
	} else {
        $_SESSION['msg'] = 'Не верный логин';
    }
?>