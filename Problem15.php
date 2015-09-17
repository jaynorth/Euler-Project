<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Lattice paths - Problem 15



//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>