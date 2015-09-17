<?php 
#Smallest multiple - Problem 5
ini_set('max_execution_time', 300); //5 mn

$time_start = microtime(true);
//////////////////////////////////////////


function even_divis($n){
	$dividers = range(1, 20);
	$count = count($dividers);

	for ($i=11; $i<$count; $i){
		
		if (bcmod($n, $i)!=0){
			$n=$n+2520;
			$i=11;
		}
		if ($i==$count-1 && bcmod($n, $i)==0){
			echo "smallest Number is $n<br />";
			return;
		}else{
		$i++;
		}
		
	}	
}

even_divis(2520);


// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>