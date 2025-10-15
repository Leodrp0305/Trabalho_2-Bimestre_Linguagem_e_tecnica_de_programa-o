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
Descritivo: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
*******************************************************************************/
    //array associativo
    $carro = [
        "marca" => "Chevrolet",
        "modelo" => "Astra",
        "ano" => 2000,
    ];

    //funcao que opera o array
    function car($carro) {
    echo "Marca: " . $carro["marca"] . "\n";
    echo "Modelo: " . $carro["modelo"] . "\n";
    echo "Ano: " . $carro["ano"] . "\n";
}
    //puxar funcao
    car($carro)

?>
