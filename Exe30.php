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
Descritivo:.Array Multidimensional: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna.
*******************************************************************************/
// Criando a matriz 3x3
$matriz = [
    [2, 3, 3],    // linha 0
    [6, 5, 9],    // linha 1
    [1, 2, 9]     // linha 2
];

// Imprimindo o elemento da segunda linha (índice 1) e terceira coluna (índice 2)
echo $matriz[1][2];  // Saída: 6
?>