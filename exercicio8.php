<?php

include "funcoes.php";

//Exercício 8 - Desenhar um vetor com um elemento em cada linha com um separador escolhido pelo usuário

echo "INSERIR ELEMENTOS NO VETOR\n\n";

//Inserindo elementos dinamicamente no vetor, com o limitador especificado no início e no fim de cada elemento
$vetor = insereElementosDinamicamenteVetor('');
//Calcula o tamanho do maior elemento do vetor fornecido
$tamMaiorElemVetor = tamanhoMaiorElementoArray($vetor);


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


//Imprime o vetor na vertical
imprimeVetorVertical($vetor,$separador,$tamMaiorElemVetor);