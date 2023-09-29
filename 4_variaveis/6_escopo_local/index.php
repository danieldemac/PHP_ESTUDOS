<?php

$x = 10;
echo "$x global <br>";

function teste(){

    $x = 5;
    echo "$x local <br>";

}
teste();

function teste2(){

    $x = 15;
    echo "$x local 2 <br>";
}
teste2();

