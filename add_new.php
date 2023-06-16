<?php
include "db_conn.php";

if(isset($_POST['submit']))  {
    $id= $_POST['id'];
    $vegetable = $_POST['vegetable'];
    $sort = $_POST['sort'];
    $ripeness = $_POST['ripeness'];

    $sql= "INSERT INTO `Agrorobot`(`id`,`vegetable`, `sort`, `ripeness`) 
    VALUES ('$id','$vegetable','$sort','$ripeness')";
    
    $result=mysqli_query($conn,$sql);

    if($result) {
        header("Location: table.php?msg=New record created successfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap -->  
   <!-- <link rel="stylesheet" href="./css/style126.css"> -original css --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>DataBase</title>
</head>
<body>
    <nav class="navbar navbar-light justicify-content-center fs-3 mb-5"
    style="background-color:#000";color="#FFFFF">
        <h1 class="text-center text-light">Панель администратора</h1>
</nav>
<div class="containter6"></div>
     <div class="text-center mb-4">
        <h3>Добавить новую культуру<h3>
            <p class="text-muted">Заполните все формы и убедитесь в целостности данных перед добавлением культуры</p>
</div>
    <div class="container d-flex justicify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row mb-3">
    <div class="col-3">
            <label class="form-label">Введите id</label>
            <input type="text" class="form-control p-2" name="id" placeholder="Введите id..."> 
    </div>
        <div class="col-3">
            <label class="form-label">Название культуры</label>
            <input type="text" class="form-control p-2" name="vegetable" placeholder="Введите название..."> 
    </div>
    <div class="col-3">
            <label class="form-label">Название сорта</label>
            <input type="text" class="form-control p-2" name="sort" placeholder="Введите сорт..."> 
    </div>
    <div class="col-3">
            <label class="form-label">Срок созревания</label>
            <input type="text" class="form-control p-2 " name="ripeness" placeholder="Введите срок..."> 
    </div>
    </form>
    <div>
        <div class="d-grid gap-3 col-4 p-3 mx-auto">
        <button type="submit" class="btn btn-success" name="submit">Сохранить</button>
        <a href="table.php" class="btn btn-danger">Отменить</a>
        </div>
</div>
 <!--Bootstrap-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 
</body>
</html>