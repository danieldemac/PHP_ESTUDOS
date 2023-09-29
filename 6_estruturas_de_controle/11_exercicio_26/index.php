<?php
$num = 1;
$velCarro = 100;
$velCarrodois = 40;
$velCarroTres = 20;
echo "A VELOCIDADE DO CARRO $num FOI $velCarro <br>";

if($velCarro < 40){
    echo "VELOCIDADE CORRETA! <br>";
    $num++;
}else if($velCarro == 40){
    echo "CUIDADO! VELOCIDADE LIMITE! <br>";
    $num++;
}else{
    echo "TOMOU MULTA! VELOCIDADE ACIMA DE 40! $velCarro km/h <br>";
    $num++;
}

echo "A VELOCIDADE DO CARRO $num FOI $velCarrodois <br>";
if($velCarrodois < 40){
    echo "VELOCIDADE CORRETA! <br>";
    $num++;
}else if($velCarrodois == 40){
    echo "CUIDADO! VELOCIDADE LIMITE! <br>";
    $num++;
}else{
    echo "TOMOU MULTA! VELOCIDADE ACIMA DE 40! $velCarrodois km/h <br>";
    $num++;
}
echo "A VELOCIDADE DO CARRO $num FOI $velCarroTres <br>";
if($velCarroTres < 40){
    echo "VELOCIDADE CORRETA! <br>";
    $num++;
}else if($velCarroTres == 40){
    echo "CUIDADO! VELOCIDADE LIMITE! <br>";
    $num++;
}else{
    echo "TOMOU MULTA! VELOCIDADE ACIMA DE 40! $velCarroTres km/h <br>";
    $num++;
}