<?php

$quantidadeAbastecimentos = 0;
$totalLitros = 0;

while ($totalLitros < 50) {

    $litros = rand(5, 10);

    $quantidadeAbastecimentos++;
    $totalLitros += $litros;

    echo "Abastecimento $quantidadeAbastecimentos: ";
    echo "$litros litros adicionados.<br>";

    echo "Quantidade atual: $totalLitros litros.<br><br>";
}

echo "<hr>";
echo "Quantidade de abastecimentos: $quantidadeAbastecimentos<br>";
echo "Total no reservatório: $totalLitros litros.<br>";
echo "O reservatório atingiu pelo menos 50 litros.";

?>
