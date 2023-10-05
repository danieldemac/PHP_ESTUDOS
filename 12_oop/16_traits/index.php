<?php

trait Objeto{

    public function teste(){
        echo "Testando trait de objeto<br>";
    }
}

trait Testando {
    public function traitTeste(){
        echo "Este método é da trait Testando<br>";
    }

}

class Central{
    use Objeto;
    use Testando;
}

$teste = new Central;
$teste->teste();
$teste->traitTeste();