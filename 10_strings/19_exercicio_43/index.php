<?php

$str = "carro - navio - helicóptero - barco - jangada";
echo $str;
echo "<br>";
$arrayStr = explode("-", $str);
$explica = "A array ficou: ";
echo $explica;
print_r($arrayStr);
echo "<br>";
for($i = 0; $i < count($arrayStr);$i++){

    $j = $i+1;
    echo "O item numero $j é: $arrayStr[$i]";
    echo "<br>";
    


}