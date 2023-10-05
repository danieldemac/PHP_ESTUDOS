<?php

class Carro {
    public $rodas = 4;
    public $modelos = ["Ferrari", "BMW", "Volvo"];
    public $velocidade_maxima = 200;

    function setVelocidadeMaxima($velocidade_maxima) {
        $this->velocidade_maxima = $velocidade_maxima;
    }

    function getVelocidadeMaxima() {
        return $this->velocidade_maxima;
    }
}

$carro = new Carro;
echo $carro->rodas;
echo "<br>";
print_r($carro->modelos);
echo "<br>";
$carro->setVelocidadeMaxima(300);
echo $carro->getVelocidadeMaxima();