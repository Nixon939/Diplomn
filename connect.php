<?php 

$con=mysqli_connect('localhost','v950836q_vegebot','123nM321','v950836q_vegebot');
if($con){
 
}else{
    die(mysqli_error($con));
    echo(mysqli_error($con));
}

?>