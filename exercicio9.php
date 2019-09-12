<?php

include "funcoes.php";

//Exercício 9 - Desenhar um vetor com um elemento em cada linha com um separador escolhido pelo usuário e
// com um delimitador de início e fim escolhido pelo usuário.

echo "INSERIR ELEMENTOS NO VETOR\n\n";

//Inserindo elementos dinamicamente no vetor, com o limitador especificado no início e no fim de cada elemento
$vetor = insereElementosDinamicamenteVetor('');

echo "\nInserir delimitadores no início e no fim do vetor? (s/n) ";
$comDelimitadores = strtolower(readline());

if ($comDelimitadores == 's'){
    //Solicita ao usuário o caracter delimitador
    echo "\nInforme caracter delimitador de início e fim: ";
    $caracter = readline();
    
    //Calcula a quantidade de caracteres repetidos em função do tamanho do maior elemento do vetor fornecido
    $tamVetor = tamanhoMaiorElementoArray($vetor);
    
    //Imprime caracteres repetidos - delimitador inicial
    repetirCaracter($caracter, $tamVetor);
    
    //Imprime o vetor na vertical 
    imprimeVetorVertical($vetor); 
    
    //Imprime caracteres repetidos - delimitador final
    repetirCaracter($caracter, $tamVetor);    
}
else{
    //Imprime o vetor na vertical sem delimitadores
    imprimeVetorVertical($vetor);
    
}


