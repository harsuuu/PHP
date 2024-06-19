<?php

$name=array(
    'cat'=>'animal',
    'apple'=>'fruit',
    'bat'=>'cricket'
);

//sorting according to key in ascending order
ksort($name);

//sorting according to key in desecending order
//krsort($name);
foreach($name as $key => $val) {
    echo $key . " => " . $val . "\n";
}

?>