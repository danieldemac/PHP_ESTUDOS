<?php

$a = 1;
$numUm = 5;
$numDois = 2;
$nomeUm = "Matheus";
$nomeDois = "Pedro";
$numTres = 11;
$numQUatro = 12;


if($numUm > $numDois){
    echo "Proposição $a verdadeira <br>";
    $a++;
}else{
    echo "Proposição $a falsa <br>";
    $a++;
}

if($nomeUm != $nomeDois){
    echo "Proposição $a verdadeira <br>";
    $a++;
}else{
    echo "Proposição $a falsa <br>";
    $a++;
}

if($numQUatro <= $numTres){
    echo "Proposição $a verdadeira <br>";
    $a++;
}else{
    echo "Proposição $a falsa <br>";
    $a++;
}