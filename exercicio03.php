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
echo "<h3>Tabuada do 5</h3>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = 5 * $i;
    echo "5 x $i = $resultado<br>";
}
?>
