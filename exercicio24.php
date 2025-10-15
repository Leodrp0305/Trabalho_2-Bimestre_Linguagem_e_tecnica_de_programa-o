
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
Descritivo:FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto
*******************************************************************************/
$produtos = [ // criando array de produtos
    [ // cada produto é um array associativo
        "nome" => "Café em pó (500g)",
        "preço" => 39,
    ],
    [
        "nome" => "Arroz branco (5kg)",
        "preco" => 22
    ],
    [
        "nome" => "Óleo de soja (900ml)",
        "preco" => 6
    ]
];

// foreach aninhado para imprimir nome e preço
foreach ($produtos as $produto) {
    foreach ($produto as $chave => $valor) {
        echo ucfirst($chave) . ": " . $valor . "<br>";
    }
    echo "<br>";
}
?>
