<?php

function defineCorCarro($cor = "vermelha"){

    echo "A cor do carro é $cor <br>";

}
$carCor = "verde";
defineCorCarro();
defineCorCarro("azul");
defineCorCarro($carCor);