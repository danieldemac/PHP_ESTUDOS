<?php

class Humano{
    public function falar(){
        echo "OI!";
    }
}
$daniel = new Humano;

if(is_object($daniel)){
    echo "É um objeto!<br>";
}else{
    echo "Não é um objeto!<br>";
}

echo get_class($daniel)."<br>";

if(method_exists($daniel, "falar")){
    echo "Método existe!<br>";
}else{
    echo "Método não existe!!<br>";
}