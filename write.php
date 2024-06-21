<?php

$fptr = fopen("file2.txt","w");
fwrite($fptr,"Hye Graphian\n");
fwrite($fptr,"Fuck you\n");
fclose($fptr);
?>