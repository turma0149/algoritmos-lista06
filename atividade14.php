<?php

$realizadas = 0;
$naoRealizadas = 0;

for ($entrega = 1; $entrega <= 6; $entrega++) {

    $situacao = rand(0, 1);

    echo "Entrega $entrega: ";

    if ($situacao == 1) {

        echo "Realizada.<br>";
        $realizadas++;

    } else {

        echo "Não realizada.<br>";
        $naoRealizadas++;
    }
}

echo "<hr>";
echo "Entregas realizadas: $realizadas<br>";
echo "Entregas não realizadas: $naoRealizadas";

?>
