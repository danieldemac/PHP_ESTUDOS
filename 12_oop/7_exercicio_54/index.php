<?php

class Animal {
    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }
}
$frida = new Animal;
echo "O nome do animal é $frida->nome <br>";
$frida->escolherNome("Frida");
echo "O nome do animal é $frida->nome <br>";