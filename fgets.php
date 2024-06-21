<?php

$fptr = fopen("file.txt","r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

while($a = fgets($fptr)){
    echo $a;
}

?>