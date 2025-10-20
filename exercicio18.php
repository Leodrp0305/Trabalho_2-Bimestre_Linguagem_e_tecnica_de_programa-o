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
Descritivo:FOREACH: Usando o array de cidades do exercício 16, imprima cada cidade em uma nova linha usando foreach.
*******************************************************************************/
$cit = ["Curitiba","Tokyo", "São Paulo", "Paris", "Porto alegre"];
    foreach ($cit as $thisline) { //Em cada iteração do foreach o valor de um elemento do array é atribuído à variável $thisline.
        echo $thisline ."\n";
    }

?>

