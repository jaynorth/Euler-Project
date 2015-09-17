<?php
#Multiples of 3 and 5 - Problem 1

$a = range (3, 999, 3); //multiple 3
$b = range (5, 999, 5); //multiple 5

//print_r($b);
function sum_multiples ($a, $b){

$multiples = array_merge(array_diff($a, $b), array_diff($b, $a), array_intersect($a, $b));
//merges  both arrays
$sum = array_sum($multiples);
echo "Sum of both multiples below 1000 is $sum";

}

sum_multiples ($a, $b);

?>