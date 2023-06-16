<?php

include "connect.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `registration` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Yes!";
         header("Location:displaycopy.php?msg=Record deleted successfuly");
    }else{
        die(mysqli_error($con));
    }
}
?>