<?php

$a = 3;
$b = 4;
$c = 7;
$d = "7";

if(($a + $b) != $c){
echo "$a + $b é diferente de $c <br>";
}else{
    echo "$a + $b é igual a $c <br>";  
}

if($b != $c){
    echo "$b é diferente de $c <br>";
    }else{
        echo "$b é igual a $c <br>";  
    }

if($c != $d){
    echo "$c é diferente de $d <br>";
    }else{
        echo "$c é igual a $d <br>";  
    }
    if(is_integer($c)){
        echo "$c é número <br>";
    }
    if(is_integer($d)){
        echo "$d é número <br>";
    }
    if(is_string($c)){
        echo "$c é String <br>";
    }
    if(is_string($d)){
        echo "$d é String <br>";
    }
    if(is_integer($c) == true && is_string($d) == true){
        echo "A igualdade nesse caso aconteceu pois usamos == e não === <br>";
        echo "Mesmo $c sendo número e $d sendo string!";
    }
    if(is_integer($d) == true && is_string($c) == true){
        echo "A igualdade nesse caso aconteceu pois usamos == e não === <br>";
        echo "Mesmo $d sendo número e $c sendo string!";
    }