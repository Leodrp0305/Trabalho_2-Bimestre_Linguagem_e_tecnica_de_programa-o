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
Descritivo:Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
*******************************************************************************/
    //definir string a ser alterada
    $minuscula = "Hello Word";

    //funcao para alterar a string
    function maiuscula($minuscula) {
        $maius = strtoupper($minuscula); //strtoupper altera a string entre os parenteses para maiuscula, e passa o resultado para $maius
        echo $maius;
    }
    
    maiuscula($minuscula)
?>
