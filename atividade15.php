<?php

$totalConsumo = 0;

for ($casa = 1; $casa <= 5; $casa++) {

    $consumo = rand(50, 300);

    echo "Casa $casa: $consumo kWh.<br>";

    $totalConsumo += $consumo;
}

$mediaConsumo = $totalConsumo / 5;

echo "<hr>";
echo "Consumo total: $totalConsumo kWh.<br>";
echo "Consumo médio: ";
echo number_format($mediaConsumo, 2, ",", ".");
echo " kWh.";

?>
