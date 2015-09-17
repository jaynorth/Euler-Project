<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Digit factorials - Problem 34 

function factorial_sum ($n, &$total){
	$sum=0;
	$factorials = str_split($n);
	$count = count($factorials);
	for ($i=0; $i<$count; $i++){
		$p=1;
		$j=$factorials[$i];
		for($j=$j; $j>0; $j--){
			$p*=$j; 
		}
	$sum +=$p;
	}
	if ($sum==$n){
		
		
		$total +=$sum;
		
	}
	
	return $total;
}
$total=0;
for ($i=3; $i<100000; $i++){
$total = factorial_sum($i, $total);
}
echo $total;


//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>