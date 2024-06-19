<?php

$a=[43,2,5,57,1,56,6,3];

//for asscending order sort
//asort($a);
//for desecending order sort 
arsort($a);
foreach($a as $val)
{
    echo $val;
    echo "<br>";
}

?>