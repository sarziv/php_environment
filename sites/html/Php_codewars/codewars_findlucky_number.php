<?php
 /*
  * Write a function filterLucky/filter_lucky() that accepts a list of integers and filters the list to only include the elements that contain the digit 7.
ghci> filterLucky [1,2,3,4,5,6,7,68,69,70,15,17]
[7,70,17]
 */
 
function filter_lucky(array $a){

    if (in_array("7", $a))
    {
        echo "Match found\n";
        print_r($a);
    }
    else
    {
        echo "Match not found";
    }
}

filter_lucky([17,2,70,4,5,6,7,8,9]);


?>