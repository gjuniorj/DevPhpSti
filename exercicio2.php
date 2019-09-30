<?php

include "arrayFunctions.php";

// Exercise 2 - Draws an array with separator (between elements) and initial and final delimiters

$createdArray = createArrayDynamically();
drawArray($createdArray,'|','[',']');

?>