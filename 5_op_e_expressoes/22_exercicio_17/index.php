<?php

echo "Vamos verificar se 15>5 AND 'João' é idêntico a 'João': <br>";

if(15 > 5 && "João" === "João"){
    echo "SIM! <br>";
}else{
    echo "NÂO! <br>";
}

echo "Vamos verificar se 2 == 3 AND 5 >= 3: <br>";

if(2 == 3 && 5 >= 3){
    echo "SIM! <br>";
}else{
    echo "NÂO! <br>";
}

echo "Vamos verificar se 'teste'>5 AND 1: <br>";
$a = "!";

if($a > 5 && 1){
    echo "SIM!";
}else{
    echo "NON";
}