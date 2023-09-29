<?php
$a = 3.14;
$b = 14.3;
$c = 1.43;

echo $a; 
echo "<br>";
echo $b;
echo "<br>";
echo $c;
if(is_float($c)){
    echo " e "; echo $c; echo " é FLOAT <br>";
}else{
    echo " e "; echo $c; echo " não é FLOAT <br>";
}
?>