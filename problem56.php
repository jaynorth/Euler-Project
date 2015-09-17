<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Powerful digit sum - Problem 56
$limit=100;
$biggest=0;
for ($a=1; $a<$limit; $a++){
	for ($b=1; $b<$limit; $b++){
		$digit = bcpow($a, $b);
		$sum = array_sum(str_split($digit));
		if ($sum>$biggest){
			$biggest = $sum;
		}
	}
}

echo "Biggest is $biggest";
//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>