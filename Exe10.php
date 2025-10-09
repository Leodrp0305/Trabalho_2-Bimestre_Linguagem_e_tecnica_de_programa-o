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
Descritivo:WHILE: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
*******************************************************************************/
    echo "Digite um número: \n";
    $var1 = (int)trim(fgets(STDIN));
    $i = 0;
    while ($i < strlen((string)$var1)) {
        $i++;
    }
    echo $i;

?>