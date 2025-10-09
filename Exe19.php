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
Descritivo: FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
*******************************************************************************/
$numInt = []; //crie um array para ele ser homogeneo
$soma = 0;

for ($i = 1; $i <= 10; $i++) { //por pura preguiça criei um for para adicionar números aleatórios
$numInt[] = rand(1,100); //adicionando números aleatórios dentro do array
} //no for se limita a 10 números

    foreach($numInt as $thisline)
    $soma += $thisline;

print_r($numInt);//imprimindo o array
echo "A soma é " .$soma;
?>