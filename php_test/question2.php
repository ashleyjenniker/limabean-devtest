<?php

// QUESTION 2
// consider the following array
 
$this_array = array(14,23,264,654,4,34,34);

// write code that will print out the sum of the values in the array
// NOTE: Please do not use the array_sum function


//SUPPLY YOUR ANSWER BELOW THIS COMMENT

function find_sum($array, $number) { 
    $sum = 0; 
    $index = 0; 
    label: $sum += $array[$index++];

    if($index < $number) { 
      // backward jump of goto statement 
      goto label; 
    } 
      
    // return the sum 
    return $sum;
} 
  
// Driver code 
$number = 7; 
  
echo "The some of 14,23,264,654,4,34,34 is : " . find_sum($this_array, $number);