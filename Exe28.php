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
Descritivo: Array/Busca: Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
*******************************************************************************/

    $frutas = ["Abacaxi", "Banana", "Mamão", "Maçã", "Laranja"];

    echo in_array("Maçã", $frutas) ? "Maçã está no array" : "Maçã não está no array";
    // in_array verifica se o primeiro valor entre aspas esta presente no array frutas

?>
