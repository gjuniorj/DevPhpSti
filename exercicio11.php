<?php

include "funcoes.php";

//Exercício 11 - Desenhar uma matriz com elementos numéricos alinhdos à direita e elementos não-numéricos 
// alinhados à esquerda


//Criando matriz dinamicamente
$matriz = insereElementosMatriz();

var_dump($matriz);

////Calcula o tamanho do maior elemento do vetor fornecido
//$tamMaiorElemVetor = tamanhoMaiorElementoArray($vetor);
//
//
////*** Alinhando elementos do vetor e gravando num novo vetor ***//
//$vetorAlinhado = normalizaElementosArray($vetor, $tamMaiorElemVetor);
////Calcula o tamanho do maior elemento do vetor fornecido
//$tamMaiorElemVetorAlinhado = tamanhoMaiorElementoArray($vetorAlinhado);
//
//
//
////**** Tratando delimitador inicial e final do vetor vertical ****//
////Verifica se o vetor terá delimitadores de início e fim
//echo "\nInserir delimitadores no início e no fim do vetor? (s/n) ";
//$comDelimitadores = strtolower(readline());
//
//if ($comDelimitadores == 's'){
//    //Solicita ao usuário o caracter delimitador
//    echo "\nInforme caractere delimitador de início e fim: ";
//    $caracter = readline();
//    
//    //Delimitador será formado pelo caractere repetido, de acordo com o tamanho do maior elemento do vetor
//    $delimitador = repetirCaracter($caracter, $tamMaiorElemVetorAlinhado);    
//}
//else{
//    $delimitador = '';
//}
//
//
//
////**** Tratando separador entre os elementos do vetor vertical ****//
////Verifica se haverá separador entre os elementos do vetor
//echo "\nIncluir separador entre elementos? (s/n)";
//$comSeparador = strtolower(readline());
//
//if ($comSeparador == 's') {
//    echo "\nSeparador: ";
//    $separador = readline();
//} else {
//    $separador = '';
//}
//
//
//
////**** Imprimindo vetor na tela de acordo com os parâmetros escolhidos pelo usuário ****//    
//if ($delimitador != null){
//    //Imprime delimitadores no início e fim do vetor vertical
//    
//    //Imprime delimitador de início
//    echo "$delimitador\n";
//      
//    imprimeVetorVertical($vetorAlinhado,$separador,$tamMaiorElemVetorAlinhado); 
//    
//    //Imprime delimitador de fim
//    echo "\n$delimitador";    
//}
//else{ //não imprime delimitadores no início e fim do vetor vertical
//    
//    imprimeVetorVertical($vetorAlinhado,$separador,$tamMaiorElemVetorAlinhado); 
//}
    