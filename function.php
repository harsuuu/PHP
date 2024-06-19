<?php
    echo "Learn Function";
    echo "<br>";

    function total($arr){
          $sum=0;
          foreach($arr as $value){
            $sum+=$value;
          }

          return $sum;
    }

    $harsh=[10,20,30,40];

    $marks=total($harsh);

    echo "Total marks of Harsh is $marks";
?>
