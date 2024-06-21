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

//create a table 
$sql = "CREATE TABLE `Employee` (
    `sno` INT(5) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `dest` VARCHAR(20) NOT NULL,
    PRIMARY KEY(`sno`)
)";

$result=mysqli_query($conn,$sql);

if($result)
{
    echo "Table is created successfully";
}
else{
    echo "Table is not created beacuse of ".mysqli_error($conn);
}
?>