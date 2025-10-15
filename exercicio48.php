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
Descritivo:.Função: Escreva uma função fatorial que receba um número e retorne seu fatorial.
*******************************************************************************/

function fatorial($n) {
    if ($n < 0) {
        return null; // fatorial não é definido para números negativos
    }
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Exemplo de uso
echo "Fatorial de 5: " . fatorial(5); // saída: 120
?>
