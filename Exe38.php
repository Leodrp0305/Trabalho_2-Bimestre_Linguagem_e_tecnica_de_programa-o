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
Descritivo:Procedimento: Elabore um procedimento chamado calcularMediaAluno
que receba duas notas e imprima a média e se o aluno foi "Aprovado" 
(média>= 7) ou "Reprovado"
*******************************************************************************/
function calcularMediaAluno($nota1, $nota2){
 echo ($nota1 + $nota2)/2 . "\n";
 if (($nota1 + $nota2)/2 >= 7) {
    echo "Aprovado";
 } else {
    echo "Reprovado";
 }
}
calcularMediaAluno(4,8);
?>