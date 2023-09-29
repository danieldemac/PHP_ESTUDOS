<?php

$varUm = "Daniel";
$varDois = "Cabral";
$varTres = 52;
$varQuatro = 8;
$dois = 2;
if(is_integer($varUm)){
    $conta = $varUm * $dois;
    if($conta > 100){
        echo "A conta $varUm * $dois é maior que 100 <br>";
    }else{
        echo "A conta $varUm * $dois é menor que 100 <br>";
    }
    }else{
    echo "A variável $varUm não é número! <br>";
    }
if(is_integer($varDois)){
    $conta = $varUm * $dois;
    if($conta > 100){
        echo "A conta $varDois * $dois é maior que 100 <br>";
    }else{
        echo "A conta $varDois * $dois é menor que 100 <br>";
    }
    }else{
    echo "A variável $varDois não é número! <br>";
    }
if(is_integer($varTres)){
    $contaUm = $varTres * $dois;
    if($contaUm > 100){
        echo "A conta $varTres * $dois é maior que 100 <br>";
        
    }else{
        echo "A conta $varTres * $dois é menor que 100 <br>";
    }
    }else{
    echo "A variável $varTres não é número! <br>";
    }
if(is_integer($varQuatro)){
    $contaDois = $varQuatro * $dois;
    if($contaDois > 100){
        echo "A conta $varQuatro * $dois é maior que 100 <br>";
    }else{
        echo "A conta $varQuatro * $dois é menor que 100 <br>";
        
    }
    }else{
    echo "A variável $varQuatro não é número! <br>";
    }
    
    
