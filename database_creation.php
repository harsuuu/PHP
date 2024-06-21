<?php

$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password);

echo "Connection is successfully<br>";


$sql = "CREATE DATABASE harsh";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo "Database is created successfully<br>";
}
else{
    echo "Not created successfully beacause ".mysqli_error($conn);
}

?>