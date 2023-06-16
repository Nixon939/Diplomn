<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `Agrorobot` WHERE id = $id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:table.php?msg=Record deleted successfuly");
}
else{
    echo "Failed: " .mysqli_error($conn); 
}
?>