<?php

$str = "Está é minha string";

$minha = substr($str, 9, 5);

echo $str."<br>";
echo $minha."<br>";


$str2 = "Testando esta agora! <br>";
echo $str2;
$teste = substr($str2, 9);
echo $teste;
$teste2 = substr($str2, 9, -6);
echo $teste2;