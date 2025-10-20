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
Descritivo:Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada
*******************************************************************************/
function mostrardados($nome, $idade,  $cidade){ //criamos uma função chamada mostrardados com a função de formatar os dados que serão apresentados
    echo "Seus dados pessoais são: \n"; //apresenta o que significa os dados abaixo
    echo "Seu nome é: " . $nome . "\n"; //formatação do nome
    echo "Sua idade é: " . $idade . " anos \n"; //formatação da idade
    echo "Sua cidade é: " . $cidade . "\n"; //formatação da cidade
}
    
    mostrardados("Lucas", 18, "Rio de Janeiro")  //informações colocadas para retornar tudo formatado via função


?>

