<?php

$fptr = fopen("file.txt","r");
// echo fgetc($fptr);
//Question : Read the file until you did not reach (.)
while($a=fgetc($fptr))
{
    echo $a;
    if($a==".")
    {
        break;
    }
}
?>