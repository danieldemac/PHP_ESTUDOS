<?php

use Car as GlobalCar;

class Car{

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca)
    {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Car(4, "Vermelha", "Ferrari");
$bmw = new Car(2, "Azul", "BMW");
echo "O carro é da marca $ferrari->marca. Tem a cor $ferrari->cor e $ferrari->portas portas!<br>";
echo "O carro é da marca $bmw->marca. Tem a cor $bmw->cor e $bmw->portas portas!<br>";