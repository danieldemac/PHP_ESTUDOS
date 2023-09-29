<?php
$teste = "asd";
echo "$teste global 1 <br>";
if(5 > 2){
    $teste = "dsa";
    
echo "$teste if <br>";
}
echo "$teste global 2 <br>";
function funcao(){
$teste = "xxx";
echo "$teste local <br>"; 
}
funcao();
function testandoGlobal(){
    global $teste;
    echo "$teste global do teste <br>";
}
testandoGlobal();