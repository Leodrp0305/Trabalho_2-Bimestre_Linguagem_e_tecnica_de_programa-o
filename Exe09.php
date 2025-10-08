<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: José Carlos Domingues Flôres
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
 25125961-2 - Elias Borgers Neckel
 25011023-2 - Lucas Coelho Suero 
Data: 08 de Outubro de 2025
Descritivo:FOR: Escreva um programa que use for para imprimir os números de 1 a 10.
*******************************************************************************/
$soma = 0;

do {
    // Lê o número do usuário
    $numero = (int) readline("Digite um número (0 para sair): ");

    // Adiciona à soma, se não for zero
    if ($numero != 0) {
        $soma += $numero;
    }

} while ($numero != 0);

// Mostra o resultado final
echo "A soma dos números digitados é: $soma\n";
?>
