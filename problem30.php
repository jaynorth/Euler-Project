<?php
ini_set('max_execution_time', 60); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Digit fifth powers - Problem 30
$max = 5*(bcpow(9,5));

$range= range(100, $max);
$total =0;
foreach ($range as $number){
	$sum=0;
	$n = str_split($number);
	$count = count($n);
		for($i=0; $i<$count; $i++){
			$p=bcpow($n[$i], 5);
			$sum = bcadd($sum, $p);
		}
	if ($sum == $number){
		echo "<b>$number</b>";
		echo "<br />";
		$total +=$number;
	}
}
echo "<br />";
echo "Total is $total";
//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>