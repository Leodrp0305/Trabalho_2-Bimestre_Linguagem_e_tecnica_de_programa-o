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
Descritivo:Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
*******************************************************************************/
$arrayqualquer = [ //criamos um array com o nome dos professores como uma menção honrosa.
 "José Carlos Domingues Flores",
 "Sidnei Martins de Jesus",
 "Bruno de sobrenome desconhecido",
 "Filipe Klos"
];

function imprimirArray($array) { //iniciamos a funçãi imprimirArray como pedido com uma variavel padrão chamada $array
    foreach ($array as $thisLine) { //aqui utilizamos um foreach para percorrer cada linha do array padrão, e abaixo, imprimir tal linha
        echo $thisLine."\n";
    } //fechamos a funçãos

}
imprimirArray($arrayqualquer); //aqui utilizamos a função criada para percorer o array criado na linha 14, o que significa que trocamos a variavel padrão pelo array entre parenteses 
?>

