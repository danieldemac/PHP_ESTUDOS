<?php

$str ="Testando encontro da palavra teste em uma string que tem a palavra teste";
$palavra = strrpos($str, "teste");
echo $str."<br>";
echo "Ultima palavra->";
echo $palavra."<br>";
$palavra2 = strpos($str, "teste");
echo "Primeira palavra->";
echo $palavra2."<br>";