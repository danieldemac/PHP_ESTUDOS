<?php

$array = array(); // Inicialize o array antes de usá-lo

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i <br>";
        $array[] = $i; // Adicione o número par ao array
    }
}

print_r($array); // Imprima o array resultante