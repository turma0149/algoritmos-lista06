<?php

$estoque = 20;
$quantidadeVendas = 0;
$totalItensVendidos = 0;

while ($estoque > 0) {

    $quantidadeComprada = rand(1, 4);

    echo "Cliente solicitou $quantidadeComprada produto(s).<br>";

    if ($quantidadeComprada <= $estoque) {

        $quantidadeVendas++;
        $totalItensVendidos += $quantidadeComprada;
        $estoque -= $quantidadeComprada;

        echo "Venda realizada.<br>";
        echo "Estoque atual: $estoque<br><br>";

    } else {

        echo "Venda recusada. Não há produtos suficientes.<br>";
        echo "Estoque disponível: $estoque<br><br>";

        /*
        Vende apenas os produtos restantes para encerrar o estoque.
        */

        $quantidadeVendas++;
        $totalItensVendidos += $estoque;

        echo "Foram vendidos os últimos $estoque produto(s).<br>";

        $estoque = 0;
    }
}

echo "<hr>";
echo "Quantidade de vendas: $quantidadeVendas<br>";
echo "Total de itens vendidos: $totalItensVendidos<br>";
echo "Estoque restante: $estoque";

?>
