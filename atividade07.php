<?php

$quantidadeDepositos = 0;
$totalCofrinho = 0;

while ($totalCofrinho < 500) {

    $deposito = rand(20, 100);

    $quantidadeDepositos++;
    $totalCofrinho += $deposito;

    echo "Depósito $quantidadeDepositos: R$ ";
    echo number_format($deposito, 2, ",", ".") . "<br>";

    echo "Total atual: R$ ";
    echo number_format($totalCofrinho, 2, ",", ".") . "<br><br>";
}

echo "<hr>";
echo "Quantidade de depósitos: $quantidadeDepositos<br>";
echo "Total guardado: R$ ";
echo number_format($totalCofrinho, 2, ",", ".") . "<br>";
echo "A meta de R$ 500,00 foi atingida.";

?>
