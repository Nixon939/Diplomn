<?php
use LDAP\Result;

include ('./connect.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['file'];
    echo $username;
    echo "<br>";
    echo $mobile;
    echo "<br>";
    echo $image;
    print_r ($image);
    echo "<br>";
    $imagefilename=$image['name'];
    print_r($imagefilename);
    echo "<br>";
    $imagefileerror=$image['error'];
    print_r($imagefileerror);
    echo "<br>";
    $imagefiletemp=$image['tmp_name'];
    print_r($imagefiletemp);
    echo "<br>";
    $filename_separate=explode('.',$imagefilename);
    print_r($filename_separate);
    echo "<br>";
    $file_extension=strtolower(end($filename_separate));
    print_r($file_extension);

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='image/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `registration`(name,mobile,image) values('$username','$mobile','$upload_image')";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
  </tr>';
}
echo $row['name'];

    ?>

  </tbody>
</table>
</div>
</body>
</html>