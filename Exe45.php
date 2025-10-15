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
Descritivo:Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
*******************************************************************************/
function obterPrimeiroElemento($array) {
    if (!empty($array)) {
        return $array[0];
    } else {
        return null; // ou uma mensagem de erro, se preferir
    }
}

// Exemplo de uso
$frutas = ["maçã", "banana", "laranja"];
echo obterPrimeiroElemento($frutas); // saída: maçã
?>
