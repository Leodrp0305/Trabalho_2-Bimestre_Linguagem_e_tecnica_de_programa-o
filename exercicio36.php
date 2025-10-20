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
Descritivo:Procedimento:Crie um procedimento desenhar Linha que imprima uma linha de 20 hifens
*******************************************************************************/
function desenharLinha() { //criamos uma função chamada desenharLinha, como pedido.
    echo str_repeat("-", 20) . "<br>"; //usamos a função padrão do php chamada str_repeat e dentro do paramentro colocamos a string "-" para ser repetida 20 vezes
}

// Exemplo de uso
desenharLinha(); // aqui somente chamamos a string.
?>

