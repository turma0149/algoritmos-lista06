<?php

// Quantidade de carros montados 
// Que execute pelo menos 1 vez (do...while)
// Contar quantos carros são vermelhos 
// Somar o valor total dos carros vermelhos

//Entradas - Variáveis
$qtdCarrosMontados = 0;
$qtdCarrosVermelhos = 0;
$somaVlrCarVerm = 0;
$corCarroMontado = 0;
$valorCarroMontado = 0;
$continuar = 0;

do {
    $qtdCarrosMontados++;

    //flag: 0-azul, 1-vermelho, 2-preto, 3-prata  
    $corCarroMontado = rand(0, 3);
    $valorCarroMontado = rand(70000, 10000);

    echo("Cor do carro: $corCarroMontado .");
    echo("Valor do carro: $valorCarroMontado .");

    if ($corCarroMontado == 1) {
        $qtdCarrosVermelhos++;
        $somaVlrCarVerm = $somaVlrCarVerm + $valorCarroMontado;
    }

    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo("Deseja continuar: $continuar");
} while ($continuar == 1);

echo("Quantidade de carros vermelhos: $qtdCarrosVermelhos");
echo("Valor total de carros vermelhos R$: $somaVlrCarVerm");

