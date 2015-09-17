<?php
#Lexicographic permutations - Problem 24 
ini_set('max_execution_time', 30); 

$time_start = microtime(true);
//////////////////////////////////////////////////////
$possible_perms=1;
for ($i=10; $i>0; $i--){
	$possible_perms *= $i;
}
echo "Possible permutations: $possible_perms";

	
//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>