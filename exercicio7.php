<?php

include "funcoes.php";

//Exercício 7 - Desenhar um vetor com um elemento em cada linha e alinhando os marcadores de fim

echo "INSERIR ELEMENTOS NO VETOR\n\n";

//Inserindo elementos dinamicamente no vetor, com o limitador especificado no início e no fim de cada elemento
$vetor = createArrayDynamically('');

//Calculando o tamanho do elemento com maior número de caracteres no array
$tamMaiorElem = tamanhoMaiorElementoArray($vetor);

//echo "Tamanho do maior elemento: ".$tamMaiorElem."\n";

//Normaliza os elementos do vetor de acordo com o tamanho passado
$vetorNormalizado = normalizaElementosArray($vetor, $tamMaiorElem);

vetorComSeparador($vetorNormalizado, "\n");