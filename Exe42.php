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
Descritivo:Função: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles

*******************************************************************************/
function maiorNumero($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Exemplo de uso
echo "Maior número: " . maiorNumero(10, 7);
?>
