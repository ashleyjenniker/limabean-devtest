<?php
/**
 * 
 * Take your ID and sort it into a string, ordered by biggest number to smallest. 
 * Example: 
 * 
 * $id = "8910295209871"
 * - your code goes here - 
 * - your code goes here - 
 * - your code goes here - 
 * - etc etc etc - 
 * echo $sortedid; // which outputs 9875210000000
 * 
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 * DO NOT USE THE sort FUNCTIONS FOUND HERE http://php.net/manual/en/array.sorting.php THAT WOULD BE TOO EASY. DO IT YOURSELF. 
 * IF YOU REALLY CAN'T DO IT WITHOUT USING THOSE FUNCTIONS, THEN SUBMIT HAVING USED ONE OF THOSE FUNCTIONS. IT'S BETTER THAN NOT SUBMITTING AT ALL. 
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 */

$id = "9202275168089";

// your code goes here

echo "Unsorted array: " . $id;
echo "<br />";
$length = strlen($id);
for($j = 0; $j < $length-1; $j++) {
  for($i = $j+1; $i < $length; $i++){        
    if($id[$i] > $id[$j]) {
      $temp = $id[$i];
      $id[$i] = $id[$j];
      $id[$j] = $temp;
    }
  }
}

echo "Sorted Array: ";
print_r($id);
echo "<br />";