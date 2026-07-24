<?php

$tentativas = 0;
$loginRealizado = 0;

while ($loginRealizado == 0 && $tentativas < 5) {

    $tentativas++;

    $loginRealizado = rand(0, 1);

    echo "Tentativa $tentativas: ";

    if ($loginRealizado == 1) {
        echo "Login realizado com sucesso.<br>";
    } else {
        echo "Senha incorreta.<br>";
    }
}

echo "<hr>";
echo "Quantidade de tentativas: $tentativas<br>";

if ($loginRealizado == 1) {
    echo "Usuário conectado.";
} else {
    echo "Usuário bloqueado após cinco tentativas.";
}

?>
