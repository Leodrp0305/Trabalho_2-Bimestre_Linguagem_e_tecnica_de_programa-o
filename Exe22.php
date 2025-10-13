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
Descritivo: Array Associativo/FOREACH: Usando o array do exercício 21, imprima cada dado no formato "chave: valor".
*******************************************************************************/

    $aluno = [
        "Nome" => "Bruno", //string
        "Idade" => 30,     //inteiro
        "Curso" => "Engenharia de Software", //string
    ];

    foreach ($aluno as $chave => $valor){
        echo "-> " . $chave . ":" . $valor . "\n"; 
    }

?>