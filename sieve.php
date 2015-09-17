<?php
#Sieve
ini_set('max_execution_time', 60); 
ini_set('memory_limit','256M');
$time_start = microtime(true);
//////////////////////////////////////////////////////

$limit = 2000000;
for ($i=2; $i<=$limit; $i++){
	$list [$i]= true ;
}

for ($i=2; $i<=floor(sqrt($limit)); $i++){
	if ($list[$i]==true){
		for ($j=$i*$i; $j<=$limit; $j=$j+$i){
			$list[$j]=false;
		}
	}
}
$sum =2;

foreach ($list as $prime=>$value){
	if ($value==true){
		$sum +=$prime;
	}
}
echo $sum;




///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
?>