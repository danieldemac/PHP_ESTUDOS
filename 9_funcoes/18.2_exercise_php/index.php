<?php

function sumDigits($numero){
$soma = 0;

$numeroString = (string)$numero;

for($i = 0; $i < strlen($numeroString); $i++){
    $digito = intval($numeroString[$i]);
   $soma += $digito;
}
return $soma;
}
$teste = 12345;
$result = sumDigits($teste);
echo "A soma dos digitos de $teste é $result";


