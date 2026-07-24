<?php

$quantidadeAbastecimentos = 0;
$totalLitros = 0;

do {

    $litros = rand(5, 15);

    echo "Foram adicionados $litros litros.<br>";

    $quantidadeAbastecimentos++;
    $totalLitros += $litros;

    $continuar = rand(0, 1);

    if ($continuar == 1) {
        echo "O motorista continuará abastecendo.<br><br>";
    } else {
        echo "O motorista encerrou o abastecimento.<br><br>";
    }

} while ($continuar == 1);

echo "<hr>";
echo "Quantidade de abastecimentos: $quantidadeAbastecimentos<br>";
echo "Total abastecido: $totalLitros litros.";

?>
