<?php

$str = "TESTE";
$str2 = strrev($str);
$strRepeat = str_repeat($str."<br>", 39);

echo $strRepeat;
echo str_repeat($str2."<br>", 41);