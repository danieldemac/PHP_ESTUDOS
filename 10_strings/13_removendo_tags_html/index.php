<?php

$textoHtml = "<p> Teste</p><div>Uma div Aqui</div>";

echo $textoHtml;

$salvarTextoSemHtml = strip_tags($textoHtml);

echo "<br>";
echo $salvarTextoSemHtml;