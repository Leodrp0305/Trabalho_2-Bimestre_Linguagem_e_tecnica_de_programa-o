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
Descritivo:Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
*******************************************************************************/
$arrayqualquer = [
 "José Carlos Domingues Flores",
 "Sidnei Martins de Jesus",
 "Bruno de sobrenome desconhecido",
 "Filipe Klos"
];

function imprimirArray($array) {
    foreach ($array as $thisLine) {
        echo $thisLine."\n";
    }

}
imprimirArray($arrayqualquer);
?>
