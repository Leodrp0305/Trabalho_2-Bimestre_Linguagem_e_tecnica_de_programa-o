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
Descritivo: Array Homogêneo: Crie um array com 10 números inteiros.
*******************************************************************************/
$numInt = []; //crie um array para ele ser homogeneo
for ($i = 1; $i <= 10; $i++) { //por pura preguiça criei um for para adicionar números aleatórios
$numInt[] = rand(1,100); //adicionando números aleatórios dentro do array
} //no for se limita a 10 números
print_r($numInt);//imprimindo o array
?>
