<?php

function arrNum($recebe){
    $array2 = array();
  
    for ($i = 0; $i < count($recebe); $i++) {
        if ($recebe[$i] > 7) {
            $array2[] = $recebe[$i];
        }
    }
    
    print_r($array2);
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
arrNum($array);