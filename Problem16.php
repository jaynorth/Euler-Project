<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Power digit sum - Problem 16

$a = bcpow(2, 1000);
$sum = array_sum(str_split($a));
echo "<br />Sum is $sum <br />";


//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>