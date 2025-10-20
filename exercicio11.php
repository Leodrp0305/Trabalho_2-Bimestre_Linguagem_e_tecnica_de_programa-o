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
Descritivo:DO-WHILE: Escreva um programa que use do-while para imprimir os números de 1 a 10.
*******************************************************************************/
$i = 1;
do { //o código dentro do "do" será executado pelo menos uma vez.
    echo $i."\n";// exibe o valor de $i
    $i++; //adiciona +1 em $i
} while ($i <= 10); //encerra o bloco quando o $i passar de 10
?>

