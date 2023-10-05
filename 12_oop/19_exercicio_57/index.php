<?php

class Cachorro{
    public $nome;
    public $raca;
    public $tamanho;
    public $peso;

    function __construct($nome,$raca, $tamanho, $peso)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->tamanho = $tamanho;
        $this->peso = $peso;

    }

}
$luna = new Cachorro("Luna","Chipoo", "Pequeno", 5);

echo "O nome do animal:$luna->nome<br>A raça:$luna->raca<br>O porte:$luna->tamanho<br>E pesa $luna->peso kgs";
