<?php

include_once "backend.php";
?>

<h1>Seja Bem vindo ao nosso Site</h1>
<p><?=$nome;?> veja as nossas ofertas</p>

<h2>Confira nossos principais produtos: </h2>
<ul>
<?php foreach($produtos as $produto): ?>
    <li><?=$produto; ?></li>
    <?php endforeach; ?>
</ul>