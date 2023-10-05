<?php

class Humano{

}

class Animal{


}

class Professor extends Humano{

}


$pedro = new Professor;
$rafaela = new Humano;
$luna = new Animal;
if($rafaela instanceof Humano){
    echo "RAFAELA é uma Humana!!<br>";

}else{
    echo "RAFAELA não é Humana<br>";
}

if($luna instanceof Humano){
    echo "LUNA é uma Humana!<br>";

}else{
    echo "LUNA não é Humana<br>";
}

if($pedro instanceof Humano){
    echo "PEDRO é um Humano!<br>";

}else{
    echo "PEDRO não é Humano<br>";
}