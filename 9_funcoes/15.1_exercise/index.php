<?php

function countVowels($str) {
    $str = strtolower($str); // Converte a string para minúsculas para facilitar a contagem
    $vowels = "aeiou"; // Define as vogais
    $count = 0; // Inicializa o contador de vogais

    // Percorre cada caractere da string
    for ($i = 0; $i < strlen($str); $i++) {
        // Verifica se o caractere atual está presente na lista de vogais
        if (strpos($vowels, $str[$i]) !== false) {
            $count++; // Incrementa o contador se for uma vogal
        }
    }

    return $count; // Retorna o total de vogais encontradas na string
}

// Exemplo de uso:
$string = "Hello, World!";
$result = countVowels($string);
echo "Número de vogais na string: " . $result;