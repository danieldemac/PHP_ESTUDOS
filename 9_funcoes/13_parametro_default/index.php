<?php


function teste($a = "teste"){

echo "A = $a <br>";
}

teste();
teste("teste2");

function testeDois($b, $a = "teste"){

    echo "A = $a e B = $b <br>";
}

testeDois("B");
testeDois("B", "A");
