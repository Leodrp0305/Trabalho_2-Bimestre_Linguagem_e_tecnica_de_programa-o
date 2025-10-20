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
Descritivo:Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média..
*******************************************************************************/
$notas = [
    "Matemática" => 8.5,
    "Português" => 7.0,
    "História" => 9.0,
    "Ciências" => 6.5
];

$total = 0;
foreach ($notas as $disciplina => $nota) { 
    $total += $nota; //soma as notas
}

$media = $total / count($notas); //calculo da media / count retorna a quantidade de elementos do array

echo "Média do aluno: " . number_format($media, 2); //number_format deixa o valor com duas casas decimais
?>

