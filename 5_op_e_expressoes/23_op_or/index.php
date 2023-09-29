<?php
$a = 5;
$b = 2;
$c = "teste";
$d = "tes";
$e = "te";
$f = $d . $e;
echo "A variável $f é idêntica a $c ou $b é maior que $a?";
echo " <br>";
if($f === $c || $b > $a){
    echo "Sim! <br>";
}else{
    echo "Não! <br>";
}

echo "A variável $a é idêntica a $c ou $b é maior que $a + 50?";
echo " <br>";
if($a === $c || $b > $a+50){
    echo "Sim! <br>";
}else{
    echo "Não! <br>";
}

echo "A variável $d é idêntica a $c ou $e é maior que $f?";
echo " <br>";
if($d === $c || $e > $f){
    echo "Sim! <br>";
}else{
    echo "Não! <br>";
}

echo "A variável $a é maior que $b e $a + $b = 7 ou $c é igual a $d?";
echo " <br>";
if(($a > $b && ($a + $b) == 7)|| $c == $d){
    echo "Sim! <br>";
}else{
    echo "Não! <br>";
}