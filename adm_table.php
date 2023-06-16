<?php
require 'connection.php';
if(isset($_POST["submit"])){
    $vegetable = $_POST["vegetable"];
    $vegetable = $_POST["sort"];
    if($_FILES["image"]["error"]=== 4){
        echo
        "<script>alert('Image does not exist');</script>";

    }
    else{
        $fileName= $_FILES["image"] ["vegetable"] ["sort"];
        $fileSize= $_FILES["image"] ["size"];
        $tmpName=  $_FILES["image"] ["tmp_name"];

        $validimageExtension= ['.jpg,', '.jpeg', '.png'];
        $imageExtension= explode('.',$fileName);
        $imageExtension= strtolower(end($imageExtension));
        if(!in_array($imageExtension,$validimageExtension)){
            echo
            "<script>alert('Invalid image');</script>";
        }
         else if($fileSize> 1000000){
            echo
            "<script>alert('Large image');</script>"
            ;
         }
         else{
            $newImageName= uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/' . $newImageName);
            $query="INSERT INTO vegetablebot VALUES('','$vegetable','$sort','$newImageName')";
            mysql_query($conn,$query);
            echo
            "<script>alert('Succsess');
            document.location.href='data.php';
            </script>"
            ;
         }
    }
}
?>
<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>
<meta charset="utf-8">
<title>DataBase</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Local style sheet relative to workspace folder -->
    <link rel="stylesheet" href="/style140.css">
</body>
<form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
    <label for="vegetable">vegetable: </label>
    <input type="text" name="vegetable" id="vegetable" required value=""> <br>
    <label for="sort">sort: </label>
    <input type="text" name="sort" id="sort" required value=""> <br>
    <label for="sort">image: </label>
    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
    <button type="button" class="btn btn-success">Success</button>
</form>
<br>
<a href="data.php">Data</a>
    </html>
