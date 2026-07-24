<?php

$quantidadeAvaliacoes = 0;
$somaNotas = 0;

do {

    $nota = rand(1, 5);

    echo "Nota registrada: $nota<br>";

    $quantidadeAvaliacoes++;
    $somaNotas += $nota;

    $continuar = rand(0, 1);

    if ($continuar == 1) {
        echo "Será registrada outra avaliação.<br><br>";
    } else {
        echo "As avaliações foram encerradas.<br><br>";
    }

} while ($continuar == 1);

$media = $somaNotas / $quantidadeAvaliacoes;

echo "<hr>";
echo "Quantidade de avaliações: $quantidadeAvaliacoes<br>";
echo "Soma das notas: $somaNotas<br>";
echo "Média das avaliações: ";
echo number_format($media, 2, ",", ".");

?>
