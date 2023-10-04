<?php

$str = "O rato roeu a roupa do rei de roma";
$count = 0;

for($i = 0; $i < strlen($str); $i++){

    if($str[$i] == 'a' || $str[$i] == "A"){
        $count++;
    }


}

echo "A frase '$str' tem exatamente $count letras 'A'.";