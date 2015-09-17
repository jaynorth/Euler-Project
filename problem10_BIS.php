<?php
#Summation of primes - Problem 10
ini_set('max_execution_time', 300); 

$time_start = microtime(true);
//////////////////////////////////////////////////////
$top=200;
$limit = floor(sqrt($top));
echo "Top number is $top<br />";
echo "multiplier limit  is $limit <br />";
$range = range(3, $top, 2);
$sum = 2; 

echo "<hr />";

for ($p=3;$p<=$limit;$p=$p+2){
	$d=3;
	if ($p%$d!=0){
		$sum += $p;
	}
	
}
	

echo "Total is $sum ";


///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>