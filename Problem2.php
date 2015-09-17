<?php
#Even Fibonacci numbers - Problem 2
$time_start = microtime(true);

$sum = 2;
$fibo=0;
$a=1;
$b=2;
while ($fibo<4000000){
	$fibo = $a+$b;
		 if ($fibo%2==0){
			$sum +=$fibo;
		 }
	$a=$b;
	$b=$fibo;
}
	
echo "Sum is $sum";

// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////

?>