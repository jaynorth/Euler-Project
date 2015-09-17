<?php
#Highly divisible triangular number - Problem 12
ini_set('max_execution_time', 80); 

$time_start = microtime(true);
//////////////////////////////////////////////////////

function divcount($num) {
	$count = 0;
	$top = $num/2;
	for ($i = 2; $i <= $top; $i++)
		if ($num % $i == 0) {
			$top = $num / $i;
			$count += 2;
		}
	return $count;
}

$count = $num = 0;
for ($i = 1; divcount($num) <= 500; $num += $i++);
echo $num;

///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>