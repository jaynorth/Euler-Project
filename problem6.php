<?php 
#Sum square difference - Problem 6
ini_set('max_execution_time', 300); //5 mn

$time_start = microtime(true);
//////////////////////////////////////////
$sumsquares=0;
$sum=0;
$diff=0;
for ($i=1; $i<=100; $i++){
	$sumsquares +=$i*$i;
	$sum +=$i;
		
}

$squaresum = $sum*$sum;

$diff = $squaresum - $sumsquares;
echo $diff;


// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>