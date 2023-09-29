<?php
$num = 0;
$x = 0;
$array = [1, 2, 3, 4, "A", "B", "C", 5, 6, 7, "D"];

while($x <= 10){
if(is_string($array[$num])){
    echo "A informação $num da Array é uma STRING. A informação contida é "; echo $array[$num]; echo "<br>";
    }
    $x++;
    $num++;
}