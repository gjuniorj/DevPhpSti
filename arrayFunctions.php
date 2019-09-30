<?php

/**
 * Functions for working with arrays
 * /



/**
 * Draws an array with separator (between elements) and delimiters (in the beginning and in the end of the array)
  *
 * @param array $elementsArray
 * @param string $separator
 * @param string $initialDelimiter
 * @param string $endDelimiter
 */
function drawArray($elementsArray, $separator, $initialDelimiter, $endDelimiter){

    echo "$initialDelimiter";

    $arrayLength = count($elementsArray);

    for ($ind=0; $ind<$arrayLength; $ind++){

        if ($ind == $arrayLength-1){
            //Draws last element
            echo $elementsArray[$ind];
        }
        else {
            echo $elementsArray[$ind];
            echo $separator;
        }
    }

    echo "$endDelimiter";

    echo "\n";

}


/**
 * Dynamically inserts elements in a array with the specified delimiter between elements.
 *
 * @param string $delimiter
 * @return array
 */
function createArrayDynamically($delimiter = ''){

    $ind = 0;

    do{
        echo "Element: ";
        $elem = readline();

        $array[$ind] = $delimiter.$elem.$delimiter;

        $ind++;

        echo "Insert another element (y/n): ";
        $answer = strtolower(readline());

    } while ($answer == 'y' );

    return $array;

}

?>