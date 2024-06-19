<?php

echo "Learning Local and Global variable <br>";

$a=10;

function printVal()
{
    $b=12;
    global $a;
    echo "The value of b is $b <br>";
    echo "The value of a is $a <br>";

}

printVal();

?>