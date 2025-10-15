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
Descritivo:Array Associativo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
*******************************************************************************/
$produtos = [ //criando array de produtos
    [ //cada produto é um array
    "nome" => "Café em pó (500g)",
    "preço" => 39,
    ],
    [//cada produto é um array
        "nome" => "Arroz branco (5kg)",
        "preco" => 22
    ],
    [//cada produto é um array
        "nome" => "Óleo de soja (900ml)",
        "preco" => 6
    ]
];
echo $produtos[0]["nome"];
print_r($produtos);

?>
