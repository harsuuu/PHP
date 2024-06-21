<?php

setcookie("category","books",time()+86400, "/");

echo "Cokkie has set";


$cat = $_COOKIE['category'];
echo "Category is $cat";
?>
