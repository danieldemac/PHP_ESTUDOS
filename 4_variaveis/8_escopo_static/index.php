<?php

function teste(){
$a = 0;
echo "$a <br>";
$a++;
echo "$a <br>";
}
teste();
teste();
teste();

function testeStatic(){
    static $a = 0;
    echo "$a <br>";
    $a++;
    echo "$a <br>";
    }
testeStatic();
testeStatic();
testeStatic();