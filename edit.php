<?php
include "db_conn.php";

if(isset($_POST['submit']))  {
    $id= $_POST['id'];
    $vegetable = $_POST['vegetable'];
    $sort = $_POST['sort'];
    $ripeness = $_POST['ripeness'];

    $sql= "UPDATE `Agrorobot` SET `id`='$id',`vegetable`='$vegetable',`sort`='$sort',`ripeness`='$ripeness' WHERE id=$id";
    
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
    style="background-color:#000", color="#0000ff">
        DataBase
</nav>
<div class="containter6"></div>
     <div class="text-center mb-4">
        <h3>Изменить культуру<h3>
            <p class="text-muted">Заполните все формы перед обновлением информации о культуре</p>
</div>
<?php
$id= $_GET['id'];
$sql = "SELECT * FROM `Agrorobot` WHERE id = $id LIMIT 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
    <div class="container d-flex justicify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row mb-3">
    <div class="col">
            <label class="form-label">Введите id</label>
            <input type="text" class="form-control" name="id" 
            value="<?php echo $row['id'] ?>"> 
    </div>
        <div class="col">
            <label class="form-label">Название культуры</label>
            <input type="text" class="form-control" name="vegetable"value="<?php echo $row['vegetable'] ?>"> 
    </div>
    <div class="col">
            <label class="form-label">Название сорта</label>
            <input type="text" class="form-control" name="sort" value="<?php echo $row['sort'] ?>"> 
    </div>
    <div class="col">
            <label class="form-label">Срок созревания</label>
            <input type="text" class="form-control" name="ripeness" value="<?php echo $row['ripeness'] ?>"> 
    </div>
     <div class="col">
            <label class="form-label">Изображение</label>

    </div>
    </form>
    <div>
        <button type="submit" class="btn btn-success" name="submit">Сохранить</button>
        <a href="table.php" class="btn btn-danger">Отменить</a>
</div>
 <!--Bootstrap-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 
</body>
</html>