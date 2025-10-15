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
Descritivo:Procedimento:Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.

*******************************************************************************/
function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "<br>";
    }
}

// Exemplo de uso
contagemRegressiva(5);
?>
