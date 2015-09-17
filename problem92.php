<?php
#Square digit chains - Problem 92 
ini_set('max_execution_time', 1000); 

$time_start = microtime(true);
//////////////////////////////////////////////////////

function square_chain($q, &$total){
	$list = array();
	$n=$q;
	while($n>1 && 	$n!=89){
		$digits = str_split($n);
		$count = count($digits);
		$sum=0;
		for ($i=0; $i<$count; $i++){
			$sum += pow($digits[$i], 2);
		}
		$n = $sum;	
		
			
	}
	if($n==89 ){
		//$list[]= $q;
		//$list[]= strrev($q);
		$total +=1;
		
		return $total;
	}elseif($n==1){
		return $total;
	}
	
}
$limit=10000000;
$total = 0;
for ($i=1; $i<$limit; $i++){
square_chain($i, $total);
}
//print_r($list);
echo "Total is $total";	
//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>