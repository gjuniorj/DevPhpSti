<?php

/**
 * Functions aimed for working with matrix
 */

include "arrayFunctions.php";


/**
 * Verifies if parameter is a valid matrix.
 *
 * @param array $matrix
 * @return boolean
 */
function isValidMatrix($matrix){

    //Verifies if the parameter is an an array (matrix)
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

    $rows = readline("Rows: ");
    $columns = readline("Columns: ");

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

    //Verifies if the parameter is an array (matrix)
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

?>

