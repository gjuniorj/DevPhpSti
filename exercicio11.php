<?php

include "funcoes.php";

//Exercício 11 - Desenhar uma matriz com elementos numéricos alinhados à direita e elementos não-numéricos 
// alinhados à esquerda


//Criando matriz dinamicamente
$matriz = criarMatrizDinamicamente();

desenhaMatriz($matriz);

$vetorNumColunasCadaLinha = array_map('count',$matriz);

//echo "vetorNumColunasCadaLinha";
//var_dump($vetorNumColunasCadaLinha);
//echo "\n";
//$numColMatriz = max($vetorNumColunasCadaLinha);
//echo "numColMatriz: $numColMatriz \n";

$matrizTransp = retornaMatrizTransposta($matriz);
echo"\n";
desenhaMatriz($matrizTransp);
echo"\n";

$matrizTranspLinhasAlinhadas = retornarMatrizComLinhasAlinhadas($matrizTransp);

$matrizAlinhada = retornaMatrizTransposta($matrizTranspLinhasAlinhadas);

echo"\n";
desenhaMatriz($matrizAlinhada);
echo"\n";
    
    
    
//    //Calcula o tamanho do maior elemento do vetor normalizado para cálculo da posição dos delimitadores posteriormente.
//    $tamMaiorElemVetorAlinhado = tamanhoMaiorElementoArray($vetorAlinhado);
//    
//    //Delimitador de início e fim da matriz será formado pelo caractere repetido, 
//    // de acordo com o tamanho do maior elemento do vetor
//    $delimitador = repetirCaracter('*', $tamMaiorElemVetorAlinhado);     
//    
//    //Imprime delimitador de início
//    echo "$delimitador\n";
//      
//    imprimeVetorVertical($vetorAlinhado); 
//    
//    //Imprime delimitador de fim
//    echo "\n$delimitador";    
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
    