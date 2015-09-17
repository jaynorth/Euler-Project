<?php
#1000-digit Fibonacci number - Problem 25
ini_set('max_execution_time', 600); 

$time_start = microtime(true);
//////////////////////////////////////////////////////


$a= 1;
$b=2; 
function fibo($n, &$a, &$b){
	$f=bcadd($a,$b);
	$a=$b;
	$b=$f;
	return $f;
	
}

for ($i=4; $i<=100000000; $i++){
	$f=fibo($i, $a, $b);
	if (strlen($f)>=1000){
			echo "Fn is $i";
			break;			;
	}
}

//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>