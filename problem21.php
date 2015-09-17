<?php
#Amicable Numbers - Problem 21
ini_set('max_execution_time', 30); 

$time_start = microtime(true);
//////////////////////////////////////////////////////

function amicable_num($n){
$products[]=0;
	for ($i=1; $i<=$n/2; $i++){
		if ($n%$i==0){
			$products[]=$i;
		}
	}
	//print_r($products);
	$sum = array_sum($products);
	$number[$n]=$sum;
	return $sum;
}
for ($i=1; $i<10000; $i++){
$number[$i] = amicable_num($i);

}
//print_r($number);

for ($i=1; $i<10000; $i++){
	$r= $number[$i];
	if(array_key_exists($r, $number) && $number[$r]==$i && $r!=$i){
	/*
		echo "R is$r";
		echo "<br />";
		echo "I is $i";
		echo "<br />";
	*/
		$total[]=$i;
	}

}
echo array_sum($total);

//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>