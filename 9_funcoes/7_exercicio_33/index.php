<?php

function nomeIdade($nome, $idade){

    if(is_string($nome)){
        if(is_integer($idade) && $idade > 1){
            echo "Oi meu nome é $nome, tenho $idade anos. <br>";
        }elseif(is_integer($idade) && $idade == 1){
            echo "Oi meu nome é $nome, tenho $idade ano. <br>";
        }elseif(is_integer($idade) && $idade < 1 && $idade >= 0){
            echo "Oi meu nome é $nome, eu tenho menos de 1 ano de idade. <br>";  
        }else{
            echo "Digite uma data válida. <br>";
        }
        if(is_float($idade)){
            echo "Oi meu nome é $nome, eu tenho menos de 1 ano de idade. <br>";  
        }
    }else{
        echo "Digite um nome válido. <br>";
    }
    

}
nomeIdade("Daniel", 33);
nomeIdade("Lucas", 1);
nomeIdade("Pedro", 0.5);
nomeIdade("Felipe", -2);
nomeIdade(12,12);
nomeIdade(10, "Paola");


