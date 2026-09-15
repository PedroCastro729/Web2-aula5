<?php
    $nome = $_GET["nome"];
    $idade = $_GET["nota1"];
    $idade = $_GET["nota2"];
    $idade = $_GET["nota3"];

    $arquivo = fopen("notas.txt", "a");

    fwrite($arquivo, "$nome: nota 1:$nota1 nota 2: $nota2 nota 3: $nota3\n");

    fclose($arquivo);

    echo "Nome: $nome e nota 1: $nota1 nota 2: $nota2 nota 3: $nota3 cadastrados com sucesso!";
?>