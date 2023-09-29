<?php

echo "Se a proposição for verdadeira entra BLOCO IF se for falsa BLOCO ELSE <br>";
$num = 1;
echo "Proposição $num => 10 + 10 = 20? <br>";
if(10 + 10 == 20){
    echo "BLOCO IF <br>";
    $num++;
}else{
    echo "BLOCO ELSE <br>";
    $num++;
}

echo "Proposição $num => Daniel é igual a DANIEL? <br>";
if("Daniel" == "DANIEL"){
    echo "BLOCO IF <br>";
    $num++;
}else{
    echo "BLOCO ELSE <br>";
    $num++;
}

echo "Proposição $num => 23 > 24? <br>";
if(23 > 24){
    echo "BLOCO IF <br>";
    $num++;
}else{
    echo "BLOCO ELSE <br>";
    $num++;
}

echo "Proposição $num => 1 + 1 = 2 ou 34 / 1 = 35? <br>";
if(1 + 1 == 2 || 34 / 1 == 35){
    echo "BLOCO IF <br>";
    $num++;
}else{
    echo "BLOCO ELSE <br>";
    $num++;
}