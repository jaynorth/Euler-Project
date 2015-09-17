<?php
#Largest prime factor - problem 3
$time_start = microtime(true);
//////////////////////////////////////////
function largest_pfactors($n){
	
	$toplimit = sqrt($n);
	$pfactors = array();
	for($i=1; $i<$toplimit; $i=$i+2){
		if (bcmod($n, $i)==0 && $i!=1){
				$pfactors[]=$i;
		}	
	}
	$count = count($pfactors);
	
	for ($j=0; $j<$count-1;$j++){
		$count = count($pfactors);
		$top = $pfactors[$count-1];
		if ($top%$pfactors[$j]==0){
			unset($pfactors[$count-1]);
			$j=0;
		}
	}	
	return $pfactors;		
}

$n = 600851475143;  //Insert wanted number here
$pfactors = largest_pfactors($n);

$count = count($pfactors);
$largest = $pfactors[$count-1];

echo "Largest Prime Factor for $n  is $largest";

// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////

?>