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
    echo "Digite um número: \n"; //instruimos o usuário a digitar um número.
    $var1 = (int)trim(fgets(STDIN)); // pegamos o valor digitado pelo usuário e forçamos a ser inteiro
    $i = 0; // iniciamos a variavel de contagem em 0 para poder contar apropriadamente
    while ($i < strlen((string)$var1)) { //de forma bem redundante, utilizamos o strlen, para verificar a quantia de caracteres na string cedida para termos a quantia de repetições
        $i++;//adicionamos 1 a variavel de contagem até atingir o valor obtido pelo strlen.
    }
    echo $i; //imprimimos a variavel contadora

?>

