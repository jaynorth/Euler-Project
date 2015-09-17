<?php
#Non-abundant sums - Problem 23
//ini_set('memory_limit','512M');
ini_set('max_execution_time', 30); 

$time_start = microtime(true);
//////////////////////////////////////////////////////
function abundant($n){
	$sum=0;
	for ($i=1; $i<=$n/2; $i++){
		if($n%$i==0){
		$sum +=$i;
		}
	}
	if ($sum>$n){
		$abundant =$n;
	}
	if(isset($abundant)){
	return $abundant;
	}
}

for ($i=1; $i<=20161 ; $i++){
$abundant[$i] = abundant($i);
}

for ($i=1; $i<=20161 ; $i++){
	if($abundant[$i]==NULL){
		unset($abundant[$i]);
	}
}
sort($abundant);
$count = count($abundant);
$limit = 20161;
for ($i=1; $i<=$limit; $i++){
	$list [$i]= false ;
}

for ($i=0; $i<$count; $i++){
	for ($j=0; $j<$count; $j++){
		if ($abundant[$i]+$abundant[$j]<20161){
			$s = $abundant[$i]+$abundant[$j];
			$list[$s]=true;
		}
	}
}

$total=0;
for ($i=1; $i<=$limit; $i++){
	if ($list[$i]==false){
		$total += $i;
	}
}
echo $total;


//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>