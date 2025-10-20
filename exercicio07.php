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
Descritivo:.WHILE: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte.
*******************************************************************************/
    $num = rand(0,10); // gera um número aleatório entre 0 e 10 e armazena na variável $num
    $i = 0;  //$i vai contar quantas tentativas o usuário teve

    while($num != $a ){ // enquanto o número digitado $a for diferente do número sorteado $num
        echo "Digite um número de 0 a 10: \n"; //pede pro usuario digitar
        $a = trim(fgets(STDIN)); // armazena oque o usuario digitar em $a 
        $i++; //contador do numero de tentativas

        
    }

    echo "O número era $num, você tomou $i tentativas para acertar." // o laço é encerrado e esta mensagem aparece



?>

