<?php

// QUESTION 3

// consider the following array

$person_array = array('Leanna', 'derek', 'Lisa', 'John', 'lancelot', 'Michael', 'norman', 'Lawrence of Arabia');

/**
  write a loop that will print out (on a new line) all names that
  begin with L or l (both uppercase and lowercase) that are longer than 5 characters
 */

//SUPPLY YOUR ANSWER BELOW THIS COMMENT

foreach($person_array as $person) { 

    if(substr($person, 0, 1) == 'L' || substr($person, 0, 1) == 'l') {
        if(strlen($person) >= 5) {
            echo $person.'<br>';
        }
    }
}
