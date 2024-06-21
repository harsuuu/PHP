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


$sql = "UPDATE `Employee` SET `name`='Pari' WHERE `sno`= 2";
$result=mysqli_query($conn,$sql);

if($result){
    echo "Update successfully";
}
else{
    echo "Not updated beacause of --> ".mysqli_error($conn);
}
?>