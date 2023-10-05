<?php

class Humano{
    public $olhos = 2;
    public $maos = 2;
    public $pernas = 2;

    function falar(){
        return "Oi!";
    }


}
class Professor extends Humano{
    public $olhos = 4;
    public $educacao = "superior";

    function gritar(){
        return strtoupper($this->falar());
    }

}
$daniel = new Humano;
echo $daniel->olhos;
echo "<br>";
echo $daniel->maos;
echo "<br>";
echo $daniel->falar();
echo "<br>";



$lucio = new Professor;
echo $lucio->gritar();
echo "<br>";
echo $lucio->olhos;
echo "<br>";
echo $lucio->maos;
echo "<br>";
echo $lucio->falar();

