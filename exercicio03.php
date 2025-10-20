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
Descritivo:FOR: Faça um programa que exiba a tabuada do 5, de 1 a 10.
*******************************************************************************/
echo "Tabuada do 5 \n";

for ($i = 1; $i <= 10; $i++) { //for usará um contador de 1 em 1 a partir do número 1 e parando no número 10.
    $resultado = 5 * $i; //efetua a multiplicação
    echo "5 x " . $i . " = " . $resultado . "\n"; //mostra o resultado
}
?>

