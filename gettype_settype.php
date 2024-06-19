<?php

$a=12;
echo "12 is : ".gettype($a);
echo "<br>";


$b="10";
echo "10 is : ".gettype($b);
echo "<br>";
settype($b,"boolean");
echo "Now 10 is : ".gettype($b);
?>
