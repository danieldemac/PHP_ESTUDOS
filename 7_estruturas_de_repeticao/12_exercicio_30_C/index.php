<?php

$array = array();

for($i = 10; $i <= 20; $i++){
if($i % 2){
    echo "$i é impar <br>";
    $array[] = $i;
}



}
print_r($array);