<?php

$str = "este item está em promoção";

function promocao($frase){
    $promo = "promoção";
    $PROMO = strtoupper($promo);
    $frase = str_replace("promoção", $PROMO, $frase);
    return $frase;
}

echo promocao($str);