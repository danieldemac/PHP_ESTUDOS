<?php

$arr = [
    "Porta" => 100,
    "Cafeteira" => 150,
    "Clipe de papel" => 1,
    "Mouse" => 9.90,
    "Cola" => 5,
    "Mesa" => 250
];

function maisQueDez($valores){

    $arrItensCaros = [];

    foreach($valores as $item => $preco){

        if($preco > 10){
          array_push($arrItensCaros, $item);  
        }

    }

    return $arrItensCaros;

}

$novoarr = maisQueDez($arr);

print_r($novoarr);