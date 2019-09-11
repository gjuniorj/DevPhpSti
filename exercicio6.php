<?php

include "funcoes.php";

//Exercício 6 - Desenhar um vetor com um elemento em cada linha e com marcador de início e fim da linha

echo "INSERIR ELEMENTOS NO VETOR\n\n";

//Inserindo elementos dinamicamente no vetor, com o delimitador especificado no início e no fim de cada elemento
$vetLinhas = insereElementosDinamicamenteVetor('|');

vetorComSeparador($vetLinhas, "\n");