<?php

$str = "Testando o resto da string, para ver se dá certo";

echo "A frase é: $str";
echo "<br>";
$resto = strstr($str, "resto");
echo $resto."<br>";

$s = "string";
$resto2 = strstr($str, $s);
echo $resto2."<br>";

$resto3 = strstr($str, "Bazinga!");

if(strstr($str, "Bazinga!") === false){
    echo "A palavra Bazinga! não exite no texto<br>";
}else{
    echo $resto3."<br>";
}