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
Descritivo:"DO-WHILE: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada
*******************************************************************************/
    

    do{
        echo"Digite sua senha \n";
        $var1 = (int)trim(fgets(STDIN));
    }while($var1 != 1234);

    echo "Senha correta";
    
?>