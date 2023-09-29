<?php

function verificarCategorias(){
    $categoria = "eletrônicos";
    
    if($categoria == "eletrônicos"){
        echo "Essa categoria é de produtos eletrônicos";
    }elseif($categoria == "vestuário"){
        echo "Essa categoria é de produtos de vestuário";
    }elseif($categoria == "alimentos"){
        echo "Essa categoria é de produtos alimentícios";
    }else{
        echo "Categoria desconhecida";
    }
    
    }
echo verificarCategorias();