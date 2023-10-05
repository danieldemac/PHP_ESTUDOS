<?php

class Pessoa {

    function falar(){
        echo "Olá eu sou um OBJETO! <br>";
    }
}

$daniel = new Pessoa;

$daniel->falar();