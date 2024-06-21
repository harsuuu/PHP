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


$sql = "INSERT INTO `Employee`(`name`,`dest`) VALUES ('Madhav','Bilari')";


$result=mysqli_query($conn,$sql);

if($result)
{
    echo "Table is inserted successfully";
}
else{
    echo "Table is not inserted beacuse of ".mysqli_error($conn);
}
?>