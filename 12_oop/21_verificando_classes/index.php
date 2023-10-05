<?php

class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}
    public function andar(){}
    public function correr(){}

}
if(class_exists("Humano")){
    echo "A class Humano existe!<br>";
}else{
    echo "A class Humano não existe!<br>";
}

if(class_exists("Cachorro")){
    echo "A class Cachorro existe!<br>";
}else{
    echo "A class Cachorro não existe!<br>";
}

print_r(get_class_vars("Humano"));
echo "<br>";
print_r(get_class_methods("Humano"));