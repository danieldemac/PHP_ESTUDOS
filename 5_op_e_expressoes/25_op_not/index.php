<?php

if(!(5 > 2)){
    echo "A operação é verdadeira! <br>";
}else{
    echo "A operação é falsa! <br>";
}
if(!(5 > 20)){
    echo "A operação é verdadeira! <br>";
}else{
    echo "A operação é falsa! <br>";
}

$a = 10;
$b = 11;

if(!($a > $b)){
    echo "A operação é verdadeira! <br>";
}else{
    echo "A operação é falsa! <br>";
}

if(!($a < $b)){
    echo "A operação é verdadeira! <br>";
}else{
    echo "A operação é falsa! <br>";
}

if(!($a > $b) && 3 > 1){
    echo "A operação é verdadeira! <br>";
}else{
    echo "A operação é falsa! <br>";
}

if(!($a < $b) && 3 > 1){
    echo "A operação é verdadeira! <br>";
}else{
    echo "A operação é falsa! <br>";
}