<?php
$servername ="localhost";
$username ="v950836q_vegebot";
$password="123nM321";
$dbname="v950836q_vegebot";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
die("Connection failed". mysqli_connect_error());

}