<?php

$str = "Cadê o meu queijo? Ele estava aqui em cima";

$queijo = substr($str, 12, 6);
for($i = 0; $i <= 12; $i++){
 echo $queijo."<br>";   
}
