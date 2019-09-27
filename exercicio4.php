<?php

include "funcoes.php";

//Execício 4
$matNumeros = geraMatrizRandomica();
desenhaMatriz($matNumeros);

//echo count($matNumeros[0]);

echo "Retornar a coluna: ";
$colunaEscolhida = readline();

$vetorBuscado = retornaColuna($matNumeros, $colunaEscolhida);

if ($vetorBuscado != null){

    drawArray($vetorBuscado,',','[',']');
    
}

