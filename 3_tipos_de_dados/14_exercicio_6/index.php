<?php
$arr = ['carro' => 'polo', 'marca' => 'Volkswagen', 'cor' => 'dourado', 'ano' => 2003];
print_r($arr);
echo '<br>';
echo $arr['carro'];
echo '<br>';
echo $arr['cor'];
echo '<br>';

if ($arr['ano'] <= 2023-18){
    echo 'Esse carro é de maior!';
}else {
    echo 'Esse carro não pode beber!';
}
