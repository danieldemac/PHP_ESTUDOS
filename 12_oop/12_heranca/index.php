<?php

class Humano{
    public $idade = 33;
    public function fala(){
        echo "Oi amigo, você é um amigo!<br>";
    }
    private function gritar(){
        echo "OIIIIIIII!<br>";
    }
    public function acessaGritar(){
        $this->gritar();
    }
    protected function falarBaixinho(){
        echo "......<br>";
    }
    
    public function acessaBaixinho(){
        $this->falarBaixinho();
    }


}
class Programador extends Humano{





}



$jojo = new Humano;
$jojo->fala();
$jojo->acessaGritar();
$jojo->acessaBaixinho();

$daniel = new Programador;
$daniel->fala();
$daniel->acessaGritar();
$daniel->acessaBaixinho();