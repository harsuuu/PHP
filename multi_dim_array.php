<?php

    echo "2d array <br>";

    $multi = array(
        array(1,2,3,4),
        array(5,6,7,8),
        array(9,10,11,12)
    );
    //echo var_dump($multi);
    //echo $multi[0][0];

    //printing the array 
    for($i=0;$i<count($multi);$i++)
    {
        for($j=0;$j<count($multi[$i]);$j++)
        {
            echo $multi[$i][$j];
            echo "  ";
        }
        echo "<br>";
    }
?>