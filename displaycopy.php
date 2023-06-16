<?php
use LDAP\Result;

include ('./connect.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['file'];
   //echo $username;
    //echo "<br>";
    //echo $mobile;
    //echo "<br>";
    //echo $image;
    $imagefilename=$image['name'];
    //echo "<br>";
    $imagefileerror=$image['error'];
    //echo "<br>";
    $imagefiletemp=$image['tmp_name'];
    //echo "<br>";
    $filename_separate=explode('.',$imagefilename);
    //echo "<br>";
    $file_extension=strtolower(end($filename_separate));

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='image/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `registration`(id,name,mobile,image) values('$id','$username','$mobile','$upload_image')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
           Data inserted successfuly!
          </div>';
        }else{
            echo "Data not inserted";
            die(mysqli_error($con));
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>База Данных</title>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-4 d-flex justify-content-center ">
        <form action="databasephoto.php" method="post" class="w-50"
        enctype="multipart/form-data">
    <button class="btn btn-dark" type="submit" name="submit">Добавить</button>
</form>
   <form action="admin_page.php" method="post" class="w-20"
        enctype="multipart/form-data">
    <button class="btn btn-warning" type="submit" name="submit">Вернуться</button>
</form>
    </div>
<style>
img{
    width:200px;
    height: 200px;
}
    </style>
    <h1 class="text-center my-4">База Данных</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
  <thead>
    <tr>
      <th scope="col">Номер</th>
      <th scope="col">Название культуры</th>
      <th scope="col">Сорт</th>
      <th scope="col">Изображение</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="select * from `registration`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $mobile=$row['mobile'];
    $image=$row['image'];
    echo '<tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$mobile.'</td>
    <td><img src='.$image.' /></td>
    <td>
     <button class="btn btn-danger"><a href="deleted.php?
     deleteid='.$id.' " class="text-light">Удалить</a></button>
    </td>
    
  </tr>';
}
echo $row['name'];
    ?>
    

  </tbody>
</table>
</div>
</body>
</html>