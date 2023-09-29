<?php

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$j = 0;

while($j < 10){
    
   
    if($array[$j] == 30 || $array[$j] == 40){
        echo "PULOU <br>";
        $j++;
        continue;
        

    }
    echo $array[$j] . "<br>";
    $j++;

}