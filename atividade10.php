<?php

$tentativas = 0;
$aprovados = 0;
$recusados = 0;

while ($aprovados < 3) {

    $situacao = rand(0, 1);

    $tentativas++;

    echo "Pagamento $tentativas: ";

    if ($situacao == 1) {

        echo "Aprovado.<br>";
        $aprovados++;

    } else {

        echo "Recusado.<br>";
        $recusados++;
    }

    echo "Aprovados até agora: $aprovados<br>";
    echo "Recusados até agora: $recusados<br><br>";
}

echo "<hr>";
echo "Quantidade de tentativas: $tentativas<br>";
echo "Pagamentos aprovados: $aprovados<br>";
echo "Pagamentos recusados: $recusados";

?>
