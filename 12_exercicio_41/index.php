<?php

$str = "este item está em promoção";
$str2 = "a promoção vai ser amanhã";
$str3 = "essa semana vai ter promoção nas casas bahia";

function promocao($frase){
    $array = explode(" ", $frase);

    for($i = 0; $i < count($array);$i++ ){
        if($array[$i] == "promoção"){
            $array[$i] = strtoupper($array[$i]);
            echo $array[$i]." ";
        }else{
          echo $array[$i]." ";  
        }
          
    }


    /*$promo = "promoção";
    $PROMO = strtoupper($promo);
    $frase = str_replace("promoção", $PROMO, $frase);
    return $frase;*/
}

echo promocao($str."<br>");
echo promocao($str2."<br>");
echo promocao($str3."<br>");