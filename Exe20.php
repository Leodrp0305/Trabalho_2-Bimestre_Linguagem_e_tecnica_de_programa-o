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
Descritivo: Array/FOR: Crie um array com os 7 dias da semana e imprima-os usando um laço for.
*******************************************************************************/
$diasSemana = [ //array dos dias da semana
    "Domingo",
    "Segunda-Feira",
    "Terça-Feira",
    "Quarta-Feira",
    "Quinta-Feira",
    "Sexta-Feira",
    "Sábado"
];
for ($i = 0; $i < 7; $i++) { //laço for para chamar os 7 dias da semana
    echo $diasSemana[$i]."\n";
}
?>
