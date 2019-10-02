<?php

include "matrixFunctions.php";

// Exercise 3 - Returns the array row of a matrix. The row index must be given as an argument.

$createdMatrix = createMatrixDynamically();

drawMatrix($createdMatrix);
echo "\n";

//Returning row number
$rowNumber = readline("Return row: ");
$arrayRow = returnMatrixRow($createdMatrix, --$rowNumber);

if ( $arrayRow != null )
    //Draws array row on the screen
    drawArray($arrayRow, ',', '[', ']');

?>