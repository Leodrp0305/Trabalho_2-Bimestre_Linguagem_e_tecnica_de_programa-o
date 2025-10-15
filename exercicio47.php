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
Data: 15 de Outubro de 2025
Descritivo:Função:Função com String: Crie uma função contarVogais que receba uma string e retorne o número de vogais.
*/
$stringqualquer = readline("\n Digite alguma coisa!");
$Vogais = ["a", "e", "i" ,"o" ,"u"];
$j = 0;
function contarVogais ($string) {
    global $Vogais;
    if (empty($string)) { //evitando erro caso o usuário não digite nada
        echo "\n Digite alguma coisa, poxa!";
    } else {
        $j = 0;
        for ($i = 0; $i <= strlen($string); $i++) { //for para repetir a mesma quantia de vezes que o tamanho da string
        $string = strtolower($string); //forçando para minusculo.
        $letra = $string[$i];
        if (in_array($letra, $Vogais)) { //verifica se a letra da vez está dentro do array
            $j++;
        }
        }
        echo "Háviam dentro da string ($string) um total de $j vogais.";
    }

}
(string)$stringqualquer;
 contarVogais($stringqualquer);

?>