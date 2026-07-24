12-

<?php

$totalSemana = 0;

for ($dia = 1; $dia <= 7; $dia++) {

    $valorVenda = rand(100, 500);

    echo "Venda do dia $dia: R$ ";
    echo number_format($valorVenda, 2, ",", ".") . "<br>";

    $totalSemana += $valorVenda;
}

$media = $totalSemana / 7;

echo "<hr>";
echo "Total vendido na semana: R$ ";
echo number_format($totalSemana, 2, ",", ".") . "<br>";

echo "Média diária de vendas: R$ ";
echo number_format($media, 2, ",", ".");

?>
