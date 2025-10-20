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
Descritivo:.DO-WHILE: Escreva um programa que leia um número e o imprima. O programa deve repetir até que o número lido seja negativo
*******************************************************************************/

$num = 0;

do {    
    echo "Digite um número: \n"; // solicita ao usuário que digite um número,
$num = (int)trim(fgets(STDIN)); //armazena o numero digitado
echo $num."\n"; //mostra o numero digitado
} while ($num > -1); //o loop continua enquanto o valor de $num for maior que -1
echo "\n Parando Programa..." // montra a mensagem quando o loop for encerrado
?>

