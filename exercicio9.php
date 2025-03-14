<?php

include "funcoes.php";

//Exercício 9 - Desenhar um vetor com um elemento em cada linha com um separador escolhido pelo usuário e
// com um delimitador de início e fim escolhido pelo usuário.

echo "INSERIR ELEMENTOS NO VETOR\n\n";

//Inserindo elementos dinamicamente no vetor, com o limitador especificado no início e no fim de cada elemento
$vetor = createArrayDynamically();
//Calcula o tamanho do maior elemento do vetor fornecido
$tamMaiorElemVetor = tamanhoMaiorElementoArray($vetor);


//**** Tratando delimitador inicial e final do vetor vertical ****//
//Verifica se o vetor terá delimitadores de início e fim
echo "\nInserir delimitadores no início e no fim do vetor? (s/n) ";
$comDelimitadores = strtolower(readline());

if ($comDelimitadores == 's'){
    //Solicita ao usuário o caracter delimitador
    echo "\nInforme caractere delimitador de início e fim: ";
    $caracter = readline();
    
    //Delimitador será formado pelo caractere repetido, de acordo com o tamanho do maior elemento do vetor
    $delimitador = desenharCaracterRepetido($caracter, $tamMaiorElemVetor);
}
else{
    $delimitador = '';
}


//**** Tratando separador entre os elementos do vetor vertical ****//
//Verifica se haverá separador entre os elementos do vetor
echo "\nIncluir separador entre elementos? (s/n)";
$comSeparador = strtolower(readline());

if ($comSeparador == 's') {
    echo "\nSeparador: ";
    $separador = readline();
} else {
    $separador = '';
}


//**** Imprimindo vetor na tela de acordo com os parâmetros escolhidos pelo usuário ****//    
if ($delimitador != null){
    //Imprime delimitadores no início e fim do vetor vertical
    
    //Imprime delimitador de início
    echo "$delimitador\n";
      
    imprimeVetorVertical($vetor,$separador,$tamMaiorElemVetor); 
    
    //Imprime delimitador de fim
    echo "\n$delimitador";    
}
else{ //não imprime delimitadores no início e fim do vetor vertical
    
    imprimeVetorVertical($vetor,$separador,$tamMaiorElemVetor); 
}
    