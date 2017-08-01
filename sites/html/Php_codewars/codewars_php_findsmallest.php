<?php show_source(__FILE__); ?>

<?php

/*
Given an array of integers your solution should find the smallest integer.

For example:

Given [34, 15, 88, 2] your solution will return 2
Given [34, -345, -1, 100] your solution will return -345
You can assume, for the purpose of this kata, that the supplied array will not be empty.
*/

function smallestInteger ($arr) {
sort($arr);
echo $arr[0];
}

smallestInteger([34, -345, -1, 100]);

?>
