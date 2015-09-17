<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Largest product in a grid - Problem 11


function factorial_sum ($n){
	$sum=1;
	for ($i=$n; $i>=1; $i--){
	
		$sum = bcmul($sum, $i);
	}
	$sum = array_sum(str_split($sum));
	return $sum;
}

echo $sum = factorial_sum(100);

//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>