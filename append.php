<?php

$fptr = fopen("file2.txt","a");

fwrite($fptr,"Appending this\n");

fclose($fptr);
?>