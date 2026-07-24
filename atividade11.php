<?php

$satisfeitos = 0;
$insatisfeitos = 0;

for ($cliente = 1; $cliente <= 10; $cliente++) {

    $resposta = rand(0, 1);

    echo "Cliente $cliente: ";

    if ($resposta == 1) {

        echo "Satisfeito.<br>";
        $satisfeitos++;

    } else {

        echo "Insatisfeito.<br>";
        $insatisfeitos++;
    }
}

echo "<hr>";
echo "Clientes satisfeitos: $satisfeitos<br>";
echo "Clientes insatisfeitos: $insatisfeitos";

?>
