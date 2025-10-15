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
Descritivo:Função: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
*/
$stringqualquer = readline("\n Digite alguma coisa:"); // pedimos uma string para o usuário

function inverterString($string) { //criamos a função inverterString
   if (empty($string)) {
      echo "ERRO: DIGITE ALGUMA COISA";
   } else {
 $frase = ""; //inicializamos a varíavel $frase para uso futuro
    for ($i = 0; $i <= strlen($string); $i++) { //criamos um for para repetir o tamanho da string
     $j = strlen($string) - $i; //tem formas melhores de fazer isso, mas eu substrai o numero do contador pelo tamanho da string para fazer ao contrario
     $letra = $string[$j]; //pego a letra individual dentro da string e coloco em uma variavel $letra
     $frase = $frase . $letra; // somo a variavel $letra a variavel $frase, fazendo a frase ao contrário
    }
 echo $frase; // imprime a frase invertida
 }
}

inverterString($stringqualquer);
    

?>