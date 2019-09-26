<?php

include "funcoes.php";

//Exercício 11 - Desenhar uma matriz com elementos numéricos alinhados à direita e elementos não-numéricos 
// alinhados à esquerda


//Criando matriz dinamicamente
$matriz = criarMatrizDinamicamente();

$matrizTransp = retornaMatrizTransposta($matriz);

$matrizTranspLinhasAlinhadas = retornarMatrizComLinhasAlinhadas($matrizTransp);

$matrizAlinhada = retornaMatrizTransposta($matrizTranspLinhasAlinhadas);

//Conta o tamanho total dos elementos existentes na primeira linha da matriz
$numCaracteresNaLinhaDaMatriz = somarTamanhosElementosDoVetor($matrizAlinhada[0]);

//Deverá ser somado também, ao total de caracteres na linha, o número de separadores e delimitadores de início e fim no vetor
$numSeparadores = contarEspaçoEntreElementosNoVetor($matrizAlinhada[0]);

echo"\n";
desenharCaracterRepetido('*',$numCaracteresNaLinhaDaMatriz + $numSeparadores + 2);
desenhaMatriz($matrizAlinhada);
desenharCaracterRepetido('*',$numCaracteresNaLinhaDaMatriz + $numSeparadores + 2);
echo"\n";