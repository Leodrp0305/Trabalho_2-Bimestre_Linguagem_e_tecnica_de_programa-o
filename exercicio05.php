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
Descritivo:FOR: : Crie um programa que calcule e imprima a soma dos números de 1 a 100
*******************************************************************************/
$soma = []; //criei um array extremamente desnecessário
for ($i = 0; $i <= 100; $i ++){ //crie um for para contar de 1 a 100
$soma[] = $i; //coloca a variavel de contagem dentro do array criado
}
echo array_sum($soma); //usa array_sum para somar todas as versões do contador
?>
