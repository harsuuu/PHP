<?php

//explode
// $a="apple,bnana,mango";
// $b=explode(",",$a);

// print_r($b);

//implode
// $a=["apple,bnana,mango"];
// $b=implode(",",$a);
// echo $b;


//compact()
// $first="harsh";
// $last="joshi";
// $result=compact("first","last");
// print_r($result);

//extract
$a = [
    "first" => "harsh",
    "last" => "joshi"
];
extract($a);

echo $first; 
echo "<br>";
echo $last;  


?>