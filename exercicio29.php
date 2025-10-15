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
Descritivo:.FOREACH/IF: Dado um array de números [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20
*******************************************************************************/
$num = [12, 5, 23, 18, 9, 45];
foreach ($num as $numNow) {
    if ($numNow > 20) {
        echo $numNow."\n";
    }
}

?>
