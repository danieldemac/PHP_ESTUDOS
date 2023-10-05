<?php

$pessoa = new Class(){
public $nome = "Daniel";

public function dizerNome(){
    echo "Olá meu nome é $this->nome";
}
};

echo $pessoa->nome;
$pessoa->dizerNome();