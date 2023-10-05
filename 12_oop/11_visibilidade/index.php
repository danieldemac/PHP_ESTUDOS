<?php

class Carro{

public $rodas = 4;
public $vidro = "Sem película";


}
class Mecanico {

  public function alterarRodas($obj){

    $obj->rodas = 10;

  }
  public function colocarPelicula($obj){
    $obj->vidro = "Com película";

  }
    
}

$carro = new Carro;
echo $carro->rodas . "<br>";

$daniel = new Mecanico;
$daniel->alterarRodas($carro);

echo $carro->rodas . "<br>";

echo $carro->vidro . "<br>";

$daniel->colocarPelicula($carro);

echo $carro->vidro . "<br>";
