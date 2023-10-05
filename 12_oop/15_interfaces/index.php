<?php

interface Caracteristicas{

    const nome = "Daniel";

    public function falar();
}

class Humano implements Caracteristicas{
    public $idade = 33;

    public function falar()
    {
        echo "Oi abigo!<br>";
    }
    public function dizerNome(){
        echo "Meu nome é ". self::nome."<br>";
    }
}
$daniel = new Humano;
$daniel->falar();
$daniel->dizerNome();