<?php
/*
Atividade 01 – Compras
Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.
● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.
● Mostre:
  ○ valor de cada produto;
  ○ quantidade de produtos;
  ○ total da compra.
*/
?>

<?php

$quantidadeProdutos = 0;
$totalCompra = 0;

do {

    $valorProduto = rand(10, 50);

    echo "Produto: R$ " . number_format($valorProduto, 2, ",", ".") . "<br>";

    $quantidadeProdutos++;
    $totalCompra += $valorProduto;

    $continuar = rand(0, 1);

    if ($continuar == 1) {
        echo "O cliente decidiu continuar comprando.<br><br>";
    } else {
        echo "O cliente decidiu encerrar a compra.<br><br>";
    }
} while ($continuar == 1);

echo "<hr>";
echo "Quantidade de produtos: $quantidadeProdutos<br>";
echo "Total da compra: R$ " . number_format($totalCompra, 2, ",", ".");

?>
