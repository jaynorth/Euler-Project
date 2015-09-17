<?php
#Longest Collatz sequence - Problem 14
//ini_set('memory_limit','256M');
ini_set('max_execution_time', 60);
$time_start = microtime(true);
//////////////////////////////////////////////////////

function Collatz($n, $limit){

	$count=1;
	while($n*2<$limit){
			$n=$n*2;
			$count++;
		}
	while($n!=1){
		
		if ($n%2==0){
			while($n%2==0 ){
				$n=$n/2;
				$count++;
			}
		}
		if ($n%2!=0 && $n!=1 ){
			$n=3*$n+1;
			$count++;
		}
	}
	return $count;
}

$longest = 2;
$startnum = 2;
$limit=1000000;
for ($i=600001; $i<$limit; $i=$i+2){
$count = Collatz($i, $limit);
	if($count>$longest){
	$longest = $count;
	$startnum = $i;	
	}
}

echo "for Starting number $startnum chain length is $longest";

///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>