<?php

function supermercado($lista){
    $completo = ""; 

    for($i = 0; $i < count($lista); $i++){

        if($i + 1 == count($lista)){
            $completo .= $lista[$i] . "."; 
        }else{
            $completo .= $lista[$i] . ", ";  
        }
       

    }

    $completo = rtrim($completo, ',');

    return $completo;
}
$teste = ["Arroz", "Feijão", "Carne", "Biscoito", "Bolacha", "4 Ovos"];
echo supermercado($teste);