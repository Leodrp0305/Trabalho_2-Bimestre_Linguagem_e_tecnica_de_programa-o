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
   
// Lê um número digitado pelo usuário e converte para inteiro
$num = (int)readline("Digite um número:");

function ehPrimo($numero) {
   if ($numero <= 1) {// Números menores ou iguais a 1 não são primos
      return false;
   } else {
      for ($i = 2; $i <= sqrt($numero); $i++) {// Testa divisores de 2 até a raiz quadrada do número
         if ($numero % $i == 0) { // Se for divisível por algum número, não é primo
            return false;
         } else {}
      }
   }
  return true;
} 
// Chama a função e verifica o resultado
if (ehPrimo($num) == true) {
   echo "$num é um número primo";
} else {
   echo "$num não é um número primo";
}

?>
