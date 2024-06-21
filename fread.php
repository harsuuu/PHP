<?php

$fptr = fopen("file.txt","r");
$content=fread($fptr,filesize("file.txt"));

echo $content;

fclose($fptr);
?>