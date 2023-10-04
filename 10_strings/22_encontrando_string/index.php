<?php

$str = "Vamos testar o método strpos, com strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar;
echo "<br>";


$testeEncontrar2 = strpos($str, "Java");

if ($testeEncontrar2 === false){
    
echo "Palavra não encontrada";
echo "<br>";
}
$palavra = "com";
$testeEncontrar3 = strpos($str, $palavra);
echo $testeEncontrar3;
echo "<br>";

$palavra2 = "to";
$testeEncontrar4 = strpos($str, $palavra2);
echo $testeEncontrar4;
echo "<br>";
