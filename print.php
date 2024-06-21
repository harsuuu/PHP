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


$sql = "SELECT * FROM `Employee`";
$result=mysqli_query($conn,$sql);


$num = mysqli_num_rows($result);

echo "Number of record is :  $num";


if($num>0)
{
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['sno'] . " Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br>";
    }
}
?>