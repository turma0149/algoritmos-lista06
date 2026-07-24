<?php

$quantidadeDepositos = 0;
$totalDepositado = 0;

do {

    $valorDeposito = rand(50, 200);

    echo "Depósito realizado: R$ ";
    echo number_format($valorDeposito, 2, ",", ".") . "<br>";

    $quantidadeDepositos++;
    $totalDepositado += $valorDeposito;

    $continuar = rand(0, 1);

    if ($continuar == 1) {
        echo "A pessoa decidiu fazer outro depósito.<br><br>";
    } else {
        echo "A pessoa decidiu encerrar.<br><br>";
    }

} while ($continuar == 1);

echo "<hr>";
echo "Quantidade de depósitos: $quantidadeDepositos<br>";
echo "Total depositado: R$ ";
echo number_format($totalDepositado, 2, ",", ".");

?>
