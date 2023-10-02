<?php

$a = 10;

function testeEscopo(){

$a = 5;
echo "ESCOPO LOCAL DE $a <br>";

}


echo "ESCOPO GLOBAL DE $a <br>";
testeEscopo();