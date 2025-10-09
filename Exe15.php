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
Descritivo:FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
*******************************************************************************/
echo "Números primos entre 1 e 50:\n";

for ($num = 2; $num <= 50; $num++) {
    $ehPrimo = true;

    // Verifica se $num é divisível por algum número entre 2 e $num-1
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        echo $num . "\n";
    }
}
?>

