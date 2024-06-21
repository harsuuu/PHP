<?php

$servername="localhost";
$username="root";
$password="";
$database="harsh";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connection unsuccessful". mysqli_connect_error());
}
echo "Connection is successfully<br>";


$sql = "DELETE FROM `Employee` WHERE `sno`= 2";
$result=mysqli_query($conn,$sql);

if($result){
    echo "Delete successfully";
}
else{
    echo "Not deleted beacause of --> ".mysqli_error($conn);
}
?>