<?php

$partidas = 0;
$pontuacaoTotal = 0;

do {

    $pontos = rand(0, 100);

    echo "Partida " . ($partidas + 1) . ": $pontos pontos.<br>";

    $partidas++;
    $pontuacaoTotal += $pontos;

    $continuar = rand(0, 1);

    if ($continuar == 1) {
        echo "O jogador decidiu jogar novamente.<br><br>";
    } else {
        echo "O jogador decidiu encerrar.<br><br>";
    }
} while ($continuar == 1);

$media = $pontuacaoTotal / $partidas;

echo "<hr>";
echo "Quantidade de partidas: $partidas<br>";
echo "Pontuação total: $pontuacaoTotal<br>";
echo "Média de pontos: " . number_format($media, 2, ",", ".");
