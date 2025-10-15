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
Descritivo:Função: Função: Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n
*/
$n = (int)readline("Digite um número:"); //pedimos o número

function gerarArrayPares($numero) { //criamos a função
   $array = []; //inicializamos o array
   for ($i = 0; $i <= $numero; $i++) { //for como contador até o número digitado
      $array[] = $i; // adicionamos o número atual do contador no array
   }
   return $array; //retornamos o array final
}
 foreach (gerarArrayPares($n) as $line) { //para embelezamento da apresentação criamos um foreach para tirar cada linha do array
   echo "\n $line"; //imprimimos cada linha do array para não apresentar do jeito feito com print_r
 }
?>