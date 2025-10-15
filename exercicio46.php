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
Descritivo:Função: Função: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.
*/
$num = (int)readline("Digite um número:");

function ehPrimo($numero) {
   if ($numero <= 1) {
      return false;
   } else {
      for ($i = 2; $i <= sqrt($numero); $i++) {
         if ($numero%$i == 0) {
            return false;
         } else {
            return true;
         }
      }
   }
} 
if (ehPrimo($num) == true) {
   echo "$num é um número primo";
} else {
   echo "$num não é um número primo";
}
?>