<?php

$aprovados = 0;
$reprovados = 0;
$somaNotas = 0;

for ($aluno = 1; $aluno <= 8; $aluno++) {

    $nota = rand(0, 100);

    $somaNotas += $nota;

    echo "Aluno $aluno — Nota: $nota — ";

    if ($nota >= 60) {

        echo "Aprovado.<br>";
        $aprovados++;

    } else {

        echo "Reprovado.<br>";
        $reprovados++;
    }
}

$mediaTurma = $somaNotas / 8;

echo "<hr>";
echo "Alunos aprovados: $aprovados<br>";
echo "Alunos reprovados: $reprovados<br>";
echo "Média da turma: ";
echo number_format($mediaTurma, 2, ",", ".");

?>
