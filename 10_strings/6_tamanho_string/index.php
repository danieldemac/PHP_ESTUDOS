<?php

$str1 = "Esta string é maior";
$str2 = "Essa não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2){
    echo "String 1 é maior que a String 2";
}elseif($len1 == $len2){
    echo "As Strings tem o mesmo tamanho";
}else{
    echo "A String 1 é menor que a String 2";
}