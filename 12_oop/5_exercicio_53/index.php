<?php


class Cachorro {

    function latir(){
        echo "AU AU<br>";
    }

    function andar(){
        echo "Andei<br>";
    }



}

$kira = new Cachorro;
$luna = new Cachorro;

$kira->andar();
$luna->latir();