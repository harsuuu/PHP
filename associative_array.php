<?php

echo "Welcome to Assciative array in PHP";
echo "<br>";

//Basic array

// $arr=array('This','That','What','Why');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];


$favcol=array(
    'harsh'=>'pink',
    'adi'=>'black',
    'puma'=>'white'
);
// echo($favcol['harsh']);
// echo "<br>";
// echo($favcol['adi']);
// echo "<br>";
// echo($favcol['puma']);
// echo "<br>";


//accessing using loop

// foreach($favcol as $key => $value)
// {
//     echo "Fav color of $key is $value <br>";
// }
// 

asort($favcol);

print_r($favcol);



?>