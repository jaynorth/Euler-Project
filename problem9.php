<?php
#Special Pythagorean triplet - Problem 9
ini_set('max_execution_time', 30); 

$time_start = microtime(true);
//////////////////////////////////////////
$a=0;
$b=0;
for ($i=1; $i<1000; $i++){
	for ($j=1; $j<1000; $j++){
	$a=$i;
	$b=$j;
	$c = sqrt(($a+$b)*($a-$b));
		if($a+$b+$c==1000){
			$p=$a*$b*$c;
			echo"$a + $b + $c = 1000 and product is <b>$p</b>";
			break 2;			
		}
	}
}


$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>