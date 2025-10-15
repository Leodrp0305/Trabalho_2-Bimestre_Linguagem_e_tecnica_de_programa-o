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
Descritivo:DO-WHILE: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".
*******************************************************************************/
do {
    // Exibe o menu
    echo "\nMenu de Opções:\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";

    // Lê a opção do usuário
    $opcao = (int) readline("Escolha uma opção: ");

    // Verifica a opção escolhida
    switch ($opcao) {
        case 1:
            echo "Você escolheu INICIAR.\n";
            break;
        case 2:
            echo "Você escolheu PARAR.\n";
            break;
        case 3:
            echo "Saindo do programa...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }

} while ($opcao != 3);
?>