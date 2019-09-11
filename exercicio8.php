<?php

include "funcoes.php";

//Exercício 8 - Desenhar um vetor com um elemento em cada linha com um separador escolhido pelo usuário

echo "INSERIR ELEMENTOS NO VETOR\n\n";

//Inserindo elementos dinamicamente no vetor, com o limitador especificado no início e no fim de cada elemento
$vetor = insereElementosDinamicamenteVetor('');

//Imprime o vetor na vertical
imprimeVetorVertical($vetor);