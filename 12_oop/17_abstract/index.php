<?php

abstract class Teste{
    public static function testandoClasse(){
        echo "Este método é de uma classe abstrata<br>";
    }
    abstract public function testeAbs();
}

class Nova extends Teste{
public function testeAbs(){
    echo "teste 2<br>";

}
}


Teste::testandoClasse();
$n = new Nova;
$n->testeAbs();