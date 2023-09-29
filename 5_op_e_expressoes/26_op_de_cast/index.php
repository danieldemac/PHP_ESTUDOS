<?php

$a = (int) "12";
echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";
if(is_string($a)){
    echo "$a é String! <br>";
}else{
    echo "$a não é String! <br>";
}

if(is_integer($a)){
    echo "$a é Interger! <br>";
}else{
    echo "$a não é Interger! <br>";
}