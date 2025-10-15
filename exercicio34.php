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
Descritivo:Procedimento: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
*******************************************************************************/
    $numero = rand( 1, 100);

    // Procedimento não retorna valor
    function verificar($numero) { 
        if ($numero % 2 == 0) {
        echo "O número $numero é Par.";
    } else {
        echo "O número $numero é Ímpar.";
    } 
}
    verificar($numero)



?>
