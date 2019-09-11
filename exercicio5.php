<?php

include "funcoes.php";

//Execício 5 - Desenhar a matriz transposta
$matNumeros = geraMatrizRandomica();
desenhaMatriz($matNumeros);

//Calcula transposta
$matrizTransposta = retornaMatrizTransposta($matNumeros);

//Desenha a transposta
echo "\nMatriz Transposta:\n";
desenhaMatriz($matrizTransposta);

