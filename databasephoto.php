<?php
require_once('./operation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>База Данных</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
img{
    width:200px;
    height: 200px;
}
    </style>
</head>
<body>
    <h1 class="text-center my-3">Добавление культур</h1>
    <div class="container d-flex justify-content-center">
        <form action="displaycopy.php" method="post" class="w-50"
        enctype="multipart/form-data">
<?php inputFields("Название культуры","username","","text") ?>
<?php inputFields("Сорт","mobile","","text") ?>
<?php inputFields("","file","","file") ?>
    <button class="btn btn-dark" type="submit" name="submit">Подтвердить</button>
</form>
    </div>
</body>
</html>