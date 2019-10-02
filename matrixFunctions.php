<?php

/**
 * Functions aimed for working with matrix
 */

include "arrayFunctions.php";


/**
 * Checks if parameter is a valid matrix.
 *
 * @param array $matrix
 * @return boolean
 */
function isValidMatrix($matrix){

    //Checks if the parameter is an array (matrix)
    if ( !(is_array($matrix))){
        return false;
    }

    //In case parameter is a valid matrix
    return true;

}


/**
 * Creates dynamically a matrix and inserts elements in it
 *Returns the created matrix.
 *
 */
function createMatrixDynamically(){
    echo "CREATING A MATRIX\n";
    echo "-----------------\n\n";

    //Reads row number and checks if matrix has at least 1 row
    if ( ($rows = readline("Rows: ")) < 1 ){
        echo "ERROR - createMatrixDynamically - Matrix must have at least 1 row.\n";
        exit();
    }

    //Reads column number and verifies if matrix has at least 1 column
    if ( ($columns = readline("Columns: ")) < 1 ){
        echo "ERROR - createMatrixDynamically - Matrix must have at least 1 column.\n";
        exit();
    }

    //Initializes matrix as an empty array
    $createdMatrix = array();

    // Each created array will be a row in the matrix
    for ($i=0; $i<$rows; $i++){

        //Element $i will be an array in the matrix
        $createdMatrix[$i] = array();

        //Creating the row
        $row = $i+1;
        echo "\nLine " . $row . "\n";
        echo "=======\n";

        //Each read element will be a column in the current row
        for ($j=0; $j < $columns; $j++){

            //Reads element
            $column = $j+1;
            echo "Column " . $column . ": " ;
            $element = readline();

            //Adding element to the row (array)
            array_push( $createdMatrix[$i], $element );

        }

        echo "\n";
    }

    return $createdMatrix;
}


/**
 * Draws a matrix on the screen
 * @param array $matrix
 */
function drawMatrix($matrix){

    //Checks if the parameter is an array (matrix)
    if ( !isValidMatrix($matrix) ){
        echo "ERROR - drawMatrix: Parameter is not a matrix.\n";
        exit();
    }

    /** @var $row array */
    //Draws each row of the matrix
    foreach ($matrix as $row) {
        drawArray($row,'|','|','|');
    }

}


/**
 * Returns specified row in the matrix
 *
 * @param array $matrix
 * @param int $row
 * @return array
 */
function returnMatrixRow($matrix, $row){

    //Checks if parameter is a valid matrix
    if ( !isValidMatrix($matrix)){
        echo "ERROR - returnMatrixRow: Parameter is not a matrix.\n";
        exit();
    }

    //Checks if specified row is an integer
    if ( (!is_numeric($row)) || (!is_int($row))  ){
        echo "ERROR - returnMatrixRow: Specified value is not an integer number.\n";
        exit();
    }

    //Checks if specified row is positive and less than the matrix row number
    $matrixRowNumber = count($matrix);
    if ( ($row < 0) || ($row >= $matrixRowNumber) ){
        echo "ERROR - returnMatrixRow: Row number out of matrix limits.\n";
        exit();
    }

    return $matrix[$row];

}


?>

