<?php 
#10001st prime - Problem 7
ini_set('max_execution_time', 90); 

$time_start = microtime(true);
//////////////////////////////////////////

$prime = array( 1 => 2 , 3, 5, 7, 11, 13);

for ($n=15; $n<=10000000000000000; $n+2){
	$count = count($prime);
	if ($count==10001){
		echo "10001st prime is $n";
		break;
	}
	for ($i=1; $i<=$count; $i++){
		if ($n%$prime[$i]==0){
			$n=$n+2;
			$i=1;					
		}
		elseif($i==$count && $n%$prime[$i]!=0){
			$prime[]=$n;
		}
	}	
}

$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>