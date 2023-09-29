<?php

if(5 > 10 && 10 > 5){
    echo "5 > 10 e 10 > 5 = TRUE <br>";
}else {
    echo "5 > 10 e 10 > 5 = FALSE <br>"; 
}
$a = 10;
$b = 9;
if($a >= $b && ($b + 1) == $a){
    echo "$a é maior que $b e ($b + 1) = $a <br>";
}

if(($a >= $b && ($b + 1) == $a) && (5 < 10 && 10 > 5)){
    echo "TUDO TRUE!";
}