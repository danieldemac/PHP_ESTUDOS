<?php

$a = 10;

while($a > 0){
    echo "Executando o loop $a <br>";
    
    if($a == 5 || $a == 7){
        echo "Pulou <br>";
        $a--;
        continue;

    }
    
    $a--;
}
