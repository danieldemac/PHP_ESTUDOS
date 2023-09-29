<?php
$c = 7;
$d = "7";


if($c !== $d){
    echo "$c é não idêntico de $d <br>";
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
        echo "A Desigualdade nesse caso aconteceu pois usamos !== e não != <br>";
        echo "Pois $c é número e $d string!";
    }
    if(is_integer($d) == true && is_string($c) == true){
        echo "A Desigualdade nesse caso aconteceu pois usamos !== e não != <br>";
        echo "Pois $d é número e $c string!";
    }