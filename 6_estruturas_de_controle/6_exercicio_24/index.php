<?php
$num = 1;
$varUm = "string";
$varDois = 12;
$varTres = true;
echo "Exercício A - VARIÁVEL É INT? <br>";
if(is_integer($varUm)){
    echo "A VARIÁVEL $num É UM INT <br>";
    $num++;
}else{
    echo "A VARIÁVEL $num NÃO É UM INT <br>";
    $num++;  
}

if(is_integer($varDois)){
    echo "A VARIÁVEL $num É UM INT <br>";
    $num++;
}else{
    echo "A VARIÁVEL $num NÃO É UM INT <br>";
    $num++;  
}

if(is_integer($varTres)){
    echo "A VARIÁVEL $num É UM INT <br>";
    $num++;
}else{
    echo "A VARIÁVEL $num NÃO É UM INT <br>";
    $num++;  
}
echo "<br>";
echo "Exercício B - BALANÇA <br>";
$pesoUm = 150;
$pesoDois = 100;
$pesoTres = 79;
$limitePeso = 80;

if($pesoUm > $limitePeso){
    echo "Está pesado demais. O peso foi de $pesoUm kgs e o limite é $limitePeso kgs. <br>";
    
}else{
    echo "Peso dentro do limite. O peso foi de $pesoUm kgs e o limite é $limitePeso kgs. <br>";
     
}

if($pesoDois > $limitePeso){
    echo "Está pesado demais. O peso foi de $pesoDois kgs e o limite é $limitePeso kgs. <br>";
    
}else{
    echo "Peso dentro do limite. O peso foi de $pesoDois kgs e o limite é $limitePeso kgs. <br>";
     
}

if($pesoTres > $limitePeso){
    echo "Está pesado demais. O peso foi de $pesoTres kgs e o limite é $limitePeso kgs. <br>";
    
}else{
    echo "Peso dentro do limite. O peso foi de $pesoTres kgs e o limite é $limitePeso kgs. <br>";
     
}

