<?php

$a=10;
$b=null;

echo isset($a) ? 'true' : 'false';
echo"<br>";
echo isset($b) ? 'true' : 'false';
echo"<br>";

unset($a);

echo isset($a) ? 'true' : 'false';

?>