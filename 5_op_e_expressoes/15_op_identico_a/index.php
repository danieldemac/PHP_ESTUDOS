<?php

$a = 12;
$b = "12";
$c = "Daniel";
$d = "DANIEL";

if($a == $b){
    echo "$a é igual a $b <br>";
}else{
    echo "$a não é igual a $b <br>";
}
if($a === $b){
    echo "$a é idêntico a $b <br>";
}else{
    echo "$a não é idêntico a $b <br>";
    if(is_integer($a)){
        echo "$a é número <br>";
    }
    if(is_string($a)){
        echo "$a é String! <br>";
    }
    if(is_integer($b)){
        echo "$b é número <br>";
    }
    if(is_string($b)){
        echo "$b é String! <br>";
    }
    
}
if($c == $d){
    echo "$c é igual a $d <br>";
}else{
    echo "$c não é igual a $d <br>";
}
if($c === $d){
    echo "$c é idêntico a $d <br>";
}else{
    echo "$c não é idêntico a $d <br>";
    if(is_integer($c)){
        echo "$c é número <br>";
    }
    if(is_string($c)){
        echo "$c é String! <br>";
    }
    if(is_integer($d)){
        echo "$d é número <br>";
    }
    if(is_string($d)){
        echo "$d é String! <br>";
    }
    
}
