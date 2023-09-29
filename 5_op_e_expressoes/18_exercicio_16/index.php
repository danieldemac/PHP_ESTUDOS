<?php

$a = 5;
$b = 3;
echo "TESTE DE IGUALDADE == : <br>";
if($a == $b){
    echo "$a é igual a $b <br>";
}else{
    echo "$a não é igual a $b <br>";
}
echo "TESTE DE DIFERENÇA != : <br>";
if($a != $b){
    echo "$a é diferente a $b <br>";
}else{
    echo "$a é igual a $b <br>";
}
echo "TESTE DE IDÊNTICO === : <br>";
if($a === $b){
    echo "$a é idêntico a $b <br>";
}else{
    echo "$a não é idêntico a $b <br>";
}
echo "TESTE DE NÃO IDÊNTICO !== : <br>";
if($a !== $b){
    echo "$a é não idêntico a $b <br>";
}else{
    echo "$a é igual a $b <br>";
}