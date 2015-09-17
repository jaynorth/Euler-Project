<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Distinct powers - Problem 29 
$sequence = array();
for ($a=2; $a<=100; $a++){
	for ($b=2; $b<=100; $b++){
		$p=pow($a, $b);
		$sequence [] += $p;
	}
}

$result = array_unique($sequence);
sort($result);
//print_r($result);
$count = count($result);
Echo "There are $count distinct terms";
//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>