<?php

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

$url2 = "https://www.google.com/search?q=estrutura+de+dados+tipo+fila&rlz=1C1GCEU_pt-BRBR1076BR1076&oq=estrutura+de+dados+tipo+fila&gs_lcrp=EgZjaHJvbWUyCggAEEUYFhgeGDkyBwgBEAAYgAQyBwgCEAAYgAQyBwgDEAAYgAQyCAgEEAAYFhgeMggIBRAAGBYYHjIICAYQABgWGB4yCAgHEAAYFhgeMggICBAAGBYYHjIICAkQABgWGB7SAQkxNDIzMWowajeoAgCwAgA&sourceid=chrome&ie=UTF-8";

$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);
echo "<br>";

$url3 = "hpswww.google.com///externo";

$arrayUrl3 = parse_url($url3);

print_r($arrayUrl3);
echo "<br>";