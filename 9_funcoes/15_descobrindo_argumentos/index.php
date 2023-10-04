<?php

function soma($a, $b){
    
    print_r(func_get_args()) . "<br>";
    echo func_num_args() . "<br>";
    return $a + $b;
}

soma(2 , 4);